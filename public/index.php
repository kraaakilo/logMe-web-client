<?php
session_start();
require "./../vendor/autoload.php";

use Bramus\Router\Router;
use Logme\AddLogRequest;
use Logme\LogMEClient;
use Logme\LogType;


$router = new Router();



$router->get('/', function () {
    include(view('login'));
});


$router->get('/admin', function () {
    dd("You are logged in!");
});

$router->post('/login', function () {
    if (!validateLogin($_POST)) {
        header('Location: /');
    }

    list($username, $password) = [$_POST['username'], $_POST['password']];

    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['user'] = $username;
        header('Location: /admin');
    } else {

        $client = new LogMEClient('localhost:7000', [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);

        $request = new AddLogRequest();
        $request->setDate(date("Y-m-d H:i:s"));
        $request->setLevel("WARNING");
        $request->setType(LogType::FAILED);
        $request->setContent("User $username failed to login!");

        $client->AddLog($request)->wait();

        setSessionMessage("Invalid username or password!");

        header('Location: /');
    }

});



$router->before('GET|POST', '/admin.*', function() {
    if (!isset($_SESSION['user'])) {
        header('location: /');
        exit();
    }
});
$router->run();
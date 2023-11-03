<?php

function view(string $view) : string
{
    return (__DIR__ . "/../views/$view.php");
}

function validateLogin($data) : bool
{
    if (empty($data['username']) || empty($data['password'])) {
        return false;
    }
    return true;
}

function sessionMessage() : string
{
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
        return $message;
    }
    return '';
}
function setSessionMessage(string $message) : void
{
    $_SESSION['message'] = $message;
}
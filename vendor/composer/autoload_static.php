<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84bb2569c2379e73063070bb36916d92
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '4f40dcf4ce9eaff2b9942d46c0db6d21' => __DIR__ . '/../..' . '/src/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84bb2569c2379e73063070bb36916d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84bb2569c2379e73063070bb36916d92::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit84bb2569c2379e73063070bb36916d92::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit84bb2569c2379e73063070bb36916d92::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit84bb2569c2379e73063070bb36916d92::$classMap;

        }, null, ClassLoader::class);
    }
}
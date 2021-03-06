<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita19f4714ac52274467a8f639144edb33
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'notification\\' => 13,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'notification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/__app',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita19f4714ac52274467a8f639144edb33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita19f4714ac52274467a8f639144edb33::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

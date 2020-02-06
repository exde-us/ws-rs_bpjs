<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeb28a0aa5653d70003502ae349edf43
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeb28a0aa5653d70003502ae349edf43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeb28a0aa5653d70003502ae349edf43::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

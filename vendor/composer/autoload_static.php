<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58bcde8ec922acf5f7b48381313107e1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58bcde8ec922acf5f7b48381313107e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58bcde8ec922acf5f7b48381313107e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

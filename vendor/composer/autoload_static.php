<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a9873204b99f91b098ef4336f2457c0
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a9873204b99f91b098ef4336f2457c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a9873204b99f91b098ef4336f2457c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
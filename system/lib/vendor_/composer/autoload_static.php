<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccc19105feb15ecb7360a2b3a18d3d2a
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccc19105feb15ecb7360a2b3a18d3d2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccc19105feb15ecb7360a2b3a18d3d2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
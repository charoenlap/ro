<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fa834eb779a383ac36b2d0a7b2aa8f3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fa834eb779a383ac36b2d0a7b2aa8f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fa834eb779a383ac36b2d0a7b2aa8f3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

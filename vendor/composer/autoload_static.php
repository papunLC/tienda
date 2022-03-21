<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85a7ce988d1a345f696f54dc0918332f
{
    public static $files = array (
        '6f6d22439f39e01cb9df927cf65f604d' => __DIR__ . '/../..' . '/app/helpers.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85a7ce988d1a345f696f54dc0918332f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85a7ce988d1a345f696f54dc0918332f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85a7ce988d1a345f696f54dc0918332f::$classMap;

        }, null, ClassLoader::class);
    }
}
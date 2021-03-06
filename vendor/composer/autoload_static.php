<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit337d46cf1a00c8310605878a67053e56
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'smokejkee\\test2\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'smokejkee\\test2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/src/plugins',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit337d46cf1a00c8310605878a67053e56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit337d46cf1a00c8310605878a67053e56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit337d46cf1a00c8310605878a67053e56::$classMap;

        }, null, ClassLoader::class);
    }
}

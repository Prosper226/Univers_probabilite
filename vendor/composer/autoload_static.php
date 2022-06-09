<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc058f0a5ca9b5b2b75cc1eb0be420d08
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'SciPhp\\' => 7,
            'SciPhpTest\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'SciPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/sciphp/numphp/src/SciPhp',
        ),
        'SciPhpTest\\' => 
        array (
            0 => __DIR__ . '/..' . '/sciphp/numphp/test',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc058f0a5ca9b5b2b75cc1eb0be420d08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc058f0a5ca9b5b2b75cc1eb0be420d08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc058f0a5ca9b5b2b75cc1eb0be420d08::$classMap;

        }, null, ClassLoader::class);
    }
}
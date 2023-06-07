<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10a41d304fbf1fdf6c11facd35b55ccb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clases\\' => 7,
        ),
        'B' => 
        array (
            'BD\\' => 3,
        ),
        'A' => 
        array (
            'Alons\\ExamenJunio\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'BD\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'Alons\\ExamenJunio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10a41d304fbf1fdf6c11facd35b55ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10a41d304fbf1fdf6c11facd35b55ccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10a41d304fbf1fdf6c11facd35b55ccb::$classMap;

        }, null, ClassLoader::class);
    }
}
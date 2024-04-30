<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79f4ca33c28ecbae50e1341817ea1f2b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sterc\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sterc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79f4ca33c28ecbae50e1341817ea1f2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79f4ca33c28ecbae50e1341817ea1f2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79f4ca33c28ecbae50e1341817ea1f2b::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fc825c14343812ba5cf3fbd971bda3c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaicolAlmaralesTamayo\\Autenticacion\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaicolAlmaralesTamayo\\Autenticacion\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fc825c14343812ba5cf3fbd971bda3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fc825c14343812ba5cf3fbd971bda3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0fc825c14343812ba5cf3fbd971bda3c::$classMap;

        }, null, ClassLoader::class);
    }
}

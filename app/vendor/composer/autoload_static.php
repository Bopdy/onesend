<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc928d3b272cd8ba1c7416dbfdcfa7864
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blockchain\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blockchain\\' => 
        array (
            0 => __DIR__ . '/..' . '/blockchain/blockchain/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc928d3b272cd8ba1c7416dbfdcfa7864::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc928d3b272cd8ba1c7416dbfdcfa7864::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

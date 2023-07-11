<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1edca6971299ee82812ed6a31ae7398c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpXmlRpc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpXmlRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpxmlrpc/phpxmlrpc/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1edca6971299ee82812ed6a31ae7398c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1edca6971299ee82812ed6a31ae7398c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1edca6971299ee82812ed6a31ae7398c::$classMap;

        }, null, ClassLoader::class);
    }
}

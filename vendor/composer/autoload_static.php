<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcce85d82663650fa49648e30442b6b48
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'khalil\\Translate\\' => 17,
            'khalil\\Src\\' => 11,
            'khalil\\Service\\' => 15,
            'khalil\\Repository\\' => 18,
            'khalil\\Entity\\' => 14,
            'khalil\\Core\\' => 12,
            'khalil\\Controller\\' => 18,
            'khalil\\Config\\' => 14,
            'khalil\\App\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'khalil\\Translate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/translate',
        ),
        'khalil\\Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'khalil\\Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/service',
        ),
        'khalil\\Repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/repository',
        ),
        'khalil\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/entity',
        ),
        'khalil\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/core',
        ),
        'khalil\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'khalil\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'khalil\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcce85d82663650fa49648e30442b6b48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcce85d82663650fa49648e30442b6b48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcce85d82663650fa49648e30442b6b48::$classMap;

        }, null, ClassLoader::class);
    }
}

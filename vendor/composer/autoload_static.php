<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71e355336d5df661c66f1f3b3e4e4a48
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GameQ\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GameQ\\' => 
        array (
            0 => __DIR__ . '/..' . '/austinb/gameq/src/GameQ',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71e355336d5df661c66f1f3b3e4e4a48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71e355336d5df661c66f1f3b3e4e4a48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71e355336d5df661c66f1f3b3e4e4a48::$classMap;

        }, null, ClassLoader::class);
    }
}

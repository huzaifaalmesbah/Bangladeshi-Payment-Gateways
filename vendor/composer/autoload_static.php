<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d74a87dd06376acfbcfb642a63a1dac
{
    public static $files = array (
        'b4c61c4e51dc5b30b9667984a726c468' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'ultraDevs\\BDPG\\' => 15,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ultraDevs\\BDPG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d74a87dd06376acfbcfb642a63a1dac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d74a87dd06376acfbcfb642a63a1dac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d74a87dd06376acfbcfb642a63a1dac::$classMap;

        }, null, ClassLoader::class);
    }
}

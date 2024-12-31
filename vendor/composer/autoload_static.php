<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dafd64da23ba91b16d6c44463848599
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youcode\\CareerLink\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youcode\\CareerLink\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dafd64da23ba91b16d6c44463848599::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dafd64da23ba91b16d6c44463848599::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dafd64da23ba91b16d6c44463848599::$classMap;

        }, null, ClassLoader::class);
    }
}

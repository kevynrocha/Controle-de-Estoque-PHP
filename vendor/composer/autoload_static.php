<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54d74e2283741ef0e789e39503db8f48
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Classe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'Classe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54d74e2283741ef0e789e39503db8f48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54d74e2283741ef0e789e39503db8f48::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

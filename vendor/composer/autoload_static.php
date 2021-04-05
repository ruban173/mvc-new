<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadfd3547707b0217b15e5faaad77b875
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'app\\controllers\\SiteController' => __DIR__ . '/../..' . '/app/controllers/SiteController.php',
        'app\\core\\BaseController' => __DIR__ . '/../..' . '/app/core/BaseController.php',
        'app\\core\\BaseModel' => __DIR__ . '/../..' . '/app/core/BaseModel.php',
        'app\\core\\BaseView' => __DIR__ . '/../..' . '/app/core/BaseView.php',
        'app\\core\\FrontController' => __DIR__ . '/../..' . '/app/core/FrontController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadfd3547707b0217b15e5faaad77b875::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadfd3547707b0217b15e5faaad77b875::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadfd3547707b0217b15e5faaad77b875::$classMap;

        }, null, ClassLoader::class);
    }
}

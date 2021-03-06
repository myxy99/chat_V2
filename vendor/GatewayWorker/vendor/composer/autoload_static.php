<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53bd66c7ed23a4c6f4d42de8cfdd7bed
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/gateway-worker/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53bd66c7ed23a4c6f4d42de8cfdd7bed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53bd66c7ed23a4c6f4d42de8cfdd7bed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

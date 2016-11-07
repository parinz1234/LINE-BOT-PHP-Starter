<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4c540c62318eb44da6cfe9db9d7bed1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4c540c62318eb44da6cfe9db9d7bed1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4c540c62318eb44da6cfe9db9d7bed1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

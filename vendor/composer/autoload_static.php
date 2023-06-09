<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb1088df5b3f15fe812ace98c17d9cb6
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bsobbe\\ithenticate\\' => 19,
        ),
        'P' => 
        array (
            'PhpXmlRpc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bsobbe\\ithenticate\\' => 
        array (
            0 => __DIR__ . '/..' . '/bsobbe/ithenticate',
        ),
        'PhpXmlRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpxmlrpc/phpxmlrpc/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb1088df5b3f15fe812ace98c17d9cb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb1088df5b3f15fe812ace98c17d9cb6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

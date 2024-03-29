<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28fd69ce7a799988756b1b4d70e3e1be
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28fd69ce7a799988756b1b4d70e3e1be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28fd69ce7a799988756b1b4d70e3e1be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28fd69ce7a799988756b1b4d70e3e1be::$classMap;

        }, null, ClassLoader::class);
    }
}

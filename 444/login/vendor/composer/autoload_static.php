<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd73b4299a0516f4865e385bc1940816
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd73b4299a0516f4865e385bc1940816::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd73b4299a0516f4865e385bc1940816::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd73b4299a0516f4865e385bc1940816::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc05eed6d9a6ffbbcbdd5914f22de5c9a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc05eed6d9a6ffbbcbdd5914f22de5c9a::$classMap;

        }, null, ClassLoader::class);
    }
}

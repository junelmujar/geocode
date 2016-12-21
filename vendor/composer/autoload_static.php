<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94397588f88b73a5e1e3a17b9be1a379
{
    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'GoogleMapsGeocoder' => 
            array (
                0 => __DIR__ . '/..' . '/jstayton/google-maps-geocoder/src',
            ),
        ),
    );

    public static $classMap = array (
        'DB' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'DBHelper' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'DBTransaction' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDB' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBEval' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBException' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'WhereClause' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit94397588f88b73a5e1e3a17b9be1a379::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit94397588f88b73a5e1e3a17b9be1a379::$classMap;

        }, null, ClassLoader::class);
    }
}

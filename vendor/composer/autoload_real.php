<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit72fa9c279e8493ea5e37cb5543528216
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit72fa9c279e8493ea5e37cb5543528216', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit72fa9c279e8493ea5e37cb5543528216', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit72fa9c279e8493ea5e37cb5543528216::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

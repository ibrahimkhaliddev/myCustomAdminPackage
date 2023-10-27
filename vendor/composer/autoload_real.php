<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfbe033db55afa3bc822153e5bbe1d8b0
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

        spl_autoload_register(array('ComposerAutoloaderInitfbe033db55afa3bc822153e5bbe1d8b0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfbe033db55afa3bc822153e5bbe1d8b0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfbe033db55afa3bc822153e5bbe1d8b0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInit06830417c7f3111e6920db8fc53f9890 {
  private static $loader;

  public static function loadClassLoader($class) {
    if ('Composer\Autoload\ClassLoader' === $class) {
      require __DIR__ . '/ClassLoader.php';
    }
  }

  public static function getLoader() {
    if (null !== self::$loader) {
      return self::$loader;
    }

    spl_autoload_register(array('ComposerAutoloaderInit06830417c7f3111e6920db8fc53f9890', 'loadClassLoader'), true, true);
    self::$loader = $loader = new \Composer\Autoload\ClassLoader();
    spl_autoload_unregister(array('ComposerAutoloaderInit06830417c7f3111e6920db8fc53f9890', 'loadClassLoader'));

    $vendorDir = dirname(__DIR__);
    $baseDir = dirname($vendorDir);

    $map = require __DIR__ . '/autoload_namespaces.php';
    foreach ($map as $namespace => $path) {
      $loader->add($namespace, $path);
    }

    $classMap = require __DIR__ . '/autoload_classmap.php';
    if ($classMap) {
      $loader->addClassMap($classMap);
    }

    $loader->register(true);

    require $vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php';

    return $loader;
  }
}

<?php
/**
 * Symfony 2 nin autoloaderýný kullanarak namespaceleri tanýmlýyoruz.
 */

require_once __DIR__ . '/Vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

// Register Namespaces
$loader->registerNamespace('Hys', __DIR__.'/');
$loader->registerNamespace('Firma', __DIR__.'/');
$loader->registerNamespace('Controller', __DIR__.'/');

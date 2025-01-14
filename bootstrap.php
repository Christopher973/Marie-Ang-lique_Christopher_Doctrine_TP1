<?php
// bootstrap.php
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

// require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = ORMSetup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'db_doctrine',
    'user' => 'root',
    'password' => ''
);

// Configuration de l'autoloader pour les namespaces Dao et Repository
$config->setAutoloadNamespaces([
    'Entity' => __DIR__ . '/src/Entity',
    'Dao' => __DIR__ . '/src/Dao',
    'Repository' => __DIR__ . '/src/Repository',
]);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
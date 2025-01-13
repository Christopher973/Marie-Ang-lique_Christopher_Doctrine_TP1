<?php
require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
$entitiesPath = [join(DIRECTORY_SEPARATOR, [__DIR__, "src", "Entity"])];
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
// Connexion à la base de données
$dbParams = [
    'driver' => 'pdo_mysql','host' => '173.30.0.1', 'port' => '3337', 'charset' => 'utf8',
    'user' => 'doctrine', 'password' => 'doctrine', 'dbname' => 'db_doctrine',
];
$config = ORMSetup::createAnnotationMetadataConfiguration(
    $entitiesPath,$isDevMode,$proxyDir, $cache,$useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);
return $entityManager;
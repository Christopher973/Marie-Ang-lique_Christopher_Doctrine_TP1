<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
// Ajuster le chemin à votre fichier bootstrap.php
require __DIR__ . '/bootstrap.php';
ConsoleRunner::run(new SingleManagerProvider($entityManager));
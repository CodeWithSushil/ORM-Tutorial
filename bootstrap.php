<?php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$config = ORMSetup::createAttributeMetadataConfiguration(
  paths: array(__DIR__."/config/doctrine.yaml"),
  isDevMode: true,
);

$connection = DriverManager::getConnection([
  'driver' => 'pdo_sqlite',
  'path' => __DIR__.'/database/database.sqlite',
]);

$entityManager = new EntityManager($connection, $config);

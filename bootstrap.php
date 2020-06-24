<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);

// database configuration parameters
//$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
//);
//$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
//
//$connectionParams = array(
//    'dbname' => 'php',
//    'user' => 'root',
//    'password' => '',
//    'host' => 'localhost',
//    'driver' => 'pdo_mysql',
//);

$params = array(
    'url' => 'mysql://root:@localhost/symfonyapi',
);
$db = \Doctrine\DBAL\DriverManager::getConnection($params);
//$queryBuilder = $db->createQueryBuilder();

// obtaining the entity manager
//$entityManager = EntityManager::create($db, $config);
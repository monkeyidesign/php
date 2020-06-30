<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$params = array(
    'url' => 'mysql://root:@localhost/symfonyapi',
);
$db = \Doctrine\DBAL\DriverManager::getConnection($params);
//$queryBuilder = $db->createQueryBuilder();

// obtaining the entity manager
$entityManager = EntityManager::create($db, $config);
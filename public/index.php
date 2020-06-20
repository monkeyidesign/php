<?php
require __DIR__.'/../vendor/autoload.php';

use App\Database;
use App\Test\InitialClass;


$db = new Database();

$totalExpanded  = new InitialClass('12.50');

$totalExpanded->setName('Mr.Sam');
var_dump($totalExpanded->name);

$totalExpanded->setFee('12');
var_dump($totalExpanded->getFee());

var_dump($db);




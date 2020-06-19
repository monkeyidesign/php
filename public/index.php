<?php
require __DIR__.'/../vendor/autoload.php';
use App\Library\Developer;

$doing = new Developer();

var_dump($doing->coding());
var_dump($doing->mobile());
var_dump($doing->symfonyInstallation());
var_dump($doing->laravelInstallation());
var_dump($doing->getDefault());
var_dump($doing->DefaultJavascript());
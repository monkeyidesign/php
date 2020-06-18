<?php
require __DIR__.'/../vendor/autoload.php';
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

$data = [
    "name" => "Samreaksa Ros",
    "job" => "Full-Stack Web Developer"
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);

$formats = [$json, $xml, $yml];

foreach ($formats as $format){
    if($format instanceof NamedFormatInterface){
        var_dump($format->getName());
    }
    var_dump($format->convert());
    if($format instanceof FromStringInterface){
        var_dump($format->convertFormatString('{"name": "Mr.Sam", {"job" : "Freelance Dev"}}'));
    }
}



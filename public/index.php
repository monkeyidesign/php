<?php
require __DIR__.'/../vendor/autoload.php';
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

//array_filter(array, callbackfunction, flag)
$department = ['IT', 'Accounting', 'Administrative Services', 'Senior Adviser'];
$val = 'IT';
$filtered_array = array_filter($department, function ($el) use ($val) {
    return ($el != $val);
} );
print_r($filtered_array);echo '<hr>';

$data = [
    "name" => "Mr.Sam",
    "fav" => "Programing language"
];

$formats = [
    new JSON($data),
    new XML($data),
    new YAML($data)
];

function findByName( string $name, array $formats): ?\App\Format\BaseFormat{
    //the use (use ($name)) keyword for accessing outside of $anonymous_function
    $anonymous_function = array_filter($formats, function ($format) use ($name) {
        return $format->getName() === $name;
    });
    if(count($anonymous_function)){
        return reset($anonymous_function);
    }
    return null;
}

var_dump(findByName('JSON', $formats));
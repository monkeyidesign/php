<?php
require __DIR__.'/../vendor/autoload.php';

$numbers = [1,2,3,4,5];

//Loop solution
$new_val_by_loop= [];
foreach ($numbers as $number){
    $new_val_by_loop[] = $number * 5;
}
var_dump($new_val_by_loop);

//Array map solution
$new_val_by_array_map = array_map(function ($data){
    return $data * 5;
}, $numbers);
var_dump($new_val_by_array_map);
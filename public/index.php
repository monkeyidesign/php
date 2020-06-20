<?php
require __DIR__.'/../vendor/autoload.php';

$numbers = [1,2,3,4,5];

//Loop solution
$new_val_by_loop= [];
foreach ($numbers as $number){
    if($number < 3){
        $new_val_by_loop[] = $number;
    }
}
var_dump($new_val_by_loop);

//Array map solution
$new_val_by_array_map = array_filter($numbers, function ($data){
    return $data < 3;
});
var_dump($new_val_by_array_map);
<?php
//Passing by Reference
function test(&$b){
    $b = $b + 10;
}

$a = 10;
test($a);
echo "Will be displayed 20 if it's passing by reference: {$a}<br>";


//Passing by Reference into array
$arr = [1, 2, 3];
echo "Before-> Will be displayed 1 if it's passing by value 1: {$arr[0]} <br>";
function testArr(&$arr){
    $arr[0] = 0;
}

testArr($arr);
echo "After-> Will be displayed 1 if it's passing by value 0: {$arr[0]}";
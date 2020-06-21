<?php
namespace App\Calc;

abstract class CalcService
{
    public static function calculator($calc, string $operator){
        switch ($operator) {
            case 'add':
                $result = $calc->num1 + $calc->num2;
                return $result;
                break;
            case 'sub':
                $result = $calc->num1 - $calc->num2;
                return $result;
                break;
            case 'div':
                $result = $calc->num1 / $calc->num2;
                return $result;
                break;
            case 'mul':
                $result = $calc->num1 * $calc->num2;
                return $result;
                break;
            case 'percentage':
                $result = ($calc->num1 * $calc->num2) / 100;
                return $result;
                break;
            default:
                break;
        }
    }
}
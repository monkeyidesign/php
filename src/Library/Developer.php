<?php
namespace App\Library;

class Developer
{
    use Flutter, Laravel, Symfony, ReactJS, Vue{
        Vue::getDefault insteadof ReactJS;
        ReactJS::getDefault as DefaultJavascript;
    }
    public function coding() {
        return "Run installer";
    }
}
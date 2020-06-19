<?php
namespace App\Library;

trait Laravel
{
    public function laravelInstallation(){
        return "composer global require laravel/installer";
    }
}
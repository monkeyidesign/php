<?php
namespace App\Library;

trait Symfony
{
    public function symfonyInstallation(){
        return "composer create-project symfony/website-skeleton my_project_name";
    }
}
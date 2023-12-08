<?php

class HomeController{
    public function index(){
        $view = file_get_contents(__DIR__."/../view/home.php");

        require(__DIR__."/../template/layout.php");
    }
}
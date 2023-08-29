<?php
namespace App\Controllers;

class HomeController{
    

    public function index()
    {
        //echo "Hi from HomeController";
        view("home.index");
    }
}
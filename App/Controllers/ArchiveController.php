<?php
namespace App\Controllers;

class ArchiveController{
    

    public function index()
    {
        //Models 
        //echo "Hi this is ArchiveController";
        view("archive.index");
    }

    public function articles()
    {
        //Models 
        //echo "Hi this is ArchiveController";
        view("archive.articles");
    }

    public function products()
    {
        //Models 
        //echo "Hi this is ArchiveController";
        view("archive.products");
    }
}
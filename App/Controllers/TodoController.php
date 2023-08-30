<?php
namespace App\Controllers;

class TodoController{
    

    public function list()
    {
        //echo "list of todo items";
        $data = [
            'tasks' =>  ['First Task', 'Second Task', 'Third Task', 'Fourth Task', 'another Task'],
            'title' => 'List of tasks'
        ];

        extract($data); //open associative array and convert key to variable

        view("todo.list",$data);
    }
}
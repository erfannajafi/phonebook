<?php

use App\Core\Routing\Route;

Route::get('/','HomeController@index');

Route::get('/archive','ArchiveController@index');
Route::get('/archive/articles','ArchiveController@articles');
Route::get('/archive/products','ArchiveController@products');

Route::add([ 'get' , 'post' , 'put' ] , '/a' , function(){
    echo "welcome";
});

Route::get('/null' );

Route::get('/b' , function(){
    echo "save ok";
    view('archive/index');
});

Route::put('/c' , ['Controller','Method']);

Route::put('/d' , 'Controller@Method');

Route::get('/todo/list','TodoController@list');
Route::get('/todo/add','TodoController@add');


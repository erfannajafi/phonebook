<?php

use App\Core\Routing\Route;

Route::add('get' , '/' , function(){
    echo "welcome";
});

Route::get('/null' );

Route::post('/saveForm' , function(){
    echo "save ok";
});

Route::get('/test' , 'Controller@Method');


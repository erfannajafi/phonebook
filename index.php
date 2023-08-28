<?php

//front controller

use App\Core\Request;
use App\Core\Routing\Route;

include "bootstrap/init.php";


//var_dump($request->isset('id'));
//var_dump($request->input('id'));
//$request->redirect('test');

var_dump(Route::routes());







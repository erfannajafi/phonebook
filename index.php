<?php

//front controller

use App\Core\Request;
use App\Core\Routing\Route;
use App\Core\Routing\Router;

include "bootstrap/init.php";


//var_dump($request->isset('id'));
//var_dump($request->input('id'));
//$request->redirect('test');

//var_dump(Route::routes());

$router = new Router;
$router->run();



//$route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';
// $route = '/post/{slug}';
// $pattern = "/^".str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route)."$/";
// nice_dump($pattern);


// $uri1 = '/post/what-is-php';
// $uri2 = '/post/why-is-php';
// $uri3 = '/product/why-is-php';

// $result = preg_match($route_pattern , $uri1 , $matches);
// var_dump($matches);









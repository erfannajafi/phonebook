<?php

//front controller

use App\Core\Request;
use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Models\Product;
use App\Models\User;

include "bootstrap/init.php";


//var_dump($request->isset('id'));
//var_dump($request->input('id'));
//$request->redirect('test');

//var_dump(Route::routes());


// $user_data = [
//     'id' => rand(5,1000),
//     'name' => "sara"
// ];

// $userModel = new User();
// $userModel->create($user_data);
// $user = $userModel->getAll();
// var_dump($user);

// $product_model = new Product();
// for($i=1 ; $i<=20 ; $i++){
//     $product_model->create([
//         'id' => $i,
//         'title' => "Product-$i"
//     ]);
// }


// $router = new Router;
// $router->run();















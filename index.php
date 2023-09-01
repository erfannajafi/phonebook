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


$user_data = [
    'name' => "test",
    'email' => "test@gmail.com",
    'password' => "123"
];

$userModel = new User();
// $result = $userModel->create($user_data);
// //$user = $userModel->getAll();
// var_dump($result);

// $result = $userModel->find(2);
//var_dump($result);

// $result = $userModel->getAll();
//var_dump($result);

// $result = $userModel->get(['email' , 'name'] , ['id[<>]' => [2,4]]);
//var_dump($result);

// $result = $userModel->get(['email' , 'name'] , ['email[~]' => 'erfan']);
//var_dump($result);

// $result = $userModel->update(['name' => 'Hasan'] , ['id[<=]' => 3]);
// var_dump($result);

// $result = $userModel->delete( ['id[>=]' => 4]);
// var_dump($result);

//var_dump($_ENV['DB_NAME']);

// $result = $userModel->count(['id[>]' => 2]);
// var_dump($result);

// $result = $userModel->sum('id' , ['id[>=]' => 2]);
// var_dump($result);


// $productModel = new Product();

// $product_data = [
//     'title' => "title",
//     'price' => rand(1,100) * 1000
// ];

// $result = $productModel->create($product_data);

// $result = $productModel->getAll();
// var_dump($result);



$router = new Router;
$router->run();















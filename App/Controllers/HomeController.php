<?php
namespace App\Controllers;

use App\Models\Contact;

class HomeController{
    private $contactModel;

    public function __construct(){
        $this->contactModel = new Contact();
    }

    
    public function index()
    {
        // $faker = \Faker\Factory::create();
        // echo $faker->name();
        // echo $faker->email();
        // echo $faker->phoneNumber();

        // for ($i=0 ; $i<1000 ; $i++ ){
        //     $this->contactModel->create([
        //         'name' => $faker->name(),
        //         'mobile' => $faker->phoneNumber(),
        //         'email' => $faker->email()
        //         ]);
        // }

        $data = [
            'contacts' => $this->contactModel->getAll(),
            'num_contacts' => $this->contactModel->count(),
            'pageSize' => $this->contactModel->getPageSize()
        ];
        view('home.index' , $data);
    }
}
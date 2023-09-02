<?php
namespace App\Controllers;

use App\Models\User;

class PostController{
    

    public function single()
    {
        global $request;
        // $user = new User(2);
        // $username = (new User(1))->name;
        // var_dump($username);
        // var_dump($user->email);
        // var_dump($user->name);
        // var_dump($user->dd);
        $user = (new User(1));
        $result = $user->remove();
        //var_dump($result);


        //update
        $user = (new User(3));
        $user->name = 'Erfan';
        $user->email = 'Mari@gmail.com';
        $user->save();

        var_dump($user->getAttribute('name'));




        $slug = $request->get_route_param('slug');
        echo "slug: $slug <br>";
    }

    public function comment()
    {
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug <br> comment_id: $cid";
    }
}
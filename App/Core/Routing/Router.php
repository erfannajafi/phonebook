<?php
namespace App\Core\Routing;

use App\Core\Request;
use Exception;

class Router{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\App\Controllers\\';

    public function __construct(){
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        //var_dump($this->current_route);
    }

    public function findRoute(Request $request){
        //echo  $request->getMethod() . " " . $request->getUri();
        foreach($this->routes as $route){
            if ( $request->getUri() == $route['uri'] ) {
                return $route;
            }
        }
        return null;
    }


    public function dispatch404(){
        header("HTTP/1.0 404 Not Found");
        //echo "404: Not Found";
        //include BASEPATH . "/views/errors/404.php";
        view('errors.404');
        die(); 
    }

    public function dispatch405(){
        header("HTTP/1.0 405 Method Not Allowed");
        //echo "405: Method Not Allowed";
        //include BASEPATH . "/views/errors/405.php";
        view('errors.405');
        die(); 
    }

    private function dispatch($route){
        
        $action = $route['action'];
        # action : null
        if(is_null($action) || empty($action)){
            return;
        }

        # action:  closure
        if(is_callable($action)){
            $action();
            //call_user_func($action);
        }


        # action : Controller@Method
        if(is_string($action)){
            $action = explode('@' , $action);
        }

        # action : ['Controller' , 'Method']
        if(is_array($action)){
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if(!class_exists($class_name)){
                throw new \Exception("Class $class_name Not Exists!");
            }
            $controller = new $class_name();
            if(!method_exists($controller , $method)){
                throw new \Exception("Class $method Not Exists in class $class_name !");
            }
            $controller->{$method}();

        }


    }


    public function run(){
        # 405 : invalid request method
        if ( !(in_array($this->request->getMethod() , $this->current_route['methods'])) )
        {
            $this->dispatch405();
        }
        

        # 404 : uri not found
        else if(is_null($this->current_route))
        {
            $this->dispatch404();
        }



        $this->dispatch($this->current_route);
        

        




    }


}
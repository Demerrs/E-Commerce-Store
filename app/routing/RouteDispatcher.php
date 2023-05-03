<?php
namespace App\routing;

use AltoRouter;

class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router){
        $this->match=$router->match();



        if($this->match){

            list($controller,$method) =explode('@', $this->match['target']);

            $this->controller=$controller;
            $this->method=$method;

            if(is_callable((array(new $this->controller,$this->method)))){
                call_user_func_array(array(new $this->controller,$this->method),
                    array($this->match['params']));


            }else{
                echo " The method {$this->method} is not defined in {$this->controller}";
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
            //include(__DIR__ . '/../../resources/views/errors/404.blade.php');
            view('errors/404');
        };


    }
}

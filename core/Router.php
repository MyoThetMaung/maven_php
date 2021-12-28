<?php

    class Router{

        protected $router = [
            "GET" => [
                // 'users' => 'controllers/user.php'
            ],
            "POST" => [
                // 'users' => 'controllers/user.php'
            ]
        ];

        public static function load($file){
            $router = new static;
            require $file;
            return $router;                                                       //for calling direct() function
        }
        
        public function define($router){
            return $this->router = $router;
        }

        public function get($uri,$controller){
            return $this->router['GET'][$uri] = $controller;
        }

        public function post($uri,$controller){
            return $this->router['POST'][$uri] = $controller;
        }

        public function direct($uri,$request_type){

            if(array_key_exists($uri, $this-> routes[$request_type])){

                return $this->call_method(...explode('@',$this->routes[$request_type][$uri]));
            }
           
        }

        public function call_method($controller, $method){

            $controller = new $controller;

            if(!method_exists($controller, $method)){
                
                throw new Exception ('Method could not find!');
            }
            return $controller-> $method();
        }

       
    }

  
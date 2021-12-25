<?php

    class Router{

        protected $router = [];

        public static function load($file){
            $router = new static;
            require $file;
            return $router;                                                       //for calling direct() function
        }
        
        public function define($router){
            return $this->router = $router;
        }

        public function direct($uri){
            if(array_key_exists($uri, $this->router)){
                return $this->router[$uri];
            }
        }
    }

  
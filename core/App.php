<?php

use JetBrains\PhpStorm\ExpectedValues;

class App{
        
        protected static $registry =  [];

        public function bind($key, $value){

            static::$registry[$key] = $value;
        }

        public function get($key){

            if(!array_key_exists($key, static::$registry)){
                throw new Exception ('array key not found!');
            }
            return static::$registry[$key];
        }
    }
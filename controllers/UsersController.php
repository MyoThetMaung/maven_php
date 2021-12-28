<?php

     class UserController{

        public function index(){

            $tasks = App::get('database')-> select_all('task');

            require "view/index.view.php";
            
        }
     }
<?php

    require "vendor/autoload.php";


    App::bind('config', require 'config.php');

    App::bind('database', new QueryBuilder(Connection::make(App::make('config')['data_base'])));
    


    // $app =[];
    // $app['config'] = require 'config.php';
    // $app['database'] = new QueryBuilder(Connection::make($app['config']['data_base']));


    // $app =[
    //     ['config'] => [

    //     ],

    //     ['database'] => [

    //     ]
    // ]


   

    
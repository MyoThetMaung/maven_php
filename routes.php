<?php

    // $router->define([

    //     '' => 'controllers/index.php',
    //     'product' => 'controllers/product.php',
    //     'contact' => 'controllers/contact.php',
    //     'users' => 'controllers/user.php'

    // ]);

    // $router->get('','controllers/index.php');
    // $router->get('product','controllers/product.php');
    // $router->get('contact','controllers/contact.php');
    // $router->get('users','controllers/user.php');
    // $router->post('users','controllers/user.php');
   
    $router -> get('','PageController@index');
    $router -> get('contact','PageController@contact');
    $router -> get('product','PageController@product');
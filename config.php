<?php

    return [

        'data' => [
            'connection' => 'mysql:host=localhost;',
            'name' => 'dbname=maven',
            'user' => 'root',
            'password' => '',
            'option' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];
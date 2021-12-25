<?php

    return [

        'data_base' => [
            'connection' => 'mysql:host=localhost;',
            'name' => 'dbname=maven',
            'user' => 'root',
            'password' => '',
            'option' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];
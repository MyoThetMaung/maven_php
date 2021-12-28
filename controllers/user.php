<?php

    $users = $app['database']-> insert('users',$_POST['username']);

    header('Location: /');
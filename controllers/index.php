<?php

    $tasks = $app['database']-> select_all('task');

    require "view/index.view.php";
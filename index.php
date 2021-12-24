
<?php 
   

    $query =  require "bootstrap.php";

    $tasks = $query-> select_all('task');

    require "index.view.php";
<?php require "view/partials/header.php"; ?>

    <ul>
        <?php foreach ($tasks as $task){ ?>
            <li>
                <?php if($task->completed == 0){ ?>
                    <strike><?= $task->description ?></strike>
                <?php 
                    }else{
                        echo $task -> description;
                    }?>   
            </li>
        <?php } ?>
    </ul>
    
    <?php 
        $users = $app['database']-> select_all('users');
            foreach ($users as $user) {
                echo $user->username."<br>";
            }
    ?>
    

    <h1>User form</h1>
    <form action="users" method="post">

        <input type="text" name="username">
        <button type="submit">Submit</button>
        
    </form>


<?php require "view/partials/footer.php"; ?>
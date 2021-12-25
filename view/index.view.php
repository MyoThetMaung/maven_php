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

<?php require "view/partials/footer.php"; ?>
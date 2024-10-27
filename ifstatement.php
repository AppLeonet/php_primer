<?php 
$title = "If-Else Statements";
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <?php 
        // An if statement that will carry out an action based on the value of variable
        echo '<h2>If Statement</h2>';

        $grade = 50;
        // ===, ==, <, >, >=, <=
        if($grade>= 50){
            echo '<h3 style="color: green">You have passed</h3>';
        }
        else{
            echo '<h3 style="color: red">You have failed</h3>';
        }

        $grade = 'A';
        // If- Else
        if($grade == 'A'){
            echo '<h2 style="color: green">You are superstar!</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">You did well</h2>';
        }
        else{
            echo '<h2 style="color: red">You have failed...</h2>';
        }
    ?>
    <?php require 'includes/footer.php'?>

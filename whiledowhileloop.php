<?php 
$title = "While/Do-While Loops";
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <h2>While Loop</h2>
    <?php 
    
        $grade= 0;
        //infinite loop
       // while($grade<10){
         //   echo '<p>I am less than 10!</p>';
            
        //}
        
        //Pre-condition loop
        while($grade<10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }
        echo 'Exit Loop';
    ?>

    <h2>Do-While Loop</h2>
    <?php 
        $grade=0;
        //Post-condition loop
        do{
            echo '<p>I am do while loop</p>';
            $grade++;
        }while($grade<10);
        echo 'Exit Loop';
    ?>
    <?php require 'includes/footer.php'?>

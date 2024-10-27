<?php 
$title = "Arrays and Printouts";
include 'includes/header.php'?>
    <h1> <?php echo $title ?></h1>
    <?php 
        //A variable
        $nums = 3;
        //an array
        //only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,12,48,69,28,18,58,42);
        // you can access the value in a subscript of the array using the index
        echo $numbers[5];
        echo "<p>$numbers[10]</p>";
        $size= count($numbers);
        echo "<p>Arrays numbers is size: $size</p>";

        for($count=0; $count<$size; $count++){
            echo "<p>$numbers[$count]";
        }
    ?>
    <?php require 'includes/footer.php'?>

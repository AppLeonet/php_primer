<?php 
$title = "Switch Statements";
include 'includes/header.php'?>
<h1><?php echo $title ?></h1>
<?php 
    $grade = 'F';

    switch($grade){
        case 'A':
            echo '<h2 style="color: green">You are superstar!</h2>';
            break;

        case 'B':
            echo '<h2 style="color: blue">You did well</h2>';
            break;

        default:
        echo '<h2 style="color: red">You have failed...</h2>';
        break;
    }
?>
<?php require 'includes/footer.php'?>

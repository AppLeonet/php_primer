<?php 
$title = "For Loops";
include 'includes/header.php'?>
<h1><?php echo $title ?></h1>
<?php 
    for($count = 0; $count< 10; $count++){
        echo '<p>Hello world '.$count. '</p>';
    }
?>
<?php require 'includes/footer.php'?>

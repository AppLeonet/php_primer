<?php 
$title = "index";
include 'includes/header.php'
?>
    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>

    <?php 
    // Printing to HTML using echo
        echo 'Hello world!';
    // You can echo HTML tags
        echo '<br/>';
        echo 'second line';
        

    
    //Variables need a '$' sign. They are not strongly typed
        $name = 'Leo Ho';
        $age = 29;
        echo '<br/>';
    //echo variable
        echo $name;
        echo '<h1>My name is: '.$name. '</h1>';
        echo '<h1>My age is: '.$age. '</h1>';
    //echo using double quotes and interpolation
        echo "<h1>My name is: $name</h1>"
    ?>
    <button type="button" class="btn btn-dark">Click me</button>
    <button type="button" class="btn btn-warning">Click me</button>
    <button type="button" class="btn btn-primary">Click me</button>
    <button type="button" class="btn btn-success">Click me</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
    <?php require 'includes/footer.php'?>

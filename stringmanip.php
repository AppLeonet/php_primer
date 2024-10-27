<?php 
$title = "String Manipulation";
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <?php 
        //concatenation of string
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with rock";
        //echo $phrase1;
        //echo $phrase2;
        echo $phrase1 .", named Emilz ". $phrase2;
        echo '</br>';
        echo '<hr/>';
        $name = "leo ho";
        //String transformation
        echo 'Upper case first name ' .ucfirst($name).'</br>';
        echo 'Upper case first letter for each word: ' .ucwords($name).'</br>';
        echo 'Upper case: ' .strtoupper($name).'</br>';
        echo 'Lower case: ' .strtolower("THIS WAS UPPER CASE").'</br>';
        echo '<hr/>';
        echo 'Repeat String: ' .str_repeat($name,10). '</br>';
        echo 'Repeat String - Nested Function: ' .strtoupper(str_repeat($name,10)). '</br>';
        echo 'Get a substring: ' .substr($name,2,5). '</br>';
        echo 'Get position of string: ' .strpos($name,'h'). '</br>';
        echo 'Find character "L": ' .strchr($name,'L'). '</br>';
        echo 'Find character "e": ' .strchr($name,'e'). '</br>';
        echo 'Find character "o": ' .strchr($name,'o'). '</br>';

        echo 'Find length of string: ' .strlen($name). '</br>';
        echo 'Without trim: ' ."A". " B C D " ."E". '</br>';
        echo 'trim spaces on both sides: ' ."A". trim(" B C D ") ."E". '</br>';
        echo 'trim spaces on left sides: ' ."A". ltrim(" B C D ") ."E". '</br>';
        echo 'trim spaces on right sides: ' ."A". rtrim(" B C D ") ."E". '</br>';

        echo 'Replace string with another: ' .str_replace("stand", "sit", $phrase2). '</br>';
    ?>
    <?php require 'includes/footer.php'?>

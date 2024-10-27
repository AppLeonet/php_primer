<?php 
$title = "Functions";
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <?php 
        //Defining a function

        function writeMessage(){
            echo "You are really a nice person, Have a nice time! </br>";
        }

        //Calling function

        writeMessage();
        echo '<hr/>';
        writeMessage();

        //Functions with parameters

        function addNumbers($nums1, $nums2){
            $sum = $nums1 + $nums2;
            echo "The sum of $nums1 and $nums2 is: $sum </br>";
        }

        //Pass by reference - use ampersand in parameter
        function changeNum(&$num){
            $num = $num + 10;
            
        }

        function returnProduct($nums1, $nums2){
            $product = $nums1 * $nums2;
            return $product;
        }
        $num = 200;
        addNumbers(10,20);
        addNumbers(10,$num);
        addNumbers('10','30');

        changeNum($num);
        echo $num .'</br>';
        $return_value = returnProduct(100,10);
        echo $return_value;
    ?>
    <?php require 'includes/footer.php'?>

<?php
$a = array("images/circle1.png", 
           "images/circle2.png", 
           "images/circle3.png", 
           "images/circle4.png", 
           "images/circle5.png", 
           "images/circle6.png", 
           "images/circle7.png", 
           "images/circle8.png", 
           "images/circle9.png", 
           "images/circle10.png");
           
    foreach($a as $b){
        echo "<img src='".$b."'>";
    }
    ?>
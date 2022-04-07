<!DOCTYPE html>
<html>
<head>
<body>
<?php

$thing = array("De Spartelkuikens" => 25,
                "De waterbuffels" => 32, 
                "Plonsmderin" => 11, 
                "Bommetje" => 23);

    foreach($thing as $key => $value){
        echo "<div>".$key . " : " . $value;
        $tempvalue = (floor($value / 5));
        for($i = 0; $i < $tempvalue; $i++){
            echo "<img src='images/swim1.png'>";
        }
        echo "</div> <br>";
    }


    ?>
</body>
</head>
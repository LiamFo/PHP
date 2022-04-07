<!DOCTYPE html>
<html>
<head>
<body>
<?php
$thing = array( "9.15" => "Mevr. Pietersen",
                "9.30" => "Mevr. Willems",
                "9.45" => "",
                "10.00" => "Paul van den Broek",
                "10.15" => "Karel de Meeuw",
                "10.30" => "");

    foreach($thing as $key => $value){
        echo "<div>".$key . " : " . $value;
        if($value == ""){
            echo "<b>afspraak beschikbaar</b></div>";
        }else{
            echo "</div>";
        }
    }
    ?>
</body>
</head>
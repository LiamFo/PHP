<!DOCTYPE html>
<html>
<head>
<body>
<style>
    body{
        text-align:center;
    }
</style>

<?php
	for ($i = 1; $i <10; $i++){
        for($j = 0 ; $j < $i; $j++){
            echo "* ";
        }
        echo "<br>";
    }
?>

</body>
</head>
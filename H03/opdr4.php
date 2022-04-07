<!DOCTYPE html>
<html>
<head>
<body>
<style>
    body{
        display:flex;
        float:left;
    }
</style>
<?php
    for($i = 1; $i < 10;$i++){
    if($i % 2 == 0){
        echo '<div> <img src=images/aap'.$i.'.png style="border:5px solid red"> </div>';
    }else{
        echo '<div> <img src=images/aap'.$i.'.png style="border:5px solid green"> </div>';
    }
}
    ?>
</body>
</head>
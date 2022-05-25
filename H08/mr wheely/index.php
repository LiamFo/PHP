<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Wheely</title>
</head>
<body>

<form action="index.php" method="get">
    <label for="minPrijs">Minimal price</label>
    <input type="text" name="minPrijs" id="minPrijs">
    <br>
    <label for="maxPrijs">Maximal price</label>
    <input type="text" name="maxPrijs" id="maxPrijs">
    <br>
    <input type="submit">
    <br>
    <br>
</form>
    
</body>
</html>

<!---------------------------------------------->

<?php

require('Auto.php');
require('AutoOverzicht.php');

//----------------------------------------------//

if(isset($_GET['minPrijs']) && !empty($_GET['minPrijs'])){
    $minPrijs = $_GET['minPrijs'];
}else{
    $minPrijs = 0;
}

if(isset($_GET['maxPrijs'])    && !empty($_GET['maxPrijs'])   ){
    $maxPrijs = $_GET['maxPrijs'];
}else{
    $maxPrijs = 9999999999;
}

//----------------------------------------------//

$AutoOverzicht = new AutoOverzicht();
$AutoOverzicht->voegAutoToe('Opel', 300,'https://www.autoscout24.nl/assets/auto/images/model-finder/opel/opel-adam-xs.jpg');

foreach($AutoOverzicht->getFilteredList($minPrijs,$maxPrijs) as $auto){
    echo "<br>".$auto->getMerk() ." " .'-' ." " .$auto->getPrijs();
    echo '<br><img src="'.$auto->getImageURL(). '" alt="car image" <br><br>';
}

//----------------------------------------------//

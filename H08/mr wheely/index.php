<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Wheely</title>
</head>
<body>

<form action="index.php" method="post">
    <label for="merk">Merk</label>
<select id="merk" name="merk">
    <option value="Audi">Audi</option>
    <option value="Ferari">Ferari</option>
    <option value="Fiat">Fiat</option>
    <option value="Opel">Opel</option>
</select>
    <br>
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
print_r($_POST);
if(isset($_POST['minPrijs']) && $_POST['minPrijs'] != ''){
    $minPrijs = $_POST['minPrijs'];
}else{
    $minPrijs = 0;
}

if(isset($_POST['maxPrijs']) && $_POST['maxPrijs'] != '' ){
    $maxPrijs = $_POST['maxPrijs'];
}else{
    $maxPrijs = 9999999999;
}

if(isset($_POST['merk'])){
    $selectMerk = $_POST['merk'];
}
echo $maxPrijs;
echo $minPrijs;


//----------------------------------------------//

$AutoOverzicht = new AutoOverzicht();
$AutoOverzicht->voegAutoToe('Opel', 500,'https://www.autoscout24.nl/assets/auto/images/model-finder/opel/opel-adam-xs.jpg');
$AutoOverzicht->voegAutoToe('Opel', 300,'https://www.autoscout24.nl/assets/auto/images/model-finder/opel/opel-adam-xs.jpg');

foreach($AutoOverzicht->getFilteredList($minPrijs,$maxPrijs, $selectMerk) as $auto){
    echo "<br>".$auto->getMerk() ." " .'-' ." " .$auto->getPrijs();
    echo '<br><img src="'.$auto->getImageURL(). '" alt="car image" <br><br>';
}

//----------------------------------------------//

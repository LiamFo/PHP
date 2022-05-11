<?php
$HOST = 'localhost';
$PORT = '3306';
$USER = 'root';
$pass = '';
$db = 'phpschool';

$dph = new PDO('mysql:host='.$HOST.';dbname='.$db.';port='.$PORT, $USER, $pass);

$sql = 'SELECT * FROM cursist WHERE naam = "'.$_POST["naam"].'" AND cursistnr = "'.$_POST["password"].'"';

foreach ($dph->query($sql) as $row) {
print $row['naam'] . "\t";
print $row['roepnaam'] . "\t";
print $row['straat'] . "\t";
print $row['postcode'] . "\n";
}
?>
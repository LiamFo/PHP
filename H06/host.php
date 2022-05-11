<?php
$HOST = 'localhost';
$PORT = '3306';
$USER = 'root';
$pass = '';
$db = 'phpschool';

$dph = new PDO('mysql:host='.$HOST.';dbname='.$db.';port='.$PORT, $USER, $pass);

$sql = 'SELECT * FROM cursist where naam = "'.$_POST["wachtwoord"].'"';

foreach ($dph->query($sql) as $row) {
print_r($row);
}
?>
<?php
session_start();

$_SESSION['adminrole'] = "";

$HOST = 'localhost';
$PORT = '3306';
$USER = 'root';
$pass = '';
$db = 'phpschool';

$dph = new PDO('mysql:host='.$HOST.';dbname='.$db.';port='.$PORT, $USER, $pass);

$sql = 'SELECT * FROM cursist WHERE naam = "'.$_POST["username"].'" AND cursistnr = "'.$_POST["password"].'"';

$result = $dph->query($sql);
$count = $result->rowCount();



if($count > 0){
foreach($result as $row){
$_SESSION['user'] = $row['naam'];

    if($row['naam'] == "Vos"){
        $_SESSION['adminrole'] = "true";
    }else{
        $_SESSION['adminrole'] = "false";
    }
}
}else{
    $_SESSION['user'] = "";
}


if($_SESSION['user'] != ""){
    echo "<h1>hello"." ".$_SESSION['user']."</h1>";
}else{
    header('location: inlogpage.php');
}

if(isset($_GET['loguit'])){
    $_SESSION = array();
    session_destroy();
}

print_r($_SESSION);

if($_SESSION['adminrole'] == "true"){
    echo "youre now an admin";
    header('location: adminpage.php');
}
?>

<p><a href="inlogpage.php">inlog page</a></p>
<p><a href="inlogphp.php?loguit">log out</a></p>
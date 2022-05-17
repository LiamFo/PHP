<?php
session_start();

if($_SESSION['adminrole'] == "true"){
    echo "<h1>admin page</h1>";
}else{
    header('location: inlogpage.php');
}
?>
<p><a href="inlogpage.php">inlog page</a></p>
<p><a href="inlogphp.php?loguit">log out</a></p>
<p><a href="https://bullsquid.com/" target=_blank>website secrets</a></p>

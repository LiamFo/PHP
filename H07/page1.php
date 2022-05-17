<?php
$a = 12;
setcookie("a", $a);
setcookie("b",12,time()+60);
echo $a."<br>";

session_start();
$_SESSION['user'] = "steve";
echo $_SESSION['user'];

?>

<p><a href="page2.php">next page</a></p>
<p><a href="http://localhost/PHP/PHP/H07/">menu</a></p>
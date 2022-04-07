<?php

$leeftijd = 12;
$bedrag = 5;

if($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
}else if($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}else if($leeftijd < 3){
    $bedrag = $bedrag = 0;
}

echo $bedrag;
?>
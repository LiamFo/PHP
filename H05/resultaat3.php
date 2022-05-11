<?php

if($_POST["wachtwoord"] == "steveiscool" && $_POST["email"] == "steve@gmail.com"){
        echo "<h1>Welkom</h1>";
    }else{
        echo "<h1>Sorry! Geen toegang</h1>";
    }

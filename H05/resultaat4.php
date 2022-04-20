<?php

    function test($ww,$em){
        if($ww == "steveiscool" && $em == "steve@gmail.com"){
            echo "true";
            return true;
        }else{
            echo "false";
            return false;
        }
    }

    test($_POST["wachtwoord"],$_POST["email"]);
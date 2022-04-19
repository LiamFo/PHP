<?php

function deelbaar($a){
    if($a % 3 == 0){
        echo "ja";
    }else{
        echo "nee";
    }
}

echo deelbaar(18);
?>
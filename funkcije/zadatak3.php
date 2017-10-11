<?php
    $godRod = 1999;
    $godSad = 2017;
    function racunaj($godRod,$godSad){
        $g = $godSad - $godRod;
        if($g > 0){
            echo "Star si : " . $g . "<br>";
        }
        elseif($g < 0){
            echo "Rodit ces se za " . -($g) . " godina" . "<br>";
        }
        else{
            echo "Ti si roden ove godine" . "<br>";
        }
    }
    racunaj($godRod,$godSad);
    racunaj(2018,$godSad);
    racunaj(2017,$godSad);
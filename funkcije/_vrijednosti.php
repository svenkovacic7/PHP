<?php
    function ispis($a, $b){
        if ($a > 0){
            if ($a < 6){
                echo $b[$a-1];
            }
            else{
                echo $a**2;
            }
        }
        else{
            echo "Krivi input";
        }
    }
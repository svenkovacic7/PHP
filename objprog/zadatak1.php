<?php
$a = "1234567890123456789012345678901324567890";
$b = "123456789";

function provjera($a){
    if(strlen($a) < 10){
        echo substr($a, 0,5)."<br>";
    }
    elseif (strlen($a) > 10){
        echo substr($a, 0,20)."<br>";
    }
}

provjera($a);
provjera($b);
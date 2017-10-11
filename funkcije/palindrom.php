<?php
function provjera($a){
    $a = str_replace(" ","",$a);
    if($a == strrev($a)){
        return true;
    }
    else{
        return false;
    }
}
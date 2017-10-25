<?php
function raucnanje($ocjene){
    $lista = array();
    foreach($ocjene as $a){
        $temp=0;
        foreach($a as $b){
            $temp += $b;
        }
        $temp = substr($temp / 3,0,4);
        array_push($lista,$temp);
    }
    foreach($lista as $a){
        echo $a."<br>";
    };
}
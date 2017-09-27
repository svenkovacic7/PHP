<?php
/* Zadatak :  ispisi svaku varijablu iz liste uz pomoc while loopa*/

$a = array(1,2,3,4,5);
$i = 0;

while ($i < sizeof($a)){
    echo $a[$i];
    $i++;
}
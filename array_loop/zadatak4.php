<?php
/*Zadatak : u praznu listu $a dodaj brojeve 0-4*/

$a = array();

for ($i = 0; $i < 5; $i++){
    array_push($a,$i);
}

for ($i = 0; $i < 5; $i++){
    echo $a[$i];
}

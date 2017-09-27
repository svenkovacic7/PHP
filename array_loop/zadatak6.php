<?php
/*Zadatak : provjeri jeli kljuc u referentnoj listi, ako je isprintaj vrijednost*/

$a = array(0 => "Nula",
           1 => "Jedan");

$kljuc = 0;
$provjera = array_key_exists (0 , $a);

if ($provjera){
    echo $a[$kljuc];
}
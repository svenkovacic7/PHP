<?php
$datoteka = fopen("Osoba.txt","a");
fwrite($datoteka, $_POST["ime"] . "\r\n");
fwrite($datoteka,$_POST["prezime"] . "\r\n");
fwrite($datoteka, $_POST["ulica"] . "\r\n");
fwrite($datoteka, $_POST["mjesto"] . "\r\n");
fwrite($datoteka, $_POST["broj"] . "\r\n");
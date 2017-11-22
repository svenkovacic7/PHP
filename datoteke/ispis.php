<?php
$datoteka = fopen("Osoba.txt","r");
echo "<table border='5'
<tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Adresa</th>
    <th>Mjesto stanovanja</th>
    <th>Telefon</th>
</tr>";
echo "<tr>";
$brojac = 0;
while(!feof($datoteka)){
    if($brojac == 5){
        $brojac = 0;
        echo "</tr>";
    }
    $brojac = $brojac + 1;
    echo "<th>";
    echo fgets($datoteka);
    echo "</th>";
}
echo "</table>";
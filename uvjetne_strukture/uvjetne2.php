<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/* Zadatak : provjeri koji je broj veci uz pomoc
switch case-a"*/
$a = 5;
$b = 2;
switch($a < $b){
    case 0:
        echo "<p>a je veci od b</p>";
        break;
    case 1:
        echo "<p>b je veci od a</p>";
        break;
}
?>
</body>
</html>
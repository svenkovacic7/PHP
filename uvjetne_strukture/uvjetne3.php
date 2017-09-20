<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    /*Zadatak : provjeri jesu li $a i $b jednaki, potpuno
    jednaki ili uopce nisu jednaki*/
    $a = 5;
    $b = "5";
    if($a == $b){
        echo "<p>a je jednak b</p>";
        if($a === $b){
            echo "<p>a je potpuno jednak b</p>";
        }
        else{
            echo "<p>a nije potpuno jednak b</p>";
        }
    }
    else{
        echo "<p>a nije jednak b</p>";
    }
?>
</body>
</html>
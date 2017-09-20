<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/*Zadatak : uz pomoc switch case-a ispisi
koja je varijabla broj (0 ili 1), svaki switch case mora biti
dio veceg switch case-a(osim prvog) */
    $a = 1;
    $b = 0;
    $c = 1;
    switch($a){
        case 0:
            echo "<p>a je 0</p>";
            switch($b){
                case 0:
                    echo"<p>b je 0</p>";
                    switch($c){
                        case 0:
                            echo "<p>c je 0</p>";
                            break;
                        case 1:
                            echo "<p>c je 1</p>";
                            break;
                    }
                    break;
                case 1:
                    echo "<p>b je 1</p>";
                    switch($c){
                        case 0:
                            echo "<p>c je 0</p>";
                            break;
                        case 1:
                            echo "<p>c je 1</p>";
                            break;
                    }
                    break;
            }
            break;
        case 1:
            echo "<p>a je 1</p>";
            switch($b){
                case 0:
                    echo"<p>b je 0</p>";
                    switch($c){
                        case 0:
                            echo "<p>c je 0</p>";
                            break;
                        case 1:
                            echo "<p>c je 1</p>";
                            break;
                    }
                    break;
                case 1:
                    echo "<p>b je 1</p>";
                    switch($c){
                        case 0:
                            echo "<p>c je 0</p>";
                            break;
                        case 1:
                            echo "<p>c je 1</p>";
                            break;
                    }
                    break;
            }
            break;
    }
?>
</body>
</html>
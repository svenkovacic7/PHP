<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/* Zadatak : ako su $a i $b jednaki isprintaj "jednaki su",
ako us potpuni jednaki isprintaj "potpuno su jednaki"*/
$a = "5";
$b = 5;
if ($a == $b){
    echo "<p>Jednaki su</p>";
}
else if($a === $b){
    echo "<p>Potpuno su jednaki</p>";
}
else{
    echo "<p>Nisu jednaki</p>";
};
?>
</body>
</html>
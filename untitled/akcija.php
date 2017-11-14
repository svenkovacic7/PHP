<?php
    echo "Vase ime : " . $_POST["ime"];
    echo "Vase prezime : " . $_POST["prezime"];
    echo "Vasa ulica : " . $_POST["ulica"];
    echo "Vasa primjedba : " . $_POST["primjedba"];
    echo "Vas mail : " . $_POST["mail"];
    echo "Vas broj : " . $_POST["broj"];
    if($_POST["lozinka"] == $_POST["lozinka2"]){
        echo "Lozinka primljena";
    }
    else{
        echo "Pogresna lozinka";
    }
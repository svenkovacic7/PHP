<?php
    $email = $_POST["mail"];
    $naslov = $_POST["naslov"];
    $teskst = $_POST["poruka"];

    echo "Primatelj: $email</br>";
    echo "Naslov: $naslov</br>";
    echo "Tekst poruke: $tekst</br>";

    ini_set("SMTP", "smtp.gmail.com");
    ini_set("sendmail_from", "tevelly@gmail.com");

    if(mail($email, $naslov, $tekst)){
        echo "Poruka je uspjesno poslana.</br>";
    }
    else{
        echo "Poruka nije uspjesno poslana</br>";
    }
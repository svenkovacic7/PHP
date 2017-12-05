<?php
    $email = $_POST["mail"];
    $naslov = $_POST["naslov"];
    $teskst = $_POST["poruka"];
    

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //Trazio sam na internetu i ovo je bolji nacin za provjeru email adrese, regex mi nije funkcionirao
     echo "Primatelj: $email</br>";
    }
    else{
        echo "Neispravna email adresa";
    }
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

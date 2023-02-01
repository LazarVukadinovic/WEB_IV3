<?php 

    include_once('../database/connection.php');

    $poruka_paket = json_decode($_GET['p'], false);
    $tekst_poruke = $poruka_paket->tekst_poruke;
    $tekst_poruke = mysqli_real_escape_string($conn, $tekst_poruke);
    $tekst_poruke = htmlentities($tekst_poruke);
    $tekst_poruke = trim($tekst_poruke);

    if(empty($tekst_poruke)) {
        exit();
    }

    $datum_poruke = date("Y-m-d");
    $vreme_poruke = date("H:i:s");
    $vremeDB = "$datum_poruke $vreme_poruke";

    $id_korisnika = 419;
    $korisnicko_ime = "cane15";

    $sql = "INSERT INTO chat_poruke (id_korisnika, korisnicko_ime, tekst_poruke, vreme)
    VALUES('$id_korisnika', '$korisnicko_ime', '$tekst_poruke', '$vremeDB')";

    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo "Greska pri slanju poruke!";
    }


?>
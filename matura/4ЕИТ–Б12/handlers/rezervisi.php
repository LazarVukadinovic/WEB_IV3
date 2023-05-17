<?php 
include "../database/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["sediste"]))
    {
        $sediste = test_input($_POST["sediste"]);
    }

    if (!empty($_POST["ime"]))
    {
        $ime = test_input($_POST["ime"]);
    }
    
    if (!empty($_POST["email"]))
    {
        $email = test_input($_POST["email"]);
    }
}

if(isset($sediste) && isset($ime) && isset($email))
{
    $sqlCHECK = "SELECT * FROM rezervacije WHERE broj_sedista = $sediste AND rezervacija = 1";
    $result = $conn->query($sqlCHECK);
    if($result->num_rows > 0){ 
        $sql = "UPDATE rezervacije SET rezervacija = 0 WHERE broj_sedista = $sediste";
        $conn->query($sql);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

header('Location: ../');
?>
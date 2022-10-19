<?php 
    session_start();

    if($_SESSION["loggedIn"] == 0)
    {
        header('Location: http://nemanaziv.com/login/home.php');
    }
?>

<h1>Druga strana</h1>
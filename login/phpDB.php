<?php 
    session_start();

    if($_SESSION["loggedIn"] == 0)
    {
        header('Location: http://nemanaziv.com/login/home.php');
    }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Druga strana</title>
    </head>
    <body>
        <h1>Druga strana</h1>
        
    </body>
</html>
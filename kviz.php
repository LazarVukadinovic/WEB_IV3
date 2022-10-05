<?php 
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kviz</title>
        <style>
            .red{
                color: red;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="kviz_rezultat.php">
            <label for="pitanje1">Pitanje 1: Koje godine je bio Kosovski boj?</label> <span class="red">&nbsp; <?php if(isset($_SESSION["firstErr"])) echo $_SESSION["firstErr"];?></span>
            <br>
            <input type="radio" name="pitanje1" value="1389" <?php if(isset($_SESSION["first"])) if($_SESSION["first"] == "1389") echo "checked"?>> 1389
            <br>
            <input type="radio" name="pitanje1" value="1387" <?php if(isset($_SESSION["first"])) if($_SESSION["first"] == "1387") echo "checked"?>> 1387
            <br>
            <input type="radio" name="pitanje1" value="1390" <?php if(isset($_SESSION["first"])) if($_SESSION["first"] == "1390") echo "checked"?>> 1390
            <br><br>

            <label for="pitanje2">Pitanje 2: Sta je PHP?</label> <span class="red">&nbsp; <?php if(isset($_SESSION["secondErr"])) echo $_SESSION["secondErr"];?></span>
            <br>
            <input type="radio" name="pitanje2" value="klijent" <?php if(isset($_SESSION["second"])) if($_SESSION["second"] == "klijent") echo "checked"?>> Klijentski jezik
            <br>
            <input type="radio" name="pitanje2" value="server"  <?php if(isset($_SESSION["second"])) if($_SESSION["second"] == "server") echo "checked"?>> Serverski jezik
            <br>
            <input type="radio" name="pitanje2" value="markup" <?php if(isset($_SESSION["second"])) if($_SESSION["second"] == "markup") echo "checked"?>> Markup jezik
            <br><br>

            <label for="pitanje3">Pitanje 3: Koja je merna jedinica za struju?</label> <span class="red">&nbsp; <?php if(isset($_SESSION["thirdErr"])) echo $_SESSION["thirdErr"];?></span>
            <br>
            <input type="radio" name="pitanje3" value="amper" <?php if(isset($_SESSION["third"])) if($_SESSION["third"] == "amper") echo "checked"?>> Amper (A)
            <br>
            <input type="radio" name="pitanje3" value="volt" <?php if(isset($_SESSION["third"])) if($_SESSION["third"] == "volt") echo "checked"?>> Volt (V)
            <br>
            <input type="radio" name="pitanje3" value="vat" <?php if(isset($_SESSION["third"])) if($_SESSION["third"] == "vat") echo "checked"?>> Watt (W)
            <br>
            <input type="submit">
        </form>

    </body>
</html>
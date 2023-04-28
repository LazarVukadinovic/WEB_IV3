<?php
if (array_key_exists("check", $_POST)) {
    require_once "./database/connection.php";
    $Srec = $_POST["srpska"];
    $Erec = $_POST["engleska"];
    $opis = $_POST["opis"];
    $izbor = $_POST["izbor"];
    $sql = "SELECT * FROM reci";
    $data = $conn->query($sql);
    if ($izbor == "default") {
        $greska = "Morate uneti smer prevodjenja!";
    } else {
        $greska = "Ne postoji rec u bazi ili ste izabrali pogrešan smer prevodjenja!";
    }
    if ($data->num_rows > 0) {
        while ($line = $data->fetch_assoc()) {

            if ($izbor == "engleski") {
                if ($Srec == $line["srpska"]) {
                    $engleskaR = $line["engleska"];
                    $srpskaR = $line["srpska"];
                    $opisR = $line["opis"];
                    unset($greska);
                }
            } else {

                if ($Erec == $line["engleska"]) {
                    $engleskaR = $line["engleska"];
                    $srpskaR = $line["srpska"];
                    $opisR = $line["opis"];
                    unset($greska);
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rečnik</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="nav">
        <h1>ELEKTRONSKI REČNIK</h1>
    </div>
    <div class="navigacija">
        <a href="./index.php">Rečnik</a>
        <a href="./dodavanje.php">Dodavanje novih reči</a>
        <a href="./uputstvo.php">Uputstvo</a>
    </div>
    <p><?php if (isset($greska)) {
            echo $greska;
            unset($greska);
        } ?></p>
    <form action="./index.php" method="post">
        Smer: <select name="izbor" id="izbor">
            <option value="default">Selektuj smer prevodjenja</option>
            <option value="engleski">Srpski-Engleski</option>
            <option value="srpski">Engleski-Srpski</option>
        </select><br>
        Engleska reč <input type="text" value="<?php if (isset($engleskaR)) echo $engleskaR;
                                                else echo ""; ?>" name="engleska" id="eng"><br>
        Srpska reč <input type="text" value="<?php if (isset($srpskaR)) echo $srpskaR;
                                                else echo ""; ?>" name="srpska" id="srp"><br><br>
        Opis: <textarea name="opis" value="" id="opis" cols="30" rows="10"><?php if (isset($opisR)) echo $opisR;
                                                                            else echo ""; ?></textarea><br><br>
        <input type="submit" name="check" value="Prevedi">
    </form>

    <div class="footer">
        <p>© Osnovna škola "Sonja Marinkovic"</p>
    </div>

</body>

</html>
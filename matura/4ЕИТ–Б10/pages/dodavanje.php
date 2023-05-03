<?php 
    include_once "../database/connection.php";
    $poruka = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (!empty($_POST["engleska"])){
            $engleskaR = test_input($_POST["engleska"]);
        }

        if(!empty($_POST["srpska"])){
            $srpskaR = test_input($_POST["srpska"]);
        }

        if(!empty($_POST["opis"])){
            $opisR = test_input($_POST["opis"]);
        }
    }

    if(isset($engleskaR) && isset($srpskaR) && isset($opisR))
    {
        $sqlCHECK = "SELECT srpska, engleska FROM reci WHERE srpska = '$srpskaR' AND engleska = '$engleskaR'";
        $result = $conn->query($sqlCHECK);
        if($result->num_rows == 0){
            $sql = "INSERT INTO reci (srpska, engleska, opis) VALUES('$srpskaR', '$engleskaR', '$opisR')";
            $conn->query($sql);
            $poruka = "Uspesno ste uneli novu rec";
        }
        else
        $poruka = "Rec vec postoji";
        
    }
    else
        $poruka = "Sva polja moraju biti popunjena";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rečnik</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="nav">
        <h1>DODAVANJE REČI</h1>
    </div>
    <div class="navigacija">
        <a href="../">Rečnik</a>
        <a href="./dodavanje.php">Dodavanje novih reči</a>
        <a href="./uputstvo.html">Uputstvo</a>
    </div>
    <p>
        <?php if (isset($poruka)) {
            echo $poruka;
            unset($poruka);
        } ?>
    </p>
    <form action="dodavanje.php" method="post">
    Engleska reč <input type="text" name="engleska" id="eng" autofocus><br>
    Srpska reč <input type="text" name="srpska" id="srp"><br><br>
    Opis: <textarea name="opis" value="" id="opis" cols="30" rows="10"></textarea><br><br>
    
    <input type="submit" name="check" value="Dodaj">
    </form>

    <div class="footer">
        <p>© Osnovna škola "Sonja Marinkovic"</p>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>
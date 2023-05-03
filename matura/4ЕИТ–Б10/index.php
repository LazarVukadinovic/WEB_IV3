<?php
    include_once "./database/connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST["engleska"]))
        {
            $greska = "";
            $engleskaR = test_input($_POST["engleska"]);
            $sql = "SELECT * FROM reci WHERE engleska = '$engleskaR'";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                $srpskaR = $row['srpska'];
                $opisR = $row['opis'];
            }
            else
            $greska = "Uneta rec ne postoji u recniku";
            
        }
        else if (!empty($_POST["srpska"]))
        {
            $greska = "";
            $srpskaR = test_input($_POST["srpska"]);
            $sql = "SELECT * FROM reci WHERE srpska = '$srpskaR'";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                $engleskaR = $row['engleska'];
                $opisR = $row['opis'];
            }
            else
            $greska = "Uneta rec ne postoji u recniku";
        }
    }

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
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="nav">
        <h1>ELEKTRONSKI REČNIK</h1>
    </div>
    <div class="navigacija">
        <a href="index.php">Rečnik</a>
        <a href="./pages/dodavanje.php">Dodavanje novih reči</a>
        <a href="./pages/uputstvo.html">Uputstvo</a>
    </div>
    <p><?php if (isset($greska)) {
            echo $greska;
            unset($greska);
        } ?></p>
    <form action="index.php" method="post">
        Smer: <select name="izbor" id="izbor">
            <option value="default">Selektuj smer prevodjenja</option>
            <option value="engleski">Engleski-Srpski</option>
            <option value="srpski">Srpski-Engleski</option>
        </select><br>
        Engleska reč <input type="text" value="<?php if (isset($engleskaR)) echo $engleskaR;
                                                else echo ""; ?>" name="engleska" id="eng" readonly><br>
        Srpska reč <input type="text" value="<?php if (isset($srpskaR)) echo $srpskaR;
                                                else echo ""; ?>" name="srpska" id="srp" readonly><br><br>
        Opis: <textarea name="opis" value="" id="opis" cols="30" rows="10" readonly><?php if (isset($opisR)) echo $opisR;
                                                                            else echo ""; ?></textarea><br><br>
        <input type="submit" name="check" value="Prevedi">
    </form>

    <div class="footer">
        <p>© Osnovna škola "Sonja Marinkovic"</p>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>
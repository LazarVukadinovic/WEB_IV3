<?php 
session_start();
$i = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!isset($_POST["pitanje1"]))
    {
        $_SESSION["firstErr"] = "Morate odgovoriti na ovo pitanje";
    }
    {
        $_SESSION["firstErr"] = "Pogresan odgovor";
        $radioVal = $_POST["pitanje1"];
        if($radioVal == "1389"){
            $_SESSION["first"] = $radioVal;
            $i++;
            $_SESSION["firstErr"] = "";
        }
        else if($radioVal == "1387"){
            $_SESSION["first"] = $radioVal;
        }
        else if($radioVal == "1390"){
            $_SESSION["first"] = $radioVal;
        }
    }

    if(!isset($_POST["pitanje2"]))
    {
        $_SESSION["secondErr"] = "Morate odgovoriti na ovo pitanje";
    }
    {
        $_SESSION["secondErr"] = "Pogresan odgovor";
        $radioVal = $_POST["pitanje2"];
        if($radioVal == "server"){
            $_SESSION["second"] = $radioVal;
            $i++;
            $_SESSION["secondErr"] = "";
        }
        else if($radioVal == "klijent"){
            $_SESSION["second"] = $radioVal;
        }
        else if($radioVal == "markup"){
            $_SESSION["second"] = $radioVal;
        }
    }

    if(!isset($_POST["pitanje3"]))
    {
        $_SESSION["thirdErr"] = "Morate odgovoriti na ovo pitanje";
    }
    {
        $_SESSION["thirdErr"] = "Pogresan odgovor";
        $radioVal = $_POST["pitanje3"];
        if($radioVal == "amper"){
            $_SESSION["third"] = $radioVal;
            $i++;
            $_SESSION["thirdErr"] = "";
        }
        else if($radioVal == "volt"){
            $_SESSION["third"] = $radioVal;
        }
        else if($radioVal == "vat"){
            $_SESSION["third"] = $radioVal;
        }

    }
}


?>

<a href="kviz.php"> Vrati na stranu</a>
<br>

<h1>Statistika</h1>

Odgovorili ste tacno na <?php echo $i; ?> od 3 pitanja.
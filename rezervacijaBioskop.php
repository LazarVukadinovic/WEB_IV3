<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bioskop Online</title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php 
            $name = $email = $film = $termin = $sedista = "";
            $nameErr = $emailErr = $filmErr = $terminErr = $sedistaErr = "";
            $filmovi = array("Juzni Vetar Ubrzanje", "Tesna Koza", "Titanik");

            $imeREG = "/([A-Za-z ])/";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["ime"])) {
                  $nameErr = "Ime je obavezno";
                } else {
                    $nameErr = "";
                    $name = test_input($_POST["ime"]);
                    if(!preg_match($imeREG, $name))
                    {
                        $nameErr = "Neispravan format imena";
                        $name = "";
                    }
                }
                
                if (empty($_POST["email"])) {
                  $emailErr = "Email je obavezan";
                } else {
                    $emailErr = "";
                  $email = test_input($_POST["email"]);
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                    $emailErr = "Neispravan format";
                    $email = "";
                  }
                }
                  
                if (empty($_POST["izaberiFilm"])) {
                  $filmErr = "Morate odabrati film";
                } else {
                    $filmErr = "";
                  $film = test_input($_POST["izaberiFilm"]);
                }
              
                if (empty($_POST["izaberiTermin"])) {
                  $terminErr = "Morate odabrati termin";
                } else {
                    $terminErr = "";
                  $termin = test_input($_POST["izaberiTermin"]);
                }
              
                if (empty($_POST["sedista"])) {
                  $sedistaErr = "Morate odabrati sedista";
                } else {
                    $sedistaErr = "";
                  $sedista = test_input($_POST["sedista"]);
                }
              }
              
              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

              if($name && $email && $film && $termin && $sedista)
              {
                $myfile = fopen("rezervacija.txt", "w");
                fwrite($myfile, "Izvrsena je rezervacija na ime '" . $name . "' za film '" . $film . "' u terminu '" . $termin . "'.\n Broj sedista je: " . $sedista);
                fclose($myfile);
              }

        ?>
        <h1 style="text-align: center;">Rezervacija bioskopske karte</h1>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label for="ime">Ime: </label>
            <input type="text" name="ime"> <span class="error">* <?php echo $nameErr;?></span>
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email"> <span class="error">* <?php echo $emailErr;?></span>
            <br>
            <label for="izaberiFilm">Film</label>
            <select name="izaberiFilm" id="izaberiFilm"> 
                <?php 
                    for($i=0; $i<count($filmovi); $i++)
                    echo '<option value="' . $filmovi[$i] .'">' . $filmovi[$i] .'</option>';
                ?>
                
            </select> <span class="error">* <?php echo $filmErr;?></span>
            <br>
            <label for="izaberiTermin">Termin</label>
            <select name="izaberiTermin" id="izaberiTermin"> 
                <option value="16h">16h</option>
                <option value="18h">18h</option>
                <option value="20h">20h</option>
            </select><span class="error">* <?php echo $terminErr;?></span>
            <br>
            <label for="sedista">Broj sedista</label> 
            <input type="text" name="sedista"> <span class="error">* <?php echo $sedistaErr;?></span>
            <br>
            <input type="submit" value="Rezervisi">
        </form>
    </body>
</html>
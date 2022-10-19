<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bioskop Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            .error {color: #FF0000;}
            input, select{
              max-width: 500px;
            }
        </style>
    </head>
    <body>
        <?php 
            $name = $email = $film = $termin = $sedista = "";
            $nameErr = $emailErr = $filmErr = $terminErr = $sedistaErr = "";
            $filmovi = array("Juzni Vetar Ubrzanje", "Tesna Koza", "Titanik");

            $imeREG = "/([A-Za-z ])/";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bioskop";
            $conn = new mysqli($servername, $username, $password, $dbname);

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
                fwrite($myfile, "Izvrsena je rezervacija na ime '" . $name . "' za film '" . $film . "' u terminu '" . $termin . "'.\nBroj sedista je: " . $sedista);
                fclose($myfile);
                $sql = "INSERT INTO rezervacije (ime, film, termin, sedista)
                VALUES('$name', '$film', '$termin', '$sedista')";
                if ($conn->query($sql) === TRUE) {
                  echo "";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }

        ?>
        <div class="container">
          <h1 class="text-center mb-3">Rezervacija bioskopske karte</h1>
          <a class="btn btn-secondary" href="./bioskopKarte.php">Prikazi karte</a>

          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

              <label class="form-label" for="ime">Ime: </label>
              <input class="form-control" type="text" name="ime"> <span class="error">* <?php echo $nameErr;?></span>
              <br>
              <label class="form-label" for="email">Email: </label>
              <input class="form-control" type="text" name="email"> <span class="error">* <?php echo $emailErr;?></span>
              <br>
              <label class="form-label" for="izaberiFilm">Film</label>
              <select class="form-control" name="izaberiFilm" id="izaberiFilm"> 
                  <?php 
                      for($i=0; $i<count($filmovi); $i++)
                      echo '<option value="' . $filmovi[$i] .'">' . $filmovi[$i] .'</option>';
                  ?>
                  
              </select> <span class="error">* <?php echo $filmErr;?></span>
              <br>
              <label for="izaberiTermin">Termin</label>
              <select class="form-control" name="izaberiTermin" id="izaberiTermin"> 
                  <option value="16h">16h</option>
                  <option value="18h">18h</option>
                  <option value="20h">20h</option>
              </select><span class="error">* <?php echo $terminErr;?></span>
              <br>
              <label class="form-label" for="sedista">Broj sedista</label> 
              <input class="form-control" type="text" name="sedista"> <span class="error">* <?php echo $sedistaErr;?></span>
              <br>
              <input class="btn btn-primary" type="submit" value="Rezervisi">
          </form>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
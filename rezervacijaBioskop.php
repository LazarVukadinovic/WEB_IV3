<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bioskop Online</title>
    </head>
    <body>
        <?php 
            $filmovi = array("Juzni Vetar Ubrzanje", "Tesna Koza", "Titanik");

        ?>
        <h1 style="text-align: center;">Rezervacija bioskopske karte</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label for="ime">Ime: </label>
            <input type="text" name="ime">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email">
            <br>
            <select name="izaberiFilm" id="izaberiFilm">
                <?php 
                    for($i=0; $i<count($filmovi); $i++)
                    echo '<option value="film' . $i . '">' . $filmovi[$i] .'</option>';
                ?>
                
            </select>
            <select name="izaberiTermin" id="izaberiTermin">
                <option value="vreme0">16h</option>
                <option value="vreme1">18h</option>
                <option value="vreme2">20h</option>
            </select>
            <select name="izaberiMesto" id="izaberiMesto">
                <?php 
                    $broj = rand(5,10);
                    for($i=0; $i<$broj; $i++)
                    {
                        echo '<option value="film' . $i . '">' . rand(1,70) .'</option>';
                    }
                ?>
            </select>
        </form>
    </body>
</html>
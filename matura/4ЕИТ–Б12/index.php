<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobuska stanica</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="nav">
        <h1>Rezervacija autobuskih karata</h1>
    </div>
    <div class="navigacija">
        <a href="./">Pocetna</a>
        <a href="./pages/about.html">O autoru</a>
        <a href="./pages/uputstvo.html">Uputstvo</a>
    </div>

    <div class="bus">
        <table>
            <?php
                function Provera($j){
                    include "./database/connection.php";
                    $sql = "SELECT * FROM rezervacije WHERE broj_sedista = $j";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if($row['rezervacija'] == 1)
                    echo "slobodno";
                    else
                    echo "zauzeto";
                }

                $j=2;
                for($i=0; $i<13; $i++)
                {
            ?>
                <tr>
                    <th class="celija"><button id="<?php echo 's_' . $j; ?>" class="<?php Provera($j); ?>"><?php echo $j++; ?></button></th>
                    <th class="celija"><button id="<?php echo 's_' . $j; ?>" class="<?php Provera($j); ?>"><?php echo $j++; ?></button></th>
                    <th></th>
                    <th class="celija"><button id="<?php echo 's_' . $j; ?>" class="<?php Provera($j); ?>"><?php echo $j++; ?></button></th>
                    <th class="celija"><button id="<?php echo 's_' . $j; ?>" class="<?php Provera($j); ?>"><?php echo $j++; ?></button></th>
                </tr>
            <?php }?>
        </table>

        <div class="forma">
            <form action="./handlers/rezervisi.php" method="POST">
                <label for="sediste">Sediste:</label>
                <input type="text" id="sediste" name="sediste" readonly><br>
                <label for="ime">Ime i prezime:</label>
                <input type="text" name="ime"><br>
                <label for="email">Email:</label>
                <input type="email" name="email"><br>
                <input type="submit" value="Posalji">
            </form>
        </div>
    </div>

    <div class="footer">
        <p>© Autobuska stanica</p>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>
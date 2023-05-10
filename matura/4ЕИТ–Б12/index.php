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
        <a href="./pages/about.php">O autoru</a>
        <a href="./pages/uputstvo.html">Uputstvo</a>
    </div>

    <div class="bus">
        <table>
            <?php 
                include "./database/connection.php";
                $sql = "SELECT * FROM rezervacije";
                $result = $conn->query($sql);

                $j=2;
                for($i=0; $i<13; $i++)
                {
            ?>
                <tr>
                    <th class="celija"><button class="<?php  ?>"><?php echo $j++; ?></button></th>
                    <th class="celija"><button class="slobodno"><?php echo $j++; ?></button></th>
                    <th></th>
                    <th class="celija"><button class="slobodno"><?php echo $j++; ?></button></th>
                    <th class="celija"><button class="slobodno"><?php echo $j++; ?></button></th>
                </tr>
            <?php }?>
        </table>
    </div>

    <div class="footer">
        <p>© Autobuska stanica</p>
    </div>

</body>

</html>
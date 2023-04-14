<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <title>Log in</title>
</head>

<body>
    <div class="naslov">
        <h1>Biblioteka</h1>
        <ul>
            <li><a href="index.php">Početna</a></li>
            <li><a href="biblioteka.xml">Pregled</a></li>
            <li><a href="autor.html">O autoru</a></li>
            <li><a href="uputstvo.html">Uputstvo</a></li>
        </ul>
    </div>



    <style>


    </style>

    <?php
    include 'konekcija.php';
    session_start();
    $greska = "";
    $poruka = "";
    if (isset($_POST['korisnicko'])) {
        $username = ($_POST['korisnicko']);
        $password = ($_POST['lozinka']);

        $query    = "SELECT * FROM korisnik WHERE korisnicko_ime='$username'  AND lozinka='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['korisnicko'] = $username;

            $greska = "";
            $poruka = "Добродошли на страницу!";
        } else {
            $greska = "Neispravni podaci ";
            $poruka = "";
        }
    }
    ?>


    <div class="container forma ">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>LOGIN</h1>
            <hr>
            <div class="row">
                <div>
                    <h1 class="prvi">Prijavite se</h1>
                </div>
                <div>
                    <div c>
                        <label class="velicina"> Korisnicko ime:</label>
                        <input type="text" name="korisnicko" placeholder="email"><br><br>
                    </div>
                    <div ">
                        <label class=" velicina"> Lozinka:</label>
                        <input type="password" name="lozinka"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Potvrdi">
                        <br><br>
                        <?php echo $greska; ?>
                        <?php echo $poruka; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="futer1">
        <p> © Библиотека </p>
    </div>
</body>

</html>
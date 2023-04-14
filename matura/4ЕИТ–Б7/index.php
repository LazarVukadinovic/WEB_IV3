<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Biblioteka</title>
</head>

<body>
    <div class="naslovna_traka">
        <h1>Biblioteka</h1>
    </div>
    <nav>
        <ul>
            <a href="./index.php">
                <li>Početna</li>
            </a>
            <a href="./pages/pregled.php">
                <li>Pregled</li>
            </a>
            <a href="./pages/about.html">
                <li>O autoru</li>
            </a>
            <a href="./pages/uputstvo.html">
                <li>Uputstvo</li>
            </a>
        </ul>
    </nav>
    <section id="forma">
        <h2 class="mt-1">Mozete se logovati sa sledecim nalozima</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <p><b>Korisnicko ime: </b>Test</p>
                    <p><b>Lozinka: </b>test123</p>
                </div>
                <div class="col-md-3">
                    <p><b>Korisnicko ime: </b>Test2</p>
                    <p><b>Lozinka: </b>test2123</p>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <hr>
        <?php
        $ime1 = "Test";
        $ime2 = "Test2";
        $psw1 = "test123";
        $psw2 = "test2123";
        $poruka = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = $_POST['username'];
            $password = $_POST['lozinka'];
            if ($username == $ime1 && $password == $psw1) {
                $poruka = "Test, dobrodosao na stranicu!";
            } else if ($username == $ime2 && $password == $psw2) {
                $poruka = "Test2, dobrodosao na stranicu!";
            } else {
                $poruka = "Pogresni podaci!";
            }
        }
        ?>
        <p>Unesite parametre za logovanje. <a href="#">Registrujte se</a> ako nemate nalog!</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend>Forma za logovanje</legend>

                <div class="form-control">
                    <label for="username">Korisnicko ime: </label><br>
                    <input type="text" placeholder="Unesite korisnicko ime" name="username"><br>
                    <label for="lozinka">Lozinka: </label><br>
                    <input type="password" placeholder="Unesite lozinku" name="lozinka">
                </div>
            </fieldset>
            <button type="submit">Prijava</button>
        </form>
        <p><?php echo $poruka; ?></p>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <p class="text-center">&copy; Gradska biblioteka</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
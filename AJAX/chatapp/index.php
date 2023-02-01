<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTBZkWWuUHNahSjQZtmeoQYjMvmHe1WYuCTQvZ6jIW3" crossorigin="anonymous">
        <title>CHATAPP</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php">Chat</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1)
                        {
                            echo '<li><a class="dropdown-item" href="../account.php">Nalog</a></li>';
                            echo '<li><a class="dropdown-item" href="../handling/logout.php">Odjava</a></li>';
                            $_SESSION["currentURL"] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        }
                        else
                        {
                            echo '<li><a class="dropdown-item" href="./logIN.php">Prijavi se</a></li>';
                            echo '<li><a class="dropdown-item" href="./signUP.php">Registruj se</a></li>';
                        }
                        ?>
                    </ul>
                    <?php 
                        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1)
                        {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="../tema.php">Napravi temu</a>
                        </li>';
                        }
                    ?>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        
        <div id="poruke_div"></div>
        <input id="nova_poruka_tekst" type="text">
        <button onclick="slanjePoruke()">SLANJE PORUKE</button>
        
        <script>
            setInterval(citanjePoruka, 500);

            function citanjePoruka() {
                const xml = new XMLHttpRequest();

                xml.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById('poruke_div').innerHTML = xml.responseText;
                    }
                }
                xml.open('GET', 'citanje_poruka.php', true);
                xml.send();
            };

            

            function slanjePoruke() {

                let tekst_poruke = document.getElementById('nova_poruka_tekst').value;
                tekst_poruke = tekst_poruke.trim();
                tekst_poruke = tekst_poruke.replace(/"/g, "'");
                tekst_poruke = encodeURIComponent(tekst_poruke);

                if(tekst_poruke.lenght == 0) {
                    document.getElementById('nova_poruka_tekst').value = "";
                    return;
                }

                const xml = new XMLHttpRequest();

                xml.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById('nova_poruka_tekst').value = "";

                    }
                };

                let poruka_paket =
                {
                    "tekst_poruke" : tekst_poruke
                };

                let poruka_paket_json = JSON.stringify(poruka_paket);

                xml.open('GET', 'dodavanje_poruke.php?p=' + poruka_paket_json, true);
                xml.send();
            }

        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
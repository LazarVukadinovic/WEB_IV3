<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>CHATAPP</title>
    </head>
    <body>
        <?php include "./components/navbar.php"; ?>
        
        <input id="nova_poruka_tekst" type="text">
        <button onclick="slanjePoruke()">SLANJE PORUKE</button>
        <div id="poruke_div" style="text-align: center; margin-top:30px"></div>
        
        
        <script>
            setInterval(citanjePoruka, 500);

            function citanjePoruka() {
                const xml = new XMLHttpRequest();

                xml.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById('poruke_div').innerHTML = xml.responseText;
                    }
                }
                xml.open('GET', './handlers/citanje_poruka.php', true);
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

                xml.open('GET', './handlers/dodavanje_poruke.php?p=' + poruka_paket_json, true);
                xml.send();
            }

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>
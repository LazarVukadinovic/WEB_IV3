<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
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
            <a href="../">
                <li>Početna</li>
            </a>
            <a href="./pregled.php">
                <li>Pregled</li>
            </a>
            <a href="./about.html">
                <li>O autoru</li>
            </a>
            <a href="./uputstvo.html">
                <li>Uputstvo</li>
            </a>
        </ul>
    </nav>

    <main>
        <?php
        // Učitajte XML fajl
        $xml = new DOMDocument();
        $xml->load("../xml/biblioteka.xml");

        // Učitajte XSL fajl
        $xsl = new DOMDocument();
        $xsl->load("../xml/biblioteka.xsl");

        // Kreirajte procesor
        $procesor = new XSLTProcessor();

        // Učitajte stil u procesor
        $procesor->importStylesheet($xsl);

        // Transformišite XML fajl i prikažite ga
        echo $procesor->transformToXML($xml);
        ?>
    </main>

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
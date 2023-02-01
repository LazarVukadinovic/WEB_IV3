<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div id='showFilm'></div><br>
        <input type="button" onclick="previous()" value="<<">
        <input type="button" onclick="next()" value=">>">


        <script>
            let i = 0;
            let len;
            let Film;

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
            const xmlDoc = xhttp.responseXML;
            Film = xmlDoc.getElementsByTagName("film");
            len = Film.length;
            displayFilm(i);
            }
            xhttp.open("GET", "filmovi.xml");
            xhttp.send();

            function displayFilm(i) {
                document.getElementById("showFilm").innerHTML =
                "Artist: " +
                Film[i].getElementsByTagName("naziv")[0].childNodes[0].nodeValue +
                "<br>Title: " +
                Film[i].getElementsByTagName("zanr")[0].childNodes[0].nodeValue +
                "<br>Year: " + 
                Film[i].getElementsByTagName("godina")[0].childNodes[0].nodeValue;
            }

            function next() {
            if (i < len-1) {
                i++;
                displayFilm(i);
            }
            if(i >= len-1){
                i=0;
                displayFilm(i);
            } 
            }

            function previous() {
            if (i > 0) {
                i--;
                displayFilm(i);
            }
            if(i <= 0){
                i = len-1;
                displayFilm(i);
            }
            }
        </script>
    </body>
</html>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Predlozi: <span id="txtHint"></span></p>

        <form>
        Ime: <input type="text" onkeyup="showHint(this.value)">
        </form>

        <script>
        function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
            document.getElementById("txtHint").innerHTML = this.responseText;
            }
        xmlhttp.open("GET", "gethint.php?q=" + str);
        xmlhttp.send();
        }
        }
        </script>
    </body>
</html>
<!DOCTYPE html>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo_ajax";
    $conn = new mysqli($servername, $username, $password, $dbname);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            th,td {
            padding: 5px;
            }
        </style>
    </head>
    <body>

    <h2>The XMLHttpRequest Object</h2>

    <form action=""> 
        <select name="customers" onchange="showCustomer(this.value)">
            <option value="">Izaberi zaposlenog:</option>
            <?php
                $sql = "SELECT id, ime FROM ljudi";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<option value='" . $row['id'] . "'>" . $row['ime'] . "</option>";
                    }
                }
            ?>
        </select>
    </form>
    <br>
    <div id="txtHint">Customer info will be listed here...</div>
        
    <script>
        function showCustomer(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
        xhttp.open("GET", "getzaposlen.php?q="+str);
        xhttp.send();
        }
    </script>
    </body>
</html>
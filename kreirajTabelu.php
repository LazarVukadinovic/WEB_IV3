<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 30px;
        }
        .color{
            background-color: gray;
        }
    </style>
</head>
<body>
    <?php 
        $brReda = $brKolona = "";
    ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="brReda">Broj reda: </label>
    <input type="number" name="brReda">
    <br>
    <label for="brKolone">Broj kolone: </label>
    <input type="number" name="brKolone">

    <input type="submit" value="Kreiraj tabelu">

    </form>

    <br><br>

    <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $brReda = test_input($_POST['brReda']);
            $brKolona = test_input($_POST['brKolone']);

        }

        if($brKolona>0 && $brReda>0)
        {
            echo '<table class="tabela">';
            for($i=1; $i<=$brReda; $i++)
            {
                if($i % 2 == 0)
                    echo "<tr>";
                else
                    echo '<tr class="color">';
                for($j=1; $j<=$brKolona; $j++)
                {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
            echo '</table>';
        }


        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


    ?>
</body>
</html>
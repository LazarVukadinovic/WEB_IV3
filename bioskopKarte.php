<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bioskop";
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM rezervacije";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <style>
      li{
        width: 300px;
      }
    </style>
  </head>
  <body>
    <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["record"]))
        {
          $record = test_input($_POST["record"]);
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if(isset($record))
      {
        $sqlCheck = "SELECT id FROM rezervacije WHERE id = " . $record;
        $resultCheck = $conn->query($sqlCheck);
        if ($resultCheck->num_rows > 0) {
          $sqlDelete = "DELETE FROM rezervacije WHERE id = " . $record;
          $conn->query($sqlDelete);
          $record = "";
          header("http://nemanaziv.com/bioskopKarte.php");
        }
      }
    ?>
    <a href="http://nemanaziv.com/rezervacijaBioskop.php"></a>
    <div class="container mt-4">
      <div class="row">
        <div class="col">

          <form method="POST" class="mb-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="record">Koji id zelite da uklonite: </label>
            <input type="number" name="record">
            <input class="btn btn-danger" type="submit" value="Ukloni">
          </form>
          <?php 

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<ul class='list-group list-group-horizontal'>
                    <li class='list-group-item'>" . $row['id'] . "</li>
                    <li class='list-group-item'>" . $row['ime'] . "</li>
                    <li class='list-group-item'>" . $row['film'] . "</li>
                    <li class='list-group-item'>" . $row['termin'] . "</li>
                    <li class='list-group-item'>" . $row['sedista'] . "</li>
                    </ul>";
                }
            }

          ?>
        </div>
      </div>
    </div>
  </body>
</html>


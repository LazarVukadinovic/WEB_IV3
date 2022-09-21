<?php
$cookie_name = "voce";
$cookie_value = "kajsija";
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolacici</title>
</head>
<body>
    <?php 
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Zdravo! Prvi put si ovde.";
          } else {
            echo "Zdravo! Izabrali ste - " . $_COOKIE[$cookie_name] . ".";
          }
    ?>
</body>
</html>
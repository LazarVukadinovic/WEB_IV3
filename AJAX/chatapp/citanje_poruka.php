<?php 

    require_once("connection.php");

    $sql = "SELECT * FROM chat_poruke ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    $response = "";

    while($row = mysqli_fetch_assoc($result))
    {
        
    }

?>
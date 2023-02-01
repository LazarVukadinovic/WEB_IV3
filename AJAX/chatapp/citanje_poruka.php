<?php 

    require_once("connection.php");

    $sql = "SELECT * FROM chat_poruke ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    $response = "";

    while($row = mysqli_fetch_assoc($result))
    {
        $response .= "<div class='poruka_red'>";
        $response .= "<b> " . $row['korisnicko_ime'] . "</b>: ";
        $response .= $row['tekst_poruke'] . " (<font color='#27b'>";
        $response .= $row['vreme'] . ")</font>";
        $response .= "</div>";
    }

    echo $response;

?>
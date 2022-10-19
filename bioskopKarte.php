<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bioskop";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT ime, film, termin, sedista FROM rezervacije";
$result = $conn->query($sql);

echo "<table>
<tr>
    <th>Ime</th>
    <th>Film</th>
    <th>Termin</th>
    <th>Sedista</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <th>" . $row['ime'] . "</th>
        <th>" . $row['film'] . "</th>
        <th>" . $row['termin'] . "</th>
        <th>" . $row['sedista'] . "</th>
      </tr>";
    }
}

echo "</table>";

?>
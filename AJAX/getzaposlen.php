<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_ajax";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, ime, godine, telefon, pozicija
FROM ljudi WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $naziv, $godine, $telefon, $pozicija);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Ime</th>";
echo "<td>" . $naziv . "</td>";
echo "<th>Godine</th>";
echo "<td>" . $godine . "</td>";
echo "<th>Telefon</th>";
echo "<td>" . $telefon . "</td>";
echo "<th>Pozicija</th>";
echo "<td>" . $pozicija . "</td>";
echo "</tr>";
echo "</table>";
?>
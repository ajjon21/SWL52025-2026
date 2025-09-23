<?php

$servername = "localhost";

$username = "DTS2134588";

$password = "Password123";

$dbname = "DTS2134588";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

$sql = "SELECT id, name, email FROM tblUsers";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"].
"<br>";

}

} else {

echo "0 results";

}

$conn->close();

?>


<?php
$servername = "localhost";
$username = "root";
$password = "notapw128.";
$database = "chess";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password,$database,$port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 'success';

$sql = "SELECT * FROM tblplayer WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - username: " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

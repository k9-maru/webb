<?php
$hostname = "localhost";
$username = "root";
$password = "notapw128.";
$database = "webdatabase";
$port = 3307;
$con = new mysqli($hostname, $username, $password, $database, $port);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$del_id = $_POST["del_id"];
$sql = "DELETE FROM tblprovider WHERE id =" . $del_id . "";
$con->query($sql);

header("Location: managerhome.php");
?>
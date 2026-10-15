<?php
// config.php
$conn = mysqli_connect("localhost", "root", "", "db--school");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

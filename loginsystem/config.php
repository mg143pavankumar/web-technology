<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Unable to connect to server: " . mysqli_connect_error();
}

echo "Connection established";

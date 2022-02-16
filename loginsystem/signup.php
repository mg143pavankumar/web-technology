<?php
include_once "./config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$createTable = "CREATE TABLE users ( userId INT(6) AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)";

function createUserTable($conn, $createTable)
{
    if (mysqli_query($conn, $createTable)) {
        echo "User table is created successfully";
    } else {
        echo "User table is not created: " . mysqli_error($conn);
    }
}



$insertValue = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

$UserEmail = "SELECT * FROM users";
$result = mysqli_query($conn, $UserEmail);
$isEmailExist = 0;


while ($row = mysqli_fetch_array($result)) {
    if ($row['email'] == $email) {
        $isEmailExist = 1;
        break;
    }
}

if ($isEmailExist != 1) {

    $register = mysqli_query($conn, $insertValue);

    if ($register) {
        echo "Register successfully";
        header("Location: http://localhost/webTech/loginsystem/pages/");
        exit();
    }
} else {
    echo "User already registered with this email: " . $email;
}

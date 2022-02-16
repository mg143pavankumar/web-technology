<?php
include_once "./config.php";


$email = $_POST['email'];
$password = $_POST['password'];


$userData = "SELECT * FROM users";
$result  = mysqli_query($conn, $userData);

$isLoggedIn = 0;

while ($row = mysqli_fetch_array($result)) {
    if ($row["email"] == $email && $row["password"] == $password) {
        $isLoggedIn = 1;
        break;
    }
}

if ($isLoggedIn != 0) {
    echo "Login Successfully";
    header("Location: http://localhost/webTech/loginsystem/pages/");
    exit();
} else {
    echo "Invalid Email or Password";
}

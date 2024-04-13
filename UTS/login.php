<?php
session_start();

// Dummy username and password
$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        echo "Login successful. Welcome, $username!";
    } else {
        echo "Invalid username or password!";
    }
}
?>

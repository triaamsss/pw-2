<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "admin@gmail.com" and $password == "admin") {
    $_SESSION["email"] = $email;
    header("location:home.PHP");
} else {
    header("location:index.php");
}

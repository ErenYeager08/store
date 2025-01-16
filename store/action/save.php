<?php session_start();
include "../include/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userR = $_POST["username"];
    $emailR = $_POST["email"];
    $passR = $_POST["password"];
    $_SESSION['email'] = $emailR;
    $sql = "INSERT INTO users (username, email, password) VALUES ('$userR', '$emailR', '$passR')";

    if ($conn->query($sql) === TRUE) {
        header("location: ../login.php");
    }
}
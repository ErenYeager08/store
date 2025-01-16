<?php session_start();

include "../include/db.php";
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;

$sql1 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    header("Location: ../index.php");
} else {
    echo "error";
}

<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin123") {
    header("Location: dashboard.php");
} else {
    echo "Invalid credentials!";
}
?>

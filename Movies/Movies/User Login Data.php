<?php
session_start(); // Start session only once at the beginning

$uid = $_POST['uid'];
$pass = $_POST['pass'];

$con = mysqli_connect('localhost', 'root', '', 'movie nation');

// Check if the credentials belong to a regular user
$query = "SELECT * FROM registration WHERE name='$uid' AND password='$pass'";
$res = mysqli_query($con, $query);

if ($data = mysqli_fetch_array($res)) {
    $_SESSION['uname'] = $data['email'];
    header('Location: Home.php');
    exit(); // Ensure script stops execution after redirection
}

// Check if the credentials belong to the admin
if ($uid == "Admin" && $pass == "Admin123") {
    $_SESSION['uid'] = "Admin";
    header('Location: Admin Home.php');
    exit(); // Ensure script stops execution after redirection
}

// If neither regular user nor admin, redirect to appropriate login page
header('Location: User Login.php?flag=0');
exit(); // Ensure script stops execution after redirection
?>

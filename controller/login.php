<?php

include '../model/baza.php';

if (!isset($_POST['email']) || empty($_POST['email'])) {
    exit('email is incorect');
}
if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    exit('password is incorect');
}
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = $baza->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");

if ($sql->num_rows > 0) {
    $result = $sql->fetch_assoc();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['user'] = $result;
} else {
    // var_dump($email, $pass, $result['pass']);
    exit('incorect password or email');
}
header('Location:../index.php');

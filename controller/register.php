<?php

include '../model/baza.php';

if (!isset($_POST['name']) || empty($_POST['name'])) {
    exit('name is incorect');
}
if (!isset($_POST['email']) || empty($_POST['email'])) {
    exit('email is incorect');
}
if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    exit('password is incorect');
}
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
// $sql =
$baza->query("INSERT INTO users(name,email,pass, img)VALUES('$name','$email','$pass', 'prof.jpg')");

header('Location:../index.php');

<?php

function getUser()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['user'])) {
        $_SESSION['user'];
    } else {
        return null;
    }
}
$user = getUser();
$user_id = $user['id'];
include '../model/baza.php';

// Provera da li je forma poslata
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hvatanje podataka iz forme
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Hvatanje informacija o slici (ovo je jednostavan primer, možete dodati dodatne provere i postavke)
    $img = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];
    $img_path = '../img/'.$img; // Dodao sam '/' nakon 'img' kako bi ispravno formirao putanju

    // Pomeranje slike u odredišni folder
    move_uploaded_file($img_temp, $img_path);

    // SQL upit za ubacivanje podataka u bazu
    $sql = "INSERT INTO post (title, content, img) VALUES ('$title', '$content', '$img_path')";

    // Izvršavanje upita
    if ($baza->query($sql) === true) {
        echo 'New post added successfully';
        header('Location:../index.php');
    } else {
        echo 'Error: '.$sql.'<br>'.$baza->error;
    }

    // Zatvaranje konekcije
    $baza->close();
}

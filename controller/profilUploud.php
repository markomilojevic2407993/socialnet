<?php

function getUser()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];

        return $user; // Dodaj return kako bi vratio vrednost
    } else {
        return null;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = '../img/';
    $user = getUser(); // $user['id']

    if ($user === null) {
        // Ako nema korisnika u sesiji, prekini dalju obradu
        echo 'User not authenticated.';
        exit;
    }

    // Prikupljanje informacija o slici
    $target_file = $target_dir.$user['id'].'.'.pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $uploadOk = 1;
    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Provera da li je slika
    $check = getimagesize($_FILES['img']['tmp_name']);
    if ($check === false) {
        $errors .= 'File is not an image. ';
        $uploadOk = 0;
    }

    // Provera da li slika već postoji
    if (file_exists($target_file)) {
        $errors .= 'Sorry, file already exists. ';
        $uploadOk = 0;
    }

    // Provera veličine slike
    if ($_FILES['img']['size'] > 5000000) { // 5 MB
        $errors .= 'Sorry, your file is too large. ';
        $uploadOk = 0;
    }

    // Dozvoljene ekstenzije
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imgFileType, $allowedExtensions)) {
        $errors .= 'Sorry, only JPG, JPEG, PNG & GIF files are allowed. ';
        $uploadOk = 0;
    }

    // Upload slike ako su ispunjeni svi uslovi
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            echo 'The file '.htmlspecialchars(basename($_FILES['img']['name'])).' has been uploaded.';
            // Ovde možete dodati logiku za čuvanje informacija o slici u bazi podataka
        } else {
            echo 'Sorry, there was an error uploading your file.';
        }
    } else {
        echo $errors; // Ako postoji neka greška, ispiši je
    }
}

header('Location:../index.php');

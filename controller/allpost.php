<?php

include '../model/baza.php';

$result = $baza->query('SELECT * FROM post');

$posts = $result->fetch_all(MYSQLI_ASSOC);

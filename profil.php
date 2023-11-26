<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
<div class="container d-flex justify-content-start flex-column">
        <p class="text-primary h5"><?php echo $user['name']; ?></p><br>
        <img src="<?php echo $user['img']; ?>" alt="Profilna slika" width="250px">
        <a href="controller/unlogin.php">unlogin</a>
        <form action="controller/profilUploud.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img" ><br>
            <button type="submit">uploud pictures</button>
        </form>
    </div>
</body>
</html>
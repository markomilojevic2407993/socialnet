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
    <title>New post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="container d-flex justify-content-center align-items-center vw-100 vh-100">
            <!--id	id_user	title	content	img -->
            <form action="controller/post.php" method="post" enctype="multipart/form-data">
                 <input type="text" name="title" placeholder="title"><br>
                 <input type="file" name="img" ><br>
                 <textarea name="content"  cols="30" rows="10">Your contetn</textarea><br>
                 <button type="submit">new post</button>
            </form>
        </div>
    </div>
    
</body>
</html>
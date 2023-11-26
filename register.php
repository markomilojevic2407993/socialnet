<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php // include 'navbar.php';?>

    
<div class="bg-info">
    <div class="container d-flex justify-content-center align-items-center vw-100 vh-100">
        <form action="controller/register.php" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Your name</label><br>
            <input type="text" class="form-control" name="name" placeholder="Makro Milojevic" required><br>
        </div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">email</label><br>
            <input type="text" class="form-control" name="email" placeholder="marko@gmail.com" required><br>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label><br>
            <input type="password" class="form-control" name="pass" placeholder="*******" required><br>
        </div>
            <button type="submit" class="btn btn-success">Register</button>
            <a class="btn btn-primary" href="login.php">You already have an account</a>
        </form>
    </div>
</div> 
</body>
</html>

<?php 
require_once 'Database.php';
session_start();

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $queryAdmin = mysqli_query($conn, "SELECT username FROM admin WHERE id = '$id'");
    $data = mysqli_fetch_array($queryAdmin);

    if ($key === hash('sha256', $data['username'])) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $data['username'];
    }
}

if (isset($_SESSION['login'])) {
    header('Location: admin-page.php');
}

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $checkAdmin = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    $dataAdmin = mysqli_fetch_array($checkAdmin);

    if (mysqli_num_rows($checkAdmin) > 0) {
        if (isset($_POST['remember']) == 'itsme') {
            setcookie("id", $dataAdmin['id'], time() + 60,"/");
            setcookie("key", hash('sha256', $dataAdmin['username']), time() + 60,"/");
        }
        $_SESSION['user'] = $username;
        $_SESSION['login'] = true;
        header('Location: admin-page.php');
        exit;
    } else {
        header('Location: login.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <div class="d-flex align-items-center mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card shadow mt-5 rounded">
                    <div class="card-body">
                        <form action="" method="POST" class="px-4 py-3">
                            <h1 class="text-center fw-bold text-primary">Login</h1>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" value="itsme">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
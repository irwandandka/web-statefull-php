<?php 

session_start();

if (isset($_COOKIE['login'])) {
    $_SESSION['login'] = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php include('component/navbar.php') ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 my-auto">
                <h3 class="fw-bold text-primary mb-3">Welcome To My Website</h3>
                <p class="text-secondary h5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora culpa dolore odio explicabo neque molestiae nobis animi, quidem velit iure id veniam est cumque quam perferendis tenetur aspernatur perspiciatis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, quas.</p>
                <div class="">
                    <a href="#" class="btn btn-primary shadow px-4 py-2 rounded text-uppercase fw-bold mt-3">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/4115337.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
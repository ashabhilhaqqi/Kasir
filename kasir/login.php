<?php
require 'function.php';
if (!isset($_SESSION['login'])) {
    
} else {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body {
            background-image: url('./img/bg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
        </style>
    </head>
    <body class="bg-light" >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="position-relative" >
                <main>
                    <div class="container text-start position-absolute top-50 start-50 translate-middle" >
                            <div class="row align-items-center ">
                            <div class="col  pe-0">
                                <img src="./img/gojo.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col  ps-0">
                                <h1>Gojo-Toon</h1>
                                <p>Jual beli barang jejepangan</p>
                            </div>
                                
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 bg-transparent rounded-lg ">
                                    <div class="card-header ">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    <div class="card-body">

                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control bg-transparent" id="inputEmail" name="username" type="text" placeholder="Enter username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control bg-transparent" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

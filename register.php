<?php 
require_once 'database/koneksi.php';

session_start();

if(isset($_SESSION['login'])){
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php require_once 'layouts/_css.php'; ?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
     
        <!-- Register Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="proses.php" method="POST">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DashTom</h3>
                                </a>
                                <h3>Register</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="username" name="username" >
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
                                <label for="floatingInput">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password" name="password2">
                                <label for="floatingPassword">Konfirmasi Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="register">Register</button>
                            <p class="text-center mb-0">Sudah punya akun? <a href="login.php">Login</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Register End -->
    </div>
    
    <?php require_once 'layouts/_js.php' ?>
</body>
</html>
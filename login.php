<?php 
session_start();
require_once 'database/koneksi.php';

if(isset($_SESSION['login'])){
    header("location: index.php");
    exit;
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    
    if(mysqli_num_rows($hasil) === 1){
        $row = mysqli_fetch_assoc($hasil);
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            
            header("location: index.php");
            exit;
        } 
        header("location: login.php");
        exit;
    }
    
    $error = true;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once 'layouts/_css.php'; ?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Login Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="" method="POST">

                        
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DashTom</h3>
                                </a>
                                <h3>Login</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="masukkan nama..." name="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Login</button>
                            <p class="text-center mb-0">Belum Punya akun? <a href="register.php">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
    </div>

    <?php require_once 'layouts/_js.php' ?>
</body>
</html>
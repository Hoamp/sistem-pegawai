<?php 
require_once 'database/koneksi.php';

session_start();

if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php require_once 'layouts/_css.php'; ?>

</head>

<body>
    <!-- Isi Html -->
    <div class="container-xxl position-relative bg-white d-flex p-0">
        
        <!-- Start Sidebar -->
        <?php require_once 'layouts/_sidebar.php'; ?>
        <!-- End Sidebar -->

        <!-- Content Start -->
        <div class="content">
            <!-- Start Navbar -->
            <?php require_once 'layouts/_nav.php'; ?>
            <!-- End Navbar -->

            
            <!-- Start Footer -->
            <?php require_once 'layouts/_footer.php'; ?>
            <!-- End Footer -->
            
        </div>
        <!-- Content End -->


        <!-- Kembali ke atas -->
        <?php require_once 'layouts/_toTop.php'; ?>
    </div>

    <?php require_once 'layouts/_js.php'; ?>
    
</body>

</html>
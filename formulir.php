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
    <title>Tambah Pegawai</title>
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

            <!-- Start Form -->
            <div class="container-fluid pt-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Pegawai</h6>
                        <form action="proses.php" method="POST">
                            <div class="row mb-3">
                                <label  class="col-sm-2 col-form-label">NIP </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="nip">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-sm-2 col-form-label">Nama </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-sm-2 col-form-label">Alamat </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="alamat">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Tanggal-lahir</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input type="date" class="form-control"  name="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="tambah_pegawai">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Form -->
            
            
            
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
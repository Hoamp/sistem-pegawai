<?php 
require_once 'database/koneksi.php';

$query = "SELECT * FROM pegawai";
$data_pegawai = mysqli_query($conn, $query);
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tabel Pegawai</title>
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

                <!-- Start Table -->
                <div class="container py-3">

                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Pegawai</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data_pegawai as $p) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $p['nip']; ?></td>
                                                <td><?= $p['nama']; ?></td>
                                                <td><?= $p['alamat']; ?></td>
                                                <td><?= $p['jenis_kelamin']; ?></td>
                                                <td><?= $p['tanggal_lahir']; ?></td>
                                                <td>
                                                    <a href="proses.php?id=<?= $p['id_pegawai']; ?>" onclick="return confirm(`yakin untuk menghapus data <?= $p['nama']; ?>`)"><button class="btn btn-danger badge"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></button></a>
                                                    <a href="ubah.php?id=<?= $p['id_pegawai']; ?>"><button class="btn btn-warning badge"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></button></a>
                                                </td>
                                            </tr>
                                        <?php $no++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Table -->
                
                
                
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
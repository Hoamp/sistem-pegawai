<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>



<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DashTom</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="dashmin/img/thomasjd.jpeg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Thomas</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active' : '' ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="table.php" class="nav-item nav-link <?= ($activePage == 'table') ? 'active' : '' ?>"><i class="fa fa-table me-2"></i>Data Pegawai</a>
            <a href="formulir.php" class="nav-item nav-link <?= ($activePage == 'formulir') ? 'active' : '' ?>"><i class="fa fa-keyboard me-2"></i>Input Pegawai</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

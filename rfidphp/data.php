<?php 
     require "koneksidb.php";
     $datax    = query("SELECT * FROM tb_monitoring")[0];
     $rfid = $datax['rfid'];

    $jumlahrfid = mysqli_query($koneksi,"SELECT * FROM tb_daftarrfid WHERE rfid = '$rfid'");
    $cek = mysqli_num_rows($jumlahrfid);

    if($cek == 0){
        $nilai = $rfid;
    }
    else{
        $nilai = null;
    }
 ?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Data Tables</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/libs/css/style2.css">
        <link
            rel="stylesheet"
            href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/vendor/datatables/css/buttons.bootstrap4.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/vendor/datatables/css/select.bootstrap4.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="index.php">RFID PHP</a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-tables.php">Log Data</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data.php">Data</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->

            <!-- wrapper -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="container-fluid  dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Data Tables</h2>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table RFID-->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">DATA RFID</h5>
                                    <button class="button" data-modal="#addDataRFID">Tambah RFID</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            id="example"
                                            class="table table-striped table-bordered second"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Rfid</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Telepon</th>
                                                    <th>saldo</th>
                                                    <th>action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
											$datatampil = mysqli_query($koneksi, "SELECT * from tb_daftarrfid ORDER BY id DESC");
											$no=1;
											foreach ($datatampil as $row){
                                            
                                            ?>
                                                <tr class="bg-white">
                                                    <td><?= $no; ?></td>
                                                    <td><?=$row['rfid']; ?></td>
                                                    <td><?=$row['nama']; ?></td>
                                                    <td><?=$row['alamat']; ?></td>
                                                    <td><?=$row['telepon']; ?></td>
                                                    <td><?=$row['saldo']; ?></td>
                                                    <td>
                                                        <button class="button" data-modal="#EditRFID<?= $row['id']; ?>">Edit</button>
                                                        <a href="actionadddata.php?hapusrfid=<?=$row['id']; ?>">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
                                            $no++;
                                            }

                                            ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TOL -->

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">DATA Tol</h5>
                                    <button class="button" data-modal="#addDataTol">Tambahkan Tol</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            id="example"
                                            class="table table-striped table-bordered second"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Nama Tol</th>
                                                    <th>Harga</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
											$datatampil = mysqli_query($koneksi, "SELECT * from tb_tol ORDER BY id DESC");
											$no=1;
											foreach ($datatampil as $row){
                                            
                                            ?>
                                                <tr class="bg-white">
                                                    <td><?= $no; ?></td>
                                                    <td><?=$row['id']; ?></td>
                                                    <td><?=$row['namatol']; ?></td>
                                                    <td><?=$row['harga']; ?></td>

                                                    <td>
                                                        <button class="button" data-modal="#EditTol<?= $row['id']; ?>">Edit</button>
                                                        <a href="actionadddata.php?hapustol=<?=$row['id']; ?>">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
                                            $no++;
                                            }

                                            ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ============================================================== -->
                    <!-- data table Tol -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end data table TOL -->
                    <!-- ============================================================== -->
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2021 Iwan Cilibur. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="hapusdata.php">Hapus Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- START ADD RFID -->
    <div id="#addDataRFID" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close">&times;</a>
                <form action="actionadddata.php">
                    <h2>FORM DAFTAR RFID</h2>
                    <div>
                        <input
                            class="fname"
                            type="text"
                            name="addrfid"
                            placeholder="Tap Kartu Lain!"
                            value="<?= $nilai; ?>"
                            readonly="readonly"/>
                        <input type="text" name="addnama" placeholder="Nama Lengkap"/>
                        <input type="text" name="addalamat" placeholder="Alamat"/>
                        <input type="text" name="addtelepon" placeholder="Telepon"/>
                        <input type="text" name="addsaldo" placeholder="Saldo Awal"/>
                    </div>
                    <button type="submit" href="/">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END ADD RFID -->

    <!-- START ADD TOL -->
    <div id="#addDataTol" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <span class="close">&times;</span>
                <form action="actionadddata.php">
                    <h2>FORM DAFTAR TOL</h2>
                    <div>
                        <input
                            class="fname"
                            type="text"
                            name="addnamatol"
                            placeholder="Masukan Nama Tol"/>
                        <input type="text" name="addhargatol" placeholder="Masukan Harga Tol"/>
                    </div>
                    <button type="submit">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <!-- EDIT FORM 1 / MODAL 1 -->
    <?php
        $datatampil = mysqli_query($koneksi, "SELECT * from tb_daftarrfid");
        $no=1;
        foreach ($datatampil as $row){
        
    ?>
    <div id="#EditRFID<?= $row['id']; ?>" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close">&times;</a>
                <form action="actionadddata.php">
                    <h2>FORM EDIT RFID</h2>
                    <div>
                        <input
                            class="fname"
                            type="text"
                            name="editrfid"
                            placeholder="Tap Kartu Lain!"
                            value="<?= $row['rfid']; ?>"
                            readonly="readonly"/>
                        <input
                            type="text"
                            name="editnama"
                            placeholder="Nama Lengkap"
                            value="<?= $row['nama']; ?>"/>
                        <input
                            type="text"
                            name="editalamat"
                            placeholder="Alamat"
                            value="<?= $row['alamat']; ?>"/>
                        <input
                            type="text"
                            name="edittelepon"
                            placeholder="Telepon"
                            value="<?= $row['telepon']; ?>"/>
                        <input
                            type="text"
                            name="editsaldo"
                            placeholder="Saldo Awal"
                            value="<?= $row['saldo']; ?>"/>
                    </div>
                    <button type="submit" href="/">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <!-- END FORM 1 / MODAL 1 -->
    <!-- END ADD TOL -->

    <!-- EDIT TOL/ MODAL 1 -->
    <?php
        $datatampil = mysqli_query($koneksi, "SELECT * from tb_tol");
        $no=1;
        foreach ($datatampil as $row){
        
    ?>
    <div id="#EditTol<?= $row['id']; ?>" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close">&times;</a>
                <form action="actionadddata.php">
                    <h2>EDIT DATA TOL</h2>
                    <div>
                        <input
                            class="fname"
                            type="text"
                            name="editdatatol"
                            placeholder="Masukan Tol Lain"
                            value="<?= $row['namatol']; ?>"
                            readonly="readonly"/>     
                        <input
                            type="text"
                            name="editnamatol"
                            placeholder="Nama Tol"
                            value="<?= $row['namatol']; ?>"/>
                        <input
                            type="text"
                            name="edithargatol"
                            placeholder="Harga Tol"
                            value="<?= $row['harga']; ?>"/>

                    </div>
                    <button type="submit" href="/">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <!-- END TOL/ MODAL 1 -->
    <!-- ============================================================== -->

    <!-- END FORM 2 / MODAL 2 -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/libs/js/script2.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/libs/js/script2.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script
        src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script
        src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script
        src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script
        src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

</body>

</html>
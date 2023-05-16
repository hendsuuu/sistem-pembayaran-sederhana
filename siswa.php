<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEMBAYARAN SEKOLAH</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WELCOME !</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="siswa.php">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Siswa</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="guru.php">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Guru</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="pendaftaran.php">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Pendaftaran</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="laporan_siswa.php">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->






                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap Modal</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">...</div>
                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
                        </div>
                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Button trigger modal -->

                    <!-- Modal -->


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">DATA SISWA</h1>
                        <!-- <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-add"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Siswa</button> -->
                    </div>
                    <!-- Page Heading -->
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'gagal') {
                    ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                                Ekstensi Tidak Diperbolehkan
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasil") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Disimpan
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasilupdate") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Update
                            </div>
                        <?php
                        } elseif ($_GET['alert'] == "berhasilhapus") {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Success</h4>
                                Berhasil Hapus
                            </div>
                    <?php
                        }
                    }
                    ?>
<!-- 
                    <form action="add_siswa.php" method="post" enctype="multipart/form-data">
                        <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Tambah Siswa</h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" required="required" class="form-control " placeholder="Masukkan Nama Siswa ..">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" required="required" class="form-control " placeholder="Masukkan Alamat ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="ttl" required="required" class="form-control" placeholder="Tanggal Lahir ..">
                                        </div>

                                        <div class="form-group">
                                            <label>No Hp Wali</label>
                                            <input type="text" name="no_hp" required="required" class="form-control" placeholder="No Hp ..">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Bayar</label>
                                            <input type="date" name="tgl_masuk" required="required" class="form-control" placeholder="Jumlah Stok ..">
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> -->



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No Hp Wali</th>
                                            <th>Tanggal Bayar</th>
                                            <th>SPP</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $nomor = 1;
                                        $data = mysqli_query($koneksi, "select * from tbl_siswa");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $d['nama']; ?></td>
                                                <td><?= $d['ttl']; ?></td>
                                                <td><?= $d['alamat']; ?></td>
                                                <td><?= $d['no_hp']; ?></td>
                                                <td><?= $d['tgl_masuk']; ?></td>
                                                <td><?= "Rp. " . number_format($d['spp'], 2, ',', '.');  ?></td>
                                                <td>
                                                    <?php
                                                    $spp = $d['spp'];
                                                    if ($spp == 0) {
                                                    ?>
                                                        <div class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                                            Lunas
                                                        </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                            Belum Lunas
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>



                                                </td>
                                                <td>
                                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-edit<?php echo $d['id'] ?>"><i class="fas fa-sm fa-edit text-warning"></i></button>
                                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-hapus<?php echo $d['id'] ?>"><i class="fas fa-trash text-danger"></i></button>
                                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-bayar<?php echo $d['id'] ?>"><i class="fas fa-money-bill-alt text-info"></i></button>
                                                    <?php
                                                    $spp = $d['spp'];
                                                    $pendaf = $d['pendaftaran'];
                                                    if ($spp == 0 && $pendaf == 0) {
                                                    ?>
                                                        <a href="laporan.php?id=<?= $d['id']; ?>"><button  class="btn"><i class="fas fa-download text-info"></i></button></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>

                                            <form action="edit_siswa.php" method="post" enctype="multipart/form-data">
                                                <div class="modal fade" id="modal-edit<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Edit Siswa</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label>Nama</label>
                                                                    <input type="text" name="nama" required="required" class="form-control " placeholder="Masukkan Nama Siswa .." value="<?= $d['nama']; ?>">
                                                                    <input type="hidden" name="id" required="required" class="form-control " placeholder="Masukkan Nama Siswa .." value="<?= $d['id']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <input type="text" name="alamat" required="required" class="form-control " placeholder="Masukkan Alamat ..." value="<?= $d['alamat']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Lahir</label>
                                                                    <input type="date" name="ttl" required="required" class="form-control" placeholder="Tanggal Lahir .." value="<?= $d['ttl']; ?>">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>No Hp Wali</label>
                                                                    <input type="text" name="no_hp" required="required" class="form-control" placeholder="No Hp .." value="<?= $d['no_hp']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Bayar</label>
                                                                    <input type="date" name="tgl_masuk" required="required" class="form-control" placeholder="Jumlah Stok .." value="<?= $d['tgl_masuk']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>SPP</label>
                                                                    <input type="text" name="spp" required="required" class="form-control" placeholder="Tagihan" value="<?= $d['spp']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pendaftaran</label>
                                                                    <input type="text" name="pendaf" required="required" class="form-control" placeholder="Tagihan" value="<?= $d['pendaftaran']; ?>">
                                                                </div>




                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form action="bayar.php?ket=spp" method="post" enctype="multipart/form-data">
                                                <div class="modal fade" id="modal-bayar<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="exampleModalLabel">Bayar SPP Siswa</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label>Jumlah Uang</label>
                                                                    <input type="text" name="bayar" required="required" class="form-control " placeholder="Masukkan Jumlah Uang ..">
                                                                    <input type="hidden" name="id" required="required" class="form-control " placeholder="Masukkan Nama Siswa .." value="<?= $d['id']; ?>">
                                                                    <input type="hidden" name="spp" required="required" class="form-control " placeholder="Masukkan Nama Siswa .." value="<?= $d['spp']; ?>">
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="modal fade" id="modal-hapus<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Yakin akan menghapus siswa ?</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-primary" href="hapus_siswa.php?id=<?php echo $d['id'] ?>">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin | Program Dakwah</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <style>
        ul li a {
            color: white;
        }

        td img {
            width: 190px;
        }

        tr td {
            vertical-align: middle;
        }

        tr th {
            vertical-align: middle;
        }

        .tanggal {
            font-size: 13px
        }

        thead tr th {
            font-size: 15px;

            text-align: center;
        }
    </style>

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
                <div class="sidebar-brand-text mx-3">Ulul Albaab</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="../admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Artikel Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Artikel</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../artikel/artikel">Semua Artikel</a>
                        <a class="collapse-item" href="../artikel/tambah_artikel">Tambah Artikel</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Sekretariatan Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Kesekretariatan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../sekre/surat_keluar">Surat Keluar</a>
                        <a class="collapse-item" href="../sekre/syuro">Laporan Syuro</a>
                        <a class="collapse-item" href="../sekre/presensi_kajian">Presensi Kajian</a>
                        <a class="collapse-item" href="../sekre/lpj">LPJ</a>
                        <a class="collapse-item" href="../sekre/proposal">Proposal Kegiatan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Punggawa -->
            <li class="nav-item">
                <a class="nav-link" href="../admin/punggawa">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Punggawa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Highlight -->
            <li class="nav-item">
                <a class="nav-link" href="../admin/highlight">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Highlight</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Program Dakwah Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('/admin/prodak') ?>" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Program Dakwah</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('img/undraw_profile.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Program Dakwah LD Ulul Albaab</h1>
                    </div>

                    <!-- Session -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Tambah Prodak -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a><button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Tambah Prodak</button></a>
                        </h6>
                    </div>

                    <!-- Table of all artikel  -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mt-3">
                                <thead class="">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Cover</th>
                                        <th scope="col">Nama Prodak</th>
                                        <th scope="col">Detail</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($prodak as $prodak) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><img src="/img/<?php echo $prodak['gambar'] ?>" alt=""></td>
                                            <td><?= $prodak['nama_prodak'] ?></td>
                                            <td style="text-align: justify;"><?= $prodak['detail'] ?></td>
                                            <td>
                                                <a href="/prodak/prodak_delete/<?= $prodak['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                                                <!-- <button data-toggle="modal" data-target="#saveModal" type="button text-center" class="btn btn-danger">Delete</button> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Ulul Albaab 2020</span>
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
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal delete -->
            <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus artikel baru ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal add -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Punggawa </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form class="ml-3 mt-3" action="/Prodak/prodak_save" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Cover</label>
                                    <input class="form-control" type="file" id="gambar" name="gambar">
                                </div>
                                <div class="form-group row">
                                    <label for="nama_prodak" class="col-sm-2 col-form-label">Nama Prodak</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_prodak" name="nama_prodak" placeholder="Nama Prodak">
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <label for="detail">Detail</label>
                                    <textarea class="form-control" placeholder="Detail Program Dakwah" id="detail" name="detail" style="height: 100px"></textarea>
                                </div>
                                <div>
                                    <br><button type="submit" data-toggle="modal" data-target="#saveModal" class="btn btn-success btn-block">Save</button>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal add -->

            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url('/vendor/jquery/jquery.min.js') ?>"></script>
            <script src="<?php echo base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url('/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url() ?>/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url('/vendor/chart.js/Chart.min.js') ?>"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url('/js/demo/chart-area-demo.js') ?>"></script>
            <script src="<?php echo base_url('/js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>
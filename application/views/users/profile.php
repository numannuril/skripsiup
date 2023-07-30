<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        ?>

<!DOCTYPE html>
<html lang="en">

<head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Profile Santri</title>

            <!-- Custom fonts for this template -->
            <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">


        </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('users/dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fa fa-address-card"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PSB ONLINE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('users/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('users/data_diri') ?>" >
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Santri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('users/orangtua') ?>">
                    <i class="fas fa-book"></i>
                    <span>Data Orangtua</span>
                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('users/upload_berkas') ?>" >
                    <i class="fas fa-fw fa-file"></i>
                    <span>Upload Berkas</span>
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
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_calon'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('users/profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                    </div>
<div class="container">
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 175px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img style="width:4cm; height:3cm;" src="<?php echo base_url('uploads/Pas Foto/' . $calon_siswa->pas_foto); ?>"></span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $calon_siswa->nama_calon; ?></h4>
                    <div class="mt-2">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                   
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input class="form-control" type="text" name="name"  value="<?php echo $calon_siswa->nama_calon; ?>"readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>NISN</label>
                              <input class="form-control" type="text" name="username" value="<?php echo $calon_siswa->nisn; ?>"readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Tempat Lahir</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->tempat_lahir; ?>"readonly>
                            </div>
                            <div class="form-group">
                              <label>No Handphone</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->no_hp; ?>"readonly>
                            </div>
                            <div class="form-group">
                              <label>Asal Sekolah</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->asal_sekolah; ?>"readonly>
                            </div>
                            <div class="form-group">
                              <label>Ukuran Pakaian</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->ukuran_pakaian; ?>"readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label>Pilihan Sekolah</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->pilihan_id_pilihan ?>"readonly>
                            </div>
                          </div>
                          <div class="form-group">
                          <label>Nik Ayah</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->ayah_nik_ayah ?>"readonly>
                            </div>
                            <div class="form-group">
                            <label>Nik Ibu</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->ibu_nik_ibu ?>"readonly>
                            </div>
                        </div>
                      
                    </div>
                          <div class="alert alert-primary text-center">
                    <strong>Data Orang Tua</strong>
</div>
<div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Nama Lengkap Ayah:</label>
                <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value="">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>NIK Ayah:</label>
                <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" value="" placeholder="Masukkan Nomor NIK">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>No HP Ayah:</label>
                <input type="text" name="no_hp_ayah" id="no_hp_ayah" class="form-control" placeholder="Masukkan Nomer HP">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Email Ayah:</label>
                <input type="text" name="email_ayah" id="email_ayah" class="form-control" placeholder="Masukkan Email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Alamat Ayah:</label>
                <textarea class="form-control" name="alamat_ayah" id="alamat_ayah" rows="2"></textarea>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Pekerjaan Ayah:</label>
                <input type="text" name="pekerjaan_ayah_id_pekerjaan" id="pekerjaan_ayah" class="form-control"
                    placeholder="Masukkan Pilihan pekerjaan" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Nama Lengkap Ibu:</label>
                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>NIK Ibu:</label>
                <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" placeholder="Masukkan Nomor NIK">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>No HP Ibu:</label>
                <input type="text" name="no_hp_ibu" id="no_hp_ibu" class="form-control" placeholder="Masukkan Nomer HP">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Email Ibu:</label>
                <input type="text" name="email_ibu" id="email_ibu" class="form-control" placeholder="Masukkan Email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Alamat Ibu:</label>
                <textarea class="form-control" name="alamat_ibu" id="alamat_ibu" rows="2"></textarea>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Pekerjaan Ibu:</label>
                <input type="text" name="pekerjaan_ibu_id_pekerjaan" id="pekerjaan_ibu" class="form-control"
                    placeholder="Masukkan Pilihan pekerjaan" value="">
            </div>
        </div>
    </div>
</div>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    






<a href="<?php echo site_url('users/profile/editprofile'); ?>">Edit Profil</a>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <!-- Bootstrap core JavaScript-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url() ?>assest/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
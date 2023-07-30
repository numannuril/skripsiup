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

    <title>Data Santri</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fa fa-address-card"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PSB ONLINE </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('admin/data_santri') ?>">
                    <i class="fas fa-book"></i>
                    <span>Data Santri</span>
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
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('id_admin'); ?></span>
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
                <!-- Begin Page Content -->
                <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Lengkapi Data Diri</h1>
                    </div>

                    <!-- Content Row -->
                
        <form action="<?php echo base_url() ?>index.php/users/data_diri/simpan" method="POST">
            <div class="alert alert-primary text-center">
        <strong>Data Diri</strong>
            </div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input type="hidden" name="id_calon" value="">
                <input type="text" name="nama_calon" class="form-control" placeholder="Masukkan Nama Lengkap"
                    value="" >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Nomor Identitas (NISN):</label>
                <input type="text" name="nisn" class="form-control" placeholder="Masukkan Nomor NISN"
                    value="" >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin_id_jenis" class="form-control"
                    placeholder="Masukkan Jenis Kelamin" value="" >
            </div>
        </div>
    </div>
    <div class="col-sm">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control"
                    placeholder="Masukkan Email" required>
            </div>
</div>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"
                    value="" >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>No Hp:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp"
                    value="">
            </div>
        </div>            
    </div>

    <div class="alert alert-primary text-center">
        <strong>Data Alamat Asal</strong>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Desa:</label>
                <input type="text" name="desa" class="form-control" placeholder="Masukkan Nama Desa"required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Kecamatan:</label>
                <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Nama Kecamatan"required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Kabupaten:</label>
                <input type="text" name="kabupaten" class="form-control" placeholder="Masukkan Nama Kabupaten"required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Provinsi:</label>
                <input type="text" name="propinsi" class="form-control" placeholder="Masukkan Nama Provinsi"required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Alamat:</label>
                <textarea class="form-control" name="alamat" rows="2" id="alamat" required></textarea>
            </div>
        </div>
    </div>

    <div class="alert alert-primary text-center">
        <strong>Data Pendidikan</strong>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Ukuran Seragam:</label>
                <select class="form-control" name="ukuran_pakaian">
                    <option>Pilih</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Asal Sekolah:</label>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah"
                    value="">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Pilihan Sekolah:</label>
                <input type="text" name="pilihan_id_pilihan" class="form-control"
                    placeholder="Masukkan Pilihan Sekolah" value="">
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm">

        </div>
    </div>
</form>

<form action= method="POST">

<div class="alert alert-primary text-center">
        <strong>Data Orang Tua</strong>
    </div>
    <h1>A. Data Ayah/Wali</h1>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Nama Lengkap Ayah:</label>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Lengkap" required >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>NIK:</label>
                <input type="text" name="nik_ayah" class="form-control" placeholder="Masukkan Nomor NIK" required>
            </div>
        </div>
</div>
<div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp_ayah" class="form-control" placeholder="Masukkan Nomer HP" required >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email_ayah" class="form-control" placeholder="Masukkan Email" required>
            </div>
        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm">
                        <div class="form-group">
                            <label>Pekerjaan</label>
                             <select class="form-control" name="pekerjaan_ayah_id_pekerjaan" required>
                                 <option selected>Open this select menu</option>
                                        <?php 
                                             foreach($pekerjaan as $pekerja){
                                                ?>
                                           <option value="<?php echo $pekerja->id_pekerjaan ?>">
                                                <?php echo $pekerja->pekerjaan ?>
                                            </option>
                                               <?php } ?>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>
<div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Alamat:</label>
                <textarea class="form-control" name="alamat_ayah" rows="2" id="alamat" required></textarea>
            </div>
        </div>
    </div>
    <h1>B. Data Ibu/Wali</h1>
        <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Nama Lengkap Ibu:</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" required >
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>NIK:</label>
                <input type="text" name="nik_ibu" class="form-control" placeholder="Masukkan Nomor NIK" required>
            </div>
        </div>
</div>
<div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp_ibu" class="form-control" placeholder="Masukkan Nomer HP"required>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email_ibu" class="form-control" placeholder="Masukkan Email"required>
            </div>
        </div>
</div>
<div class="row">
<div class="col-sm">
                                        <label>Pekerjaan</label>
                                            <select class="custom-select" name="pekerjaan_ibu_id_pekerjaan" required>
                                                <option selected>Open this select menu</option>
                                                    <?php 
                                                    foreach($pekerjaan as $pekerja){
                                                    ?>
                                                <option value="<?php echo $pekerja->id_pekerjaan ?>">
                                                        <?php echo $pekerja->pekerjaan ?>
                                                </option>
                                                    <?php } ?>
                                            </select>
                                    </div>
                                    </div>
<div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label>Alamat:</label>
                <textarea class="form-control" name="alamat_ibu" rows="2" id="alamat"required></textarea>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm">
        </div>
    </div>
</form>

<div class="alert alert-primary text-center">
        <strong>Upload Berkas</strong>
    </div>

    <form enctype="multipart/form-data" action="<?php echo base_url() ?>index.php/users/upload_berkas/simpan" method="POST">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Kartu Keluarga</label>
                    <input type="file" name="kartu_keluarga" class="form-control" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>SKHUN</label>
                    <input type="file" name="skhun" class="form-control" placeholder="Masukkan Nama Kecamatan"required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Ijazah Sekolah</label>
                    <input type="file" name="ijazah" class="form-control" placeholder="Masukkan Nama Desa" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Akte Kelahiran</label>
                    <input type="file" name="akte_kelahiran" class="form-control" placeholder="Masukkan Nama Kecamatan" required>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm">
                <div class="form-group">
                    <label>Daftar Nilai</label>
                    <input type="file" name="daftar_nilai" class="form-control" placeholder="Masukkan Nama Desa">
                </div>
            </div> -->
            <div class="col-sm">
                <div class="form-group">
                    <label>Pas Foto Resmi</label>
                    <input type="file" name="pas_foto" class="form-control" placeholder="Masukkan Nama Kecamatan" required>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </form>

                    <!-- </div> -->
</div>
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
                <div class="modal-body">Apakah Kamu Yakin Ingin Keluar ?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <!-- Bootstrap core JavaScript-->
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
   <!-- Pastikan Anda juga sudah menyertakan library jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Library SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

<script>
    $(document).ready(function() {
        // Periksa apakah ada pesan 'success_message' dari flashdata
        <?php if ($this->session->flashdata('success_message')): ?>
            Swal.fire({
                title: "Sukses",
                text: "<?php echo $this->session->flashdata('success_message'); ?>",
                icon: "success",
                confirmButtonText: "OK"
            });
        <?php endif; ?>
    });
    </script>


</body>

</html>
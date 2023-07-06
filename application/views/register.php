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

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-5">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center" >
                    <div class="col-lg-6"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pendaftaran Santri Baru</h1>
                            </div>
                            <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
                            <form class="user" action="<?php echo base_url() ?>index.php/register/simpan" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama_calon"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nisn"
                                            placeholder="NISN" required>
                                    </div>
                                </div>
                                <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="no_hp"
                                            placeholder="Nomor Handphone" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Jenis Kelamin</label>
                                            <select class="custom-select" name="jenis_kelamin_id_jenis" required>
                                                <option selected>Open this select menu</option>
                                                    <?php 
                                                    foreach($jenis_kelamin as $jenis_kelamin){
                                                    ?>
                                                <option value="<?php echo $jenis_kelamin->id_jenis ?>">
                                                    <?php echo $jenis_kelamin->jenis ?>
                                                </option>
                                                    <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="asal_sekolah"
                                            placeholder="Asal Sekolah" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Pilihan Sekolah</label>
                                            <select class="custom-select" name="pilihan_id_pilihan" required>
                                                <option selected>Open this select menu</option>
                                                    <?php 
                                                    foreach($pilihan as $pilihan_sekolah){
                                                    ?>
                                                <option value="<?php echo $pilihan_sekolah->id_pilihan ?>">
                                                        <?php echo $pilihan_sekolah->pilihan ?>
                                                </option>
                                                    <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="tempat_lahir"
                                            placeholder="Tempat Lahir" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control form-control-user" name="tanggal_lahir"
                                            placeholder="Tanggal Lahir" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
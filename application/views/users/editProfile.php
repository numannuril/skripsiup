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
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img style="width:4cm; height:3cm;" src="<?php echo base_url('uploads/Pas Foto/' . $calon_siswa->pas_foto); ?>"></span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $calon_siswa->nama_calon; ?></h4>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form action="<?php echo base_url() ?>index.php/users/profile/simpan" method="POST">
                   
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input type="hidden" name="id_calon" value="<?php echo $this->session->userdata('id_calon'); ?>">
                              <input class="form-control" type="text" name="name"  value="<?php echo $calon_siswa->nama_calon; ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>NISN</label>
                              <input class="form-control" type="text" name="username" value="<?php echo $calon_siswa->nisn; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Tempat Lahir</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->tempat_lahir; ?>">
                            </div>
                            <div class="form-group">
                              <label>No Handphone</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->no_hp; ?>">
                            </div>
                            <div class="form-group">
                              <label>Asal Sekolah</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->asal_sekolah; ?>">
                            </div>
                            <div class="form-group">
                              <label>Ukuran Pakaian</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->ukuran_pakaian; ?>">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label>Pilihan Sekolah</label>
                              <input class="form-control" type="text"  value="<?php echo $calon_siswa->pilihan_id_pilihan ?>">
                            </div>
                          </div>
                          <div class="form-group">
                          <select class="custom-select" name="ayah_nik_ayah" id="selectAyah" required>
                                                <option selected>NIK Ayah</option>
                                                    <?php 
                                                    foreach($ayah as $ayah){
                                                    ?>
                                                <option value="<?php echo $ayah->nik_ayah ?>">
                                                        <?php echo $ayah->nik_ayah ?>
                                                </option>
                                                    <?php } ?>
                                            </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="ibu_nik_ibu" id="selectIbu" required>
                                                <option selected>NIK Ibu</option>
                                                    <?php 
                                                    foreach($ibu as $ibu){
                                                    ?>
                                                <option value="<?php echo $ibu->nik_ibu ?>">
                                                        <?php echo $ibu->nik_ibu ?>
                                                </option>
                                                    <?php } ?>
                                            </select>
                            </div>
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

<div class="row">
    <div class="col d-flex justify-content-end">
        <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</div>
</form>
              </div>
            </div>
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
            <script>
    // Get references to the select elements
    const selectAyah = document.getElementById('selectAyah');
    const selectIbu = document.getElementById('selectIbu');

    // Add event listeners to the select elements
    selectAyah.addEventListener('change', displayAyahData);
    selectIbu.addEventListener('change', displayIbuData);

    // Function to display data for Ayah
    function displayAyahData() {
    // Get the selected option value
    const selectedAyahNik = selectAyah.value;
    console.log(selectedAyahNik);

    fetch(`http://localhost/psb/users/profile/getAyahData/${selectedAyahNik}`) // Perhatikan penggunaan backtick (`) di sini
    .then(response => response.json())
    .then(ayahData => {
        document.querySelector('[name="nama_ayah"]').value = ayahData.nama_ayah;
        document.querySelector('[name="nik_ayah"]').value = ayahData.nik_ayah;
        document.querySelector('[name="no_hp_ayah"]').value = ayahData.no_hp_ayah;
        document.querySelector('[name="email_ayah"]').value = ayahData.email_ayah;
        document.querySelector('[name="alamat_ayah"]').value = ayahData.alamat_ayah;
        document.querySelector('[name="pekerjaan_ayah_id_pekerjaan"]').value = ayahData.pekerjaan_ayah_id_pekerjaan;
        // ... Update other fields for Ayah data ...
    })
    .catch(error => {
        console.error('Error fetching Ayah data:', error);
    });
    // ... Update other fields for Ayah data ...
}


    // Function to display data for Ibu
    function displayIbuData() {
        // Get the selected option value
        const selectedIbuNik = selectIbu.value;

        fetch(`http://localhost/psb/users/profile/getIbuData/${selectedIbuNik}`) // Ganti dengan URL endpoint yang sesuai
        .then(response => response.json())
        .then(ibuData => {
            document.querySelector('[name="nama_ibu"]').value = ibuData.nama_ibu;
            document.querySelector('[name="nik_ibu"]').value = ibuData.nik_ibu;
            document.querySelector('[name="no_hp_ibu"]').value = ibuData.no_hp_ibu;
            document.querySelector('[name="email_ibu"]').value = ibuData.email_ibu;
            document.querySelector('[name="alamat_ibu"]').value = ibuData.alamat_ibu;
            document.querySelector('[name="pekerjaan_ibu_id_pekerjaan"]').value = ibuData.pekerjaan_ibu_id_pekerjaan;
            // ... Update other fields for Ibu data ...
        })
        .catch(error => {
            console.error('Error fetching Ibu data:', error);
        });
        // ... Update other fields for Ibu data ...
    }
</script>

</body>

</html>
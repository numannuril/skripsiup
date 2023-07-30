<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
    /* CSS untuk menambahkan margin atas pada div container */
    .container {
      margin-top: 50px; /* Sesuaikan nilai margin-top sesuai dengan kebutuhan Anda */
    }
  </style>
    <title>Pendaftran Selesai</title>
</head>
<body>
<div class="container d-flex justify-content-center">
  <div class="card">
    <h5 class="card-header">Pendaftaran Selesai</h5>
    <div class="card-body">
      <h5 class="card-title">Proses Pendaftaran Selesai. Data Pendaftar akan diproses oleh Admin Dan Menunggu
        Konfirmasi dari Admin
      </h5>
      <p class="card-text">Hubungi Admin:</p>
      <ul>
        <li>admin 1 : 085962883664 </li>
        <li>admin 2 : 085741114138</li>
      </ul>
      <a href="<?php echo base_url('sukses/logout'); ?>" class="btn btn-primary">Selanjutnya</a>
    </div>
  </div>
</div>

</body>
</html>
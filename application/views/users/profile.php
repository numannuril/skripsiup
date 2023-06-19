<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lengkapi Data Santri Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Lengkapi Data Santri Baru</h1>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nisn=input($_POST["nisn"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $no_hp =input ($_POST["no_hp"]);
        $alamat=input($_POST["alamat"]);
        $desa =input ($_POST["desa"]);
        $provinsi=input($_POST["kecamatan"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["provinsi"]);
        $asal_sekolah =input ($_POST["asal_sekolah"]);
        $ukuran_seragam=input($_POST["ukuran_seragam"]);
        $jk =input ($_POST["jk"]);
        $agama =input ($_POST["agama"]);
        $pilihan_sekolah=input($_POST["pilihan_sekolah"]);
        $foto =input ($_POST["foto"]);

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaraan (nama,nisn,tempat_lahir,tanggal_lahir,no_hp,alamat,desa,kecamatan,kabupaten,provinsi,asal_sekolah, ukuran_seragam,jk,agama,pilihan_sekolah,foto) values
		(,'$nama',$nisn,','$email'$username',$password,'$tempat_lahir','$tanggal_lahir',$no_hp','$alamat','$desa','$provinsi','$kabupaten','$kecamatan','$asal_sekolah'$ukuran_seragam','$jk','$agama',$pilihan_sekolah','$foto)";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
    }
    ?>
    <form id="form" method="post">
        
        <div class="alert alert-primary">
            <strong>Data Diri</strong>
        </div>
            
        
        
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
        
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Nomor Identitas (NISN):</label>
                        <input type="text" name="nisn" class="form-control" placeholder="Masukan Nomor NISN">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                </div>
            </div>
        </div>
                </div>
            </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>No Hp:</label>
                        <input type="text" name="No_hp" class="form-control" placeholder="Masukan No Hp">    
                   </div>
                </div>
                <div class="col-sm">
                <div class="form-group">
                    <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control" placeholder="Upload foto">    
                   </div>
                </div>
            </div>

        <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                    <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Desa:</label>
                        <input type="text" name="desa" class="form-control" placeholder="Masukan Nama Desa">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Kecamatan:</label>
                        <input type="text" name="Kecamatan" class="form-control" placeholder="Masukan Nama Kecamatan">    
                   </div>
                </div>
            </div>
            <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Kabupaten:</label>
                        <input type="text" name="kabupaten" class="form-control" placeholder="Masukan Nama Kabupaten">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Provinsi:</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Nama Provinsi">    
                   </div>
                </div>
            </div>                     
    <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                </div>
            </div>
            
    </div>

        <div class="alert alert-primary">
            <strong>Data Pendidikan</strong>
        </div>
        
        <div class="col-sm">
            <div class="form-group">
                <label>Ukuran_Seragam:</label>
                    <select class="form-control" name="agama">
                        <option>Pilih</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">Xl</option>
                        <option value="XXL">XXL</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
            </div>
        </div>
        <div class="col-sm">
                <div class="form-group">
                    <label>Asal Sekolah:</label>
                        <input type="text" name="asal sekolah" class="form-control" placeholder="Masukan asal sekolah">
                </div>
            </div>

        <div class="col-sm">
            <div class="form-group">
                <label>Pilihan_Sekolah:</label>
                    <select class="form-control" name="agama">
                        <option>Pilih</option>
                        <option value="Mts putra 1">Mts Putra 1</option>
                        <option value="Mts putra 2">Mts Putra2</option>
                        <option value="Mts Putri 3">Mts Putri 3</option>
                        <option value="Manu Putra">MANU Putra</option>
                        <option value="Manu Putri">MANU Putri</option>
                        <option value="MAN">MAN 3</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>
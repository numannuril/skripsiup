<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PSB Online</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <img class="navbar-brand" style="height: 70px;" src="assets/img/BUNTET PESANTREN LOGO.png" alt="..." />
                <a class="navbar-brand" href="#!">PSB ONLINE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register'); ?>">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <img class="navbar-brand" style="height: 400px;" src="assets/img/BUNTET PESANTREN LOGO.png" alt="..." />
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-3 fw-bolder text-white mb-2">Pendaftaran Santri Baru </h1>
                            <h1 class="display-4 fw-bolder text-white mb-2">Al-Kautsar Buntet Pesantren </h1> 
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="<?php echo base_url('register'); ?>">Daftar</a>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" >
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                        <h1 class="fw-bolder">Sejarah Buntet Pesantren</h2>
                        <p class="display-7 text-black mb-2">Buntet Pesantren yang kita kenal sekarang ini, merupakan salah satu pesantren tertua di Indonesia, berdiri sejak abad 18 M dibangun oleh Mufti Keraton Cirebon, Mbah Muqoyim yang tidak mau kompromi dengan Belanda. Dengan penolakan itu, Mbah Muqoyim lebih memilih tinggal di luar tembok istana dan menjadi guru kemudian mendirikan pesantren yang kini dikenal dengan Buntet Pesantren.
                        Tempat yang pertama kali dijadikan sebagai pondok pesantren letaknya di Desa Bulak kurang lebih 1/2 km dari perkampungan Pesantren yang sekarang. Sebagai buktinya di Desa Bulak tersebut terdapat peninggalan Mbah Muqoyyim berupa situs makan santri yang sampai sekarang masih utuh.
                        Pondok Buntet Pesantren bersifat tradisional dan modern, dikatakan modern karena mengadopsi sistem sekolah modern seperti Madrasah Ibtidaiyah hingga perguruan tinggi. Adapun tradisional, dikarenakan pondok Buntet ini terus mengkaji kitab-kitrab salafussholeh yang banyak mengupas 
                        seputar Al Quran, Hadits, Tafsir, Balaghoh, Ilmu gramatika bahasa Arab, dan karya-karya Akhlak maupun tasawuf dan fiqh dari para ulama terdahulu..</p>

                      
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                        <h1 class="fw-bolder">Alur Pendaftaran Online</h2>
                </div>
                        <!-- <div class="card-deck"> -->
                            <div class="card">
                                <div class="hijau-bar text-center">1</div>
                              <div class="card-body">
                                <h5 class="card-title">Pembuatan Akun</h5>
                                <p class="card-text">Mengisi identitas calon peserta didik sekaligus pembuatan akun untuk mendapatkan Nomor Registrasi..</p>
                              </div>
                            </div><br>
                            <div class="card">
                                <div class="hijau-bar text-center">2</div>
                              <div class="card-body">
                                <h5 class="card-title">administrasi pendaftaran</h5>
                                <p class="card-text">Sebelum bisa mengisi formulir, calon santri/orangtua harus membayar biaya pendaftaran melalui transfer bank sebesar Rp 100.000 .</p>
                              </div>
                            </div><br>
                            <div class="card ">
                                <div class="hijau-bar text-center">3</div>
                              <div class="card-body">
                                <h5 class="card-title">Konfirmasi Pendaftaran</h5>
                                <p class="card-text">Setelah melakukan transfer pembayaran agar melakukan konfirmasi pembayaran melalui Whatsapp CS Panitia PSB:
                                                        CS 1 :  0812 3377 1715   |   CS 2 :  0812 3377 1716 dengan mengirim foto bukti transfer, nama lengkap calon santri, username/no HP/email akun pendaftaran. Tunggu balasan dari panitia.</p>
                              </div>
                            </div><br>
                            <div class="card">
                                <div class="hijau-bar text-center">4</div>
                              <div class="card-body">
                                <h5 class="card-title">Validasi Pembayaran</h5>
                                <p class="card-text">Panitia melakukan validasi pembayaran pada jam kerja pukul 07:30 WIB s/d 15:00 WIB. Apabila pembayaran berhasil divalidasi maka panitia akan membalas pesan WA dan membuka akses pengisian formulir pada akun pendaftaran calon santri.</p>
                              </div>
                            </div><br>
                            <div class="card ">
                                <div class="hijau-bar text-center">5</div>
                              <div class="card-body">
                                <h5 class="card-title">Pengisian Data Diri</h5>
                                <p class="card-text">Calon santri login/masuk ke akun pendaftaran untuk mengisi formulir secara lengkap.</p>
                              </div>
                            </div><br>
                            <div class="card">
                                <div class="hijau-bar text-center">6</div>
                              <div class="card-body">
                                <h5 class="card-title">Mengunggah Berkas</h5>
                                <p class="card-text">Mengunggah berkas persyaratan dan berkas pendukung lainnya yang berupa gambar / foto..</p>
                              </div>
                            </div><br>
                            <div class="card">
                                <div class="hijau-bar text-center">7</div>
                                <div class="card-body">
                                  <h5 class="card-title">Pembayaran </h5>
                                  <p class="card-text">Melakukan pembayaran biaya pendaftaran sesuai pendidikan yang telah dipilih..</p>
                                </div>
                              </div><br>
                          <!-- </div> -->
                            
        </section>
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                        <h2 class="fw-bolder">Syarat Pendaftaran</h2>
                            <p class="display-7 text-black mb-2">Untuk memenuhi persyaratan pendaftaran santri baru, perlu beberapa berkas
                                yang harus disiapkan:</p>
                            </div>
                            <div class="display-7 text-black mb-2">
                                <ol>
                                    <li>Photo Copy Akta Kelahiran Peserta Didik</li>
                                    <li>Photo Copy KTP orang tua/wali</li>
                                    <p>sebanyak 3 lembar</p>
                                    <li>Photo Copy Kartu Keluarga (KK)</li>
                                    <p>sebanyak 3 lembar</p>
                                    <li>Photo Copy STL/SKHUN/Ijazah</li>
                                    <p>sebanyak 3 lembar</p>
                                    <li>Surat Keterangan Sehat dari Fasilitas Kesehatan</li>                                    </li>
                                  </ol>
</div>
                            </div>
                        </section>
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                         <h1 class="fw-bolder">Alur Penyerahan Santri</h2>
                         </div>
                            <div class="card-deck">
                                <div class="card">
                                    <div class="hijau-bar text-center">1</div>
                                  <div class="card-body">
                                    <h5 class="card-title">Checkup / Periksa Kesehatan</h5>
                                    <p class="card-text">Pemeriksaan kesehatan dari calon peserta didik oleh petugas klinik Al-Kautsar.</p>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="hijau-bar text-center">2</div>
                                  <div class="card-body">
                                    <h5 class="card-title">Konfirmasi Nomor Registrasi</h5>
                                    <p class="card-text">Menyerahkan Nomor Registrasi dan bukti pendaftaran online kepada petugas PSB.</p>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="hijau-bar text-center">3</div>
                                  <div class="card-body">
                                    <h5 class="card-title">Ikrar Santri</h5>
                                    <p class="card-text">Melakukan Ikrar Santri dan kesediaan mengikuti aturan yang ditetapkan oleh Pondok Pesantren Buntet .</p>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="hijau-bar text-center">4</div>
                                    <div class="card-body">
                                      <h5 class="card-title">Pengambilan Seragam </h5>
                                      <p class="card-text">Pengambilan seragam sesuai dengan pemilihan ukuran seragam yang telah dipilih oleh pendaftar.</p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="hijau-bar text-center">5</div>
                                    <div class="card-body">
                                      <h5 class="card-title">Sowan Pengasuh</h5>
                                      <p class="card-text">Penyerahan calon peserta didik oleh orangtua / wali kepada pengasuh</p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="hijau-bar text-center">6</div>
                                    <div class="card-body">
                                      <h5 class="card-title">Asrama Santri</h5>
                                      <p class="card-text">Santri baru menempati asrama yang telah ditetepkan oleh pengurus.</p>
                                    </div>
                                  </div>
                            </div>
                                    </div>
                                           </div>
                                                </section>         
       <section class="py-5 border-bottom">
                  <div class="container px-5 my-5">
                     <div class="text-center mb-5">
                         <h1 class="fw-bolder">Ekstrakulikuler Santri</h2>
                         </div>        
                        </div> 
                        <div class="container px-5">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 order-lg-2">
                                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/kotbah.jpg" alt="..." /></div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="p-5">
                                        <h2 class="display-4">Khitobahan</h2>
                                        <p>Khitobahan adalah ketika seorang santri dijadwalkan untuk memberikan 
                                            pidato dihadapan santri lain, tujuan diadakan kegiatan ini supaya santri 
                                            bisa melatih mental untuk berbicara dimuka umum serta bisa mempersiapkan 
                                            apa yang harus dia lakukan kedepannya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container px-5">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/Kegiatan2.jpeg" alt="..." /></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h2 class="display-4">Bahsul Masail</h2>
                                        <p>kegiatan ini merupakan salah satu kegiatan dimana santri 
                                            mencari jawaban dengan soal-soal yang sudah diberikan oleh 
                                            panitia berdasarkan referensi kitab yang bisa dipertanggung jawabkan keilmuannya..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container px-5">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 order-lg-2">
                                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/musyawaroh.jpg" alt="..." /></div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="p-5">
                                        <h2 class="display-4">Bahtsul Kutub</h2>
                                        <p>-Bahtsul kutub adalah kegiatan santri untuk membahas kitab secara bersama-sama 
                                            mulai dari makna kitab sampai terhadap masalah-masalah atau pertanyaan yang 
                                            muncul dari teks kitab yang sedang dikaji.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </section>   
        <!-- Pricing section-->
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

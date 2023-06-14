<?php
include 'config/connection.php';

$sql = "SELECT * FROM produk";
$query = mysqli_query($con, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    /> -->
    <title>JM Tailor</title>

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,500&display=swap"
      rel="stylesheet"
    />

    <!--icon-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--style-->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- <script src="fontawesome/js/all.js"></script></mark> -->
  </head>

  <body>
    <header>
      <!--navbar start-->
      <nav class="navbar">
        <div class="logo">
          <img src="assets/img/jm__1_-removebg-preview.png" alt="logo" />
        </div>

        <div class="navbar-nav">
          <a href="#beranda">Beranda</a>
          <a href="#tentang kami">Tentang Kami</a>
          <a href="#layanan">Layanan</a>
          <a href="#produk">Produk Kami</a>
          <a href="#kontak">Kontak</a>
        </div>

        <div class="navbar-extra">
          <a href="#" id="search"><i data-feather="search"></i></a>
          <a href="#" id="produk-menu"><i data-feather="menu"></i></a>
        </div>
      </nav>
      <!-- navbar end -->

      <!-- landing section start -->
      <section class="landing" id="beranda">
        <main class="content">
          <h1>JM Tailor</h1>
          <p>Kualitas Terbaik, Kualitas Nomor 1</p>
          <a href="#" class="cta">Buat Janji</a>
        </main>
      </section>
      <!-- landing section end -->

      <!-- tentang start -->
      <section class="tentang" id="tentang kami">
        <h2><span>Tentang</span>Kami</h2>

        <div class="row">
          <div class="tentang-img">
            <img src="assets/img/img-tentang3.jpg" alt="Tentang Kami" />
          </div>

          <div class="content">
            <h3>JM Tailor</h3>
            <p>
              JM Tailor usaha yang di mulai oleh Bapak Tji Khiong dari tahun
              2012. usaha ini dipilih karena Bapak Tji Khiong memiliki
              keterampilan dalam menjahit.
            </p>

            <p>
              Awal mulainya usaha ini, Bapak Tji Khiong mempromosikan hasil
              jahitanya ke toko-toko dan pada awalnya jahitannya diragukan pihak
              toko namun seiring berjalannya usaha ini, jahitannya mulai
              dipercayai pihak toko karena kualitas jahitannya bagus dan sangat
              tepat waktu.
            </p>
            <p>
              Bapak Tji Khiong kini telah bekerja sama dengan puluhan toko besar
              baik di kota Pontianak dan luar pontianak. karena pekerjaan yang
              semakin banyak JM Tailor sudah memiliki enam orang karyawan. Dan
              JM Tailor sangat memperhatikan kualitas produk dan ketepatan
              waktu.
            </p>
            <a href="#" class="ctn">Selanjutnya →</a>
          </div>
        </div>
      </section>
      <!-- tentang end -->

      <!-- layanan start -->
      <section class="layanan" id="layanan">
        <h2><span>Layanan</span>Kami</h2>

        <div class="row">
          <div class="layanan-card">
            <img
              src="assets/img/penjahitan3-img.jpg"
              alt="penjahitan"
              class="layanan-card-img"
            />
            <h3 class="layanan-card-judul">-Penjahitan-</h3>
            <a href="#" class="ctn">Hubungi</a>
          </div>

          <div class="layanan-card">
            <img
              src="assets/img/permak2-img.jpg"
              alt="permak"
              class="layanan-card-img"
            />
            <h3 class="layanan-card-judul">-Permak-</h3>
            <a href="#" class="ctn">Hubungi</a>
          </div>
        </div>
      </section>
      <!-- layanan end -->

      <!-- produk menu -->
      <section class="produk" id="produk">
        <h2><span>Produk</span>Kami</h2>

        <div class="row">
          <?php
            while ($row = mysqli_fetch_assoc($query)) {
          ?>
            <div class="produk-card col-3">
              <img src="<?= $row['image'] ?>" alt="jas 1" class="produk-card-img" />
              <h3 class="produk-card-judul">- <?= $row['nama'] ?> -</h3>
            </div>
          <?php 
            }
          ?>
          
        </div>
      </section>

      <!-- kontak -->
      <section class="kontak" id="kontak">
        <h2><span>Kontak</span>Kami</h2>

        <div class="row">
          <div class="kontak col-4">
            <img src="assets/img/icon/smartphone-call.png" />
            <p>phone- +6285622662028</p>
            <p>phone- +6282155243627</p>
          </div>

          <div class="kontak col-4">
            <img src="assets/img/icon/location.png" />
            <p>
              Jl. Parit Nomor Dua, <br />
              Komp. Bumi Indah Permai, No. B26
            </p>
          </div>

          <div class="kontak col-4">
            <img src="assets/img/icon/mail.png" />
            <p>ameu1505@gmail.com</p>
            <p>jimi@itbss.ac.id</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <iframe
              width="100%"
              height="300px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4535068521906!2d109.38022119193067!3d-0.08405010000000204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d50a0d3dfa021%3A0x53e7adf987b885b6!2sBumi%20Indah%20Permai!5e0!3m2!1sid!2sid!4v1680422248767!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>

        <div class="medsos">
          <a
            href="https://api.whatsapp.com/send/?phone=085822662028&text&type=phone_number&app_absent=0"
            target="blank"
            ><img src="assets/img/icon/whatsapp.png" />
          </a>
          <a
            href="https://www.facebook.com/people/Jmtailor-Tailor/pfbid02NtavuRGiBHG4dCLq8cCvzUxo7fpQDT4NkQGdwHtk6hZeagrYcmEgPjthsv3k9VChl/?mibextid=ZbWKwL"
            target="blank"
            ><img src="assets/img/icon/facebook.png" />
          </a>
          <a href="https://www.instagram.com/ameu15_/" target="blank"
            ><img src="assets/img/icon/instagram.png" />
          </a>
        </div>

        <footer>
          <div class="links">
            <a href="#beranda">Beranda</a>
            <a href="#tentang kami">Tentang Kami</a>
            <a href="#layanan">Layanan</a>
            <a href="#produk">Produk Kami</a>
            <a href="#kontak">Kontak</a>
          </div>

          <div class="credit">
            <p>Created by <a href="">jm tailor</a>. | &copy; 2023.</p>
          </div>
        </footer>
      </section>
    </header>

    <!--tentang-->
    <!-- <section class="tentang kami">
      <div class="tentang">
      <h2>SEJARAH</h2>
      <img src="https://img.freepik.com/free-photo/classy-man-tailor-shop_53876-24895.jpg?w=740&t=st=1678954027~exp=1678954627~hmac=c02ed8b4f2e5d79d929ef0c9bf4bcc18dc4e35667d26199fe216a69163fe48d4" alt="img tentang">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, quaerat vitae dolorum perferendis ea architecto velit odit nobis alias mollitia nemo quibusdam necessitatibus minima possimus facilis, corporis, ducimus voluptatem tempore! Ex consequatur quidem quae vero enim cumque doloribus eos distinctio ut, amet, eius est facilis ipsam tenetur quas asperiores sit?</p>
      </div>
    </section> -->

    <!--layanan-->
    <!-- <section class="layanan">
      <div class="judul">
        <h3>LAYANAN KAMI</h3>
        <div class="line"></div>
      </div>

      <div class="row">
        <div class="col">
          <img src="https://img.freepik.com/free-photo/handsome-bearded-tailor-working-with-cloth-samples-sewing-workshop_613910-6778.jpg?w=740&t=st=1678959086~exp=1678959686~hmac=deb312fe6e6ce4cc2bd8785d6010c04f646d13c906da9c111d861f1650d37dac" alt="">
          <h4>Pembuatan Jas</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta provident placeat enim libero corporis velit facilis nihil cupiditate nostrum voluptatum!</p>
          <a href="#" class="ctn">Hubungi</a>
        </div>
        <div class="col">
          <img src="https://img.freepik.com/free-photo/woman-doing-jeans-patchwork-using-sewing-machine-home-diy-sewing-concept_1150-6480.jpg?w=740&t=st=1678960117~exp=1678960717~hmac=4fa194a83ad466588c6fb770c780893dbadb9aed0aa027b38c039c36666e8d5c" alt="">
          <h4>Permak Jas</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta provident placeat enim libero corporis velit facilis nihil cupiditate nostrum voluptatum!</p>
          <a href="#" class="ctn">Hubungi</a>
        </div>
      </div>
    </section> -->

    <!--icon-->
    <script>
      feather.replace();
    </script>

    <!--javascript-->
    <script src="js/script.js"></script>
  </body>
</html>

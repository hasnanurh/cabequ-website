<?php
include "koneksi.php";
$idpenyakit = $_GET["idpenyakit"];
$qpenyakit = "select * from penyakit where idpenyakit = $idpenyakit";
$data_penyakit = $conn->query($qpenyakit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- JQuery -->
  <style>
    .no-js #loader {
      display: none;
    }

    .js #loader {
      display: block;
      position: absolute;
      left: 100px;
      top: 0;
    }

    .se-pre-con {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(assets/preloader.gif) center no-repeat #fff;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script>
    // Wait for window load
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");
    });
  </script>

  <title>CABEQU</title>
  <link rel="icon" href="assets/logo2.png" />
</head>

<body>
  <div class="se-pre-con"></div>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #3a595c">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" alt="" width="197" height="54" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="diagnosis.php">Diagnosis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about_chili.php">About Chilli</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  foreach ($data_penyakit as $index => $value) {
  ?>

  <main>
    <div class="detail">
      <h3 style="padding-top: 100px; text-align: start">Penyakit <?php echo $value['namapenyakit'] ?></h3>
      <img src="assets/tanaman1.png" style="width: 30%" />
      <h5>Nama Latin</h5>
      <p><?php echo $value['namapenyakit'] ?></p>

      <h5>Gejala</h5>
      <p>Warna jaringan akar coklat, Akar membusuk, Warna jaringan batang coklat, Buah Kecil dan gugur</p>

      <h5>Kultur Tanah</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa sit enim lacinia auctor. Ut dolor eu lorem facilisi pretium ac nunc placerat. Nec tempor arcu sit ipsum, dolor. Pellentesque adipiscing interdum eros maecenas ultrices
        eget purus sed. Volutpat sit cursus volutpat dolor ut aliquet
      </p>
    </div>
  </main>
  
  <?php
  }
  ?>
  <footer class="footer">
    <p>CABEQU &#169; 2021</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
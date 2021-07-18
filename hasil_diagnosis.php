<?php
include "koneksi.php";
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

  <title>CABEQU</title>
  <link rel="icon" href="assets/logo2.png" />
</head>

<body>
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

  <!-- Description-->
  <div class="modal-body" style="padding: 100px 50px">
    <h2 style="color: #000000">Hasil Diagnosis</h2>
    <!-- <p style="color: #000000; text-align: justify">
        Cabai atau cabai merah atau lombok adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia
        Tenggara sebagai penguat rasa makanan. Cabai merah besar (Capsicum annuum L.) merupakan salah satu jenis sayuran yang memilki nilai ekonomi yang tinggi. Cabai mengandung berbagai macam senyawa yang berguna bagi kesehatan manusia.
        Cabai mengandung antioksidan yang berfungsi untuk menjaga tubuh dari serangan radikal bebas. Kandungan terbesar antioksidan ini adalah pada cabai hijau. Cabai juga mengandung Lasparaginase dan Capsaicin yang berperan sebagai zat
        antikanker. Cabai (Capsicum annum L) merupakan salah satu komoditas sayuran yang banyak dibudidayakan oleh petani di Indonesia karena memiliki harga jual yang tinggi dan memiliki beberapa manfaat kesehatan yang salah satunya adalah
        zat capsaicin yang berfungsi dalam mengendalikan penyakit kanker. Selain itu kandungan vitamin C yang cukup tinggi pada cabai dapat memenuhi kebutuhan harian setiap orang, namun harus dikonsumsi secukupnya untuk menghindari nyeri
        lambung.
      </p> -->

    <div class="panel panel-info">
      <div class="panel-heading">HASIL DIAGNOSA</div>
      <div class="panel-body">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID PENYAKIT</th>
                <th>Nama Penyakit</th>
                <th>Detail</th>
              </tr>
            </thead>
            <?php
            if (isset($_POST['submit'])) {
              $gejala = $_POST['gejala'];
              $jumlah_dipilih = count($gejala);
              for ($x = 0; $x < $jumlah_dipilih; $x++) {
                $tampil = "select DISTINCT p.idpenyakit, p.namapenyakit from basispengetahuan b, penyakit p where b.namagejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                $result = $conn->query($tampil);
                $hasil  = mysqli_fetch_array($result);
              }
              echo "
                           <tr>  
        			             <td>" . $x . "</td>
                                 <td>" . $hasil['idpenyakit'] . "</td>
					             <td>" . $hasil['namapenyakit'] . "</td>  
                                 <td><a href=\"detail.php?idpenyakit=" . $hasil['idpenyakit'] . "\"><img src='assets/magnifying.png' style='width: 10%;'></a></td>
        		          </tr>   
                               
                               ";
            }

            ?>
          </table>
        </div>
      </div>
    </div>

  </div>
  <div class="button" style="padding-bottom: 100px">
    <div class="modal-body" style="padding: 0px 50px">
      <div>
        <a class="btn btn-light" href="detail.php" role="button">DETAIL</a>
      </div>
    </div>
  </div>
  <footer class="footer">
    <p>CABEQU &#169; 2021</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
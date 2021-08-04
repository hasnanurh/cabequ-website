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
            <a class="nav-link active" aria-current="page" href="artikel.php">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about_chili.php">About Chilli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin/home_admin.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Description-->
  <div class="modal-body" style="padding: 100px 50px">
    <h2 style="color: #000000">Hasil Diagnosis</h2>
    <div class="panel panel-info">
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
  <footer class="footer">
    <p>CABEQU &#169; 2021</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "koneksi.php";
$qdaun = "select * from gejala where organtanaman = 'Daun'";
$data_daun = $conn->query($qdaun);

$qbuah = "select * from gejala where organtanaman = 'Buah'";
$data_buah = $conn->query($qbuah);

$qbatang = "select * from gejala where organtanaman = 'Batang'";
$data_batang = $conn->query($qbatang);

$qakar = "select * from gejala where organtanaman = 'Akar'";
$data_akar = $conn->query($qakar);

$qbunga = "select * from gejala where organtanaman = 'Bunga'";
$data_bunga = $conn->query($qbunga);

$qbiji = "select * from gejala where organtanaman = 'Biji'";
$data_biji = $conn->query($qbiji);

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
  <link rel="stylesheet" href="css/diagnosis.css" />

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

  <!-- Judul -->

  <div class="modal-body" style="padding: 30px 50px"></div>

  <main class="p-5 mt-2">
    <h2 style="color: #000000">Diagnosis Tanaman Cabai</h2>
    <br />
    <p style="color: #000000">
      Diagnosis adalah identifikasi mengenai sesuatu. Diagnosis digunakan dalam medis, ilmu pengetahuan, teknik, bisnis, dll. Disusun menggunakan Sistem pakar metode forward chaining, Cabequ dapat menentukan kondisi tanaman cabai berdasarkan gejala-gejala yang diinputkan, sebagai dasar pengambilan keputusan medis untuk prognosis dan pengobatan.
    </p>
    <div class="feature mt-5 me-4">
      <form id="form2" name="form2" method="post" action="hasil_diagnosis.php">
        <div class="leaves">
          <h5>Daun</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qdaun);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>

            <?php
            foreach ($data_daun as $index => $value) {
            ?>

              <tr>
                <td><?php echo $value['namagejala'] ?></td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <div class="fruits mt-5">
          <h5>Buah</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qbuah);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
            <?php
            foreach ($data_buah as $index => $value) {
            ?>

              <tr>
                <td><?php echo $value['namagejala'] ?></td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <div class="rod mt-5">
          <h5>Batang</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qbatang);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
            <?php
            foreach ($data_batang as $index => $value) {
            ?>

              <tr>
                <td><?php echo $value['namagejala'] ?></td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <div class="root mt-5">
          <h5>Akar</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qakar);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>

            <?php
            foreach ($data_akar as $index => $value) {
            ?>

              <tr>
                <td><?php echo $value['namagejala'] ?></td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <div class="flower mt-5">
          <h5>Bunga</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qbunga);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
            <?php
            foreach ($data_bunga as $index => $value) {
            ?>

              <tr>
                <td><?php echo $value['namagejala'] ?></td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <div class="seed mt-5">
          <h5>Biji</h5>
          <table class="table ms-2 mt-4">
            <thead>
              <tr>
                <th scope="col">Ciri Penyakit</th>
                <th scope="col" class="text-end">Checklist</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = $conn->query($qbiji);
              while ($hasil = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td>
                    <?php echo "" . $hasil['namagejala'] . "<br>"; ?>
                  </td>
                  <td class="text-end">
                    <?php echo "<input type='checkbox' value='" . $hasil['namagejala'] . "' name='gejala[]' />" ?>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="button mt-5 text-center">
          <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="mt-4">
    <p>CABEQU &#169; 2021</p>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

  <script language="JavaScript" type="text/javascript">
    // $(document).ready(function() {
    //   $("#myBtn").click(function() {
    //     $("#myModal").modal();
    //   });
    // });

    function checkDiagnosa() {
      return confirm('Apakah sudah benar gejalanya?');
    }
  </script>
</body>

</html>
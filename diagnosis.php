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
      $(window).load(function () {
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
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse id autem minus neque sunt dolore natus officiis quas mollitia veniam. Fugit, nemo corrupti, ipsum, temporibus aut dolor officia doloribus quaerat optio eaque
        exercitationem dolorum at! Aliquam ipsa et earum unde odio voluptates velit, aspernatur, a fugiat laboriosam reprehenderit hic praesentium?
      </p>
      <div class="feature mt-5 me-4">
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
              <tr>
                <td>Daun Menguning</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Daun layu</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Terdapat bercak bulat dan kering pada daun</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Daun mengeriting</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Daun keriput</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
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
              <tr>
                <td>Buah kecil</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Buah membusuk</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Buah keriput</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Buah mengering</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Bercak kecil coklat kehitaman pada buah</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
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
              <tr>
                <td>Terdapat bercak pada batang</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Warna jaringan batang coklat</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Jaringan sekuler bawah batang kecoklatan</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Pucuk tanaman mati</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Tanaman menjadi keriput</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
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
              <tr>
                <td>Warna jaringan akar coklat</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Akar membusuk</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Akar menjadi Kecoklatan</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
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
              <tr>
                <td>Bunga dan Bakal buah berguguran</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Tunas dan bunga gugur</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
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
              <tr>
                <td>Biji yang terserang menjadi coklat</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
              <tr>
                <td>Biji yang terserang menjadi keriput</td>
                <td class="text-end"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="button mt-5 text-center">
        <a class="btn btn-light" href="hasil_diagnosis.php" role="button">CEK PENYAKIT</a>
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
  </body>
</html>

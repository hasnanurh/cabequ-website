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

    <header>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        <section class="jumbotron">
            <content>
                <article id="tentang">
                    <div class="gambar">
                        <img src="assets/cabe1.png" />
                    </div>
                    <div>
                        <div class="text">
                            <h2>Make chili plants healthy by diagnosing the problem</h2>
                            <p>
                                Cabai adalah buah dan tumbuhan anggota genus Capsicum. Sebagai salah komoditas sayuran
                                yang mendapat perhatian karena banyak dibutuhkan cabai tak luput dari banyak faktor yang
                                dapat membuatnya gagal panen seperti faktor
                                makhluk hidup yaitu serangga, bakteri dan virus. Cabequ akan membantu anda melakukan
                                diagnosaterhadap permasalahan pada tanaman cabai anda.
                            </p>
                        </div>
                        <div class="button">
                            <a class="btn btn-light" href="diagnosis.php" role="button">DIAGNOSIS</a>
                        </div>
                    </div>
                </article>
            </content>
        </section>
    </header>
    <main>
        <!-- Jumbotron -->
        <section class="jumbo2">
            <div class="container">
                <div class="d-flex bd-highlight mb-3">
                    <div class="col p-2 bd-highlight">
                        <img class="dok" src="assets/dokter1.png" alt="obat" />
                    </div>
                    <div class="col p-2 bd-highlight">
                        <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px">
                            <div class="ket p-2 bd-highlight">
                                <h4>Get a diagnosis of the problem</h4>
                            </div>
                            <div class="ket p-2 bd-highlight">
                                <p>Ayo cek gejala penyakit tanaman anda dan dapatkan hasil diagnosisnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex bd-highlight mb-3">
                    <div class="col p-2 bd-highlight">
                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px">
                            <div class="ket p-2 bd-highlight">
                                <h4>The system will provide drug suggestions</h4>
                            </div>
                            <div class="ket p-2 bd-highlight">
                                <p>Dapatkan Rekomendasi Obat yang sesuai dengan hasil diagnosis</p>
                            </div>
                        </div>
                    </div>

                    <div class="col p-2 bd-highlight d-flex justify-content-end">
                        <img class="dok" src="assets/dokter2.png" alt="dokter" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- Jumbo3 -->
        <section class="jumbo3">
            <h3>OUR TEAM</h3>
            <div id="card" class="container p-3">
                <div class="card" style="width: 18rem">
                    <img src="assets/uli.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title text-center">Uli Ahda Raihan</h5>
                        <p class="card-text text-center">18102034</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="assets/hasna.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title text-center">Hasna Nur Hanifah</h5>
                        <p class="card-text text-center">18102124</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem">
                    <img src="assets/puspa.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title text-center">Puspa Wahyuningtias</h5>
                        <p class="card-text text-center">18102137</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>CABEQU &#169; 2021</p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
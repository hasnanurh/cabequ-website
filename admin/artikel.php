<?php
session_start();
include "../koneksi.php";
$idArtikel = $_GET["id_artikel"];
$qartikel = "select * from artikel where id_artikel = $idArtikel";
$data_artikel = $conn->query($qartikel);

if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>
    <html>

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
                background: url(../assets/preloader.gif) center no-repeat #fff;
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
        <link rel="icon" href="../assets/logo2.png" />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a595c">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="../assets/logo.png" alt="" width="197" height="54" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../diagnosis.php">Diagnosis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../about_chili.php">About Chilli</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../login.php">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container" style="text-align: center;">
                <?php
                foreach ($data_artikel as $index => $value) {
                ?>
                    <h1 style="padding-top: 50px; padding-bottom:20px;"><?php echo $value['judul'] ?></h1>
                    <img src="../uploads/<?php echo $value['gambar'] ?>" style="max-width: 300px; padding-bottom:20px;">
                    <p style="color: black; text-align:justify; padding-bottom:20px; "><?php echo $value['isi'] ?></p>
                <?php
                }
                ?>
            </div>
        </main>
        <footer>
            <p>CABEQU &#169; 2021</p>
        </footer>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
    </body>

    </html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>
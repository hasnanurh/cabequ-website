<?php
session_start();
include "../koneksi.php";
$qartikel = "select * from artikel";
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
                                <a class="nav-link active" aria-current="page" href="home_admin.php">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="position-relative m-5">
                    <h3 class="position-absolute top-0 start-0">Hello, <?php echo $_SESSION['username']; ?></h3>
                    <a class="position-absolute top-0 start-100" href="logout.php"><button type="button" class="btn btn-sm btn-outline-danger">Logout</button></a>
                </div>
                <div class="add" style="padding-bottom: 20px; padding-top:100px;">
                    <a href="create.php"><button type="button" class="btn btn-sm btn-primary">Tambah Artikel</button></a>
                </div>

                <div class="row">
                    <?php
                    foreach ($data_artikel as $index => $value) {
                    ?>
                        <div class="col-md-4">

                            <div class="card shadow p-3 mb-4 bg-body" style="width: 18rem;">
                                <img src="../uploads/<?php echo $value['gambar']; ?>" class="card-img-top" style="height: 150px; width:max-content; border-radius:0;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo substr($value['judul'], 0, 50) ?></h5>
                                    <p class="card-text"><?php echo substr($value['isi'], 0, 70) ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="artikel.php?id_artikel=<?php echo $value['id_artikel'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                        <a href="update.php?id_artikel=<?php echo $value['id_artikel'] ?>"><button type="button" id="edit-detail" class="btn btn-sm btn-outline-primary">Edit</button></a>
                                        <a href="hapus.php?id_artikel=<?php echo $value['id_artikel'] ?>"><button type="button" id="delete-quote" class="btn btn-sm btn-outline-danger">Delete</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
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
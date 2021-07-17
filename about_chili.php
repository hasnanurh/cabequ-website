<?php
include "koneksi.php";
$qpenyakit = "select * from penyakit";
$data_penyakit = $conn->query($qpenyakit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

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
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>

	<title>CABEQU</title>
	<link rel="icon" href="assets/logo2.png">
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

	<!-- Description-->
	<div class="modal-body" style="padding:100px 50px;">
		<h2 style="color: #000000;">About Chili</h2>
		<p style="color: #000000;"><i>Capsicum annuum L</i></p>
		<p style="color: #000000; text-align: justify;">Cabai atau cabai merah atau lombok adalah buah dan tumbuhan anggota
			genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai
			bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan. Cabai merah besar (Capsicum annuum L.)
			merupakan salah satu jenis sayuran yang memilki nilai ekonomi yang tinggi. Cabai mengandung berbagai macam senyawa yang berguna
			bagi kesehatan manusia. Cabai mengandung antioksidan yang berfungsi untuk menjaga tubuh dari serangan radikal bebas.
			Kandungan terbesar antioksidan ini adalah pada cabai hijau. Cabai juga mengandung Lasparaginase dan Capsaicin yang berperan
			sebagai zat antikanker. Cabai (Capsicum annum L) merupakan salah satu komoditas sayuran yang banyak dibudidayakan oleh petani
			di Indonesia karena memiliki harga jual yang tinggi dan memiliki beberapa manfaat kesehatan yang salah satunya adalah zat capsaicin
			yang berfungsi dalam mengendalikan penyakit kanker. Selain itu kandungan vitamin C yang cukup tinggi pada cabai dapat memenuhi
			kebutuhan harian setiap orang, namun harus dikonsumsi secukupnya untuk menghindari nyeri lambung.</p>
	</div>

	<div class="container-fluid text-center">
		<div class="row content">
			<br>
			<div class="box-body table-responsive p-2">
				<table id="example1" class="table table-bordered table-striped">
					<div class="modal-body" style="padding:10px 100px;">
						<thead>
							<tr>
								<th>ID Penyakit</th>
								<th>Nama Penyakit</th>
								<th>Detail</th>
							</tr>
						</thead>
						<?php
						foreach ($data_penyakit as $index => $value) {
						?>

							<tr>
								<td><?php echo $value['idpenyakit'] ?></td>
								<td><?php echo $value['namapenyakit'] ?></td>
								<td>
									<a href="detail.php?idpenyakit=<?php echo $value['idpenyakit'] ?>">
										<img src="assets/magnifying.png" style="width: 10%;">
									</a>
								</td>
							</tr>

						<?php
						}
						?>

						<!-- <tr>
							<td>1</td>
							<td>P001</td>
							<td>Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>P002</td>
							<td>Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>P003</td>
							<td>Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>P004</td>
							<td>Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>P005</td>
							<td>Busuk Buah (Fruit rot) </td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>P006</td>
							<td>Virus Kerupuk</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>P007</td>
							<td>Virus Mosaik</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>P008</td>
							<td>Virus Kuning</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>P009</td>
							<td>Tungau Kuning (Polyphagotarsonemus latus Banks) </td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>P010</td>
							<td>Trips (Thrips parvispinus Karny) </td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>P011</td>
							<td>Kutu Daun Persik (Myzus persicae Sulz.)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>12</td>
							<td>P012</td>
							<td>Kutu Kebul (Bemisia tabaci) </td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>13</td>
							<td>P013</td>
							<td>Ulat Grayak (Spodoptera litura F.)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>14</td>
							<td>P014</td>
							<td>Ulat Buah (Helicoverpa armigera Hubner) </td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr>
						<tr>
							<td>15</td>
							<td>P015</td>
							<td>Lalat Buah (Bactrocera sp)</td>
							<td>
								<a href="detail.php">
									<img src="assets/magnifying.png" style="width: 10%;">
								</a>
							</td>
						</tr> -->
					</div>
				</table><br><br><br><br><br>
			</div>
		</div>
	</div>
	</div>
	<footer class="container-fluid text-center">
		<p>CABEQU &#169; 2021 </p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
<?php
	include('koneksi.php');
	include('library.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="content"> 
			<nav class="navbar navbar-inverse">
				<div id="navbar">
					<ul class="dropDownMenu">
						<li><a href="./">Beranda</a></li>
						<li><a href="#">Proses Data</a>
						<ul>
							<li><a href="distribusi_data.php">Distribusi Karyawan</a></li>							
						</ul>
						</li>
						<li><a href="#">Master Data</a>
						<ul>
							<li><a href="karyawan_data.php">Data Karyawan</a></li>
							<li><a href="gudang_data.php">Data Gudang</a></li>
						</ul>
						</li>
						<li>
							<a href="#">Laporan</a>
							<ul>
								<li><a href="karyawan_cetak.php">Cetak Data Karyawan</a></li>
								<li><a href="gudang_cetak.php">Cetak Data Gudang</a></li>
							</ul>
						</li>						
						<li><a href="tentang-saya.php">Tentang Saya</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="content">
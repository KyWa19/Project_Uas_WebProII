<?php 
	require_once('_functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rumah Laundry | Dashboard</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				</div>
			<ul class="nav-menu">
				<li>
					<span>Pilihan Menu</span>
					<ul class="dropdown-menu">
						<li><a href="<?=url('index.php')?>">Home</a></li>
						<li><a href="<?=url('paket/paket.php')?>">Daftar Paket</a></li>
						<li><a href="<?=url('karyawan/karyawan.php')?>">Daftar Karyawan</a></li>
						<li><a href="<?=url('riwayat_transaksi/riwayat.php')?>">Riwayat Transaksi</a></li>
						<li><a href="<?=url('about.php')?>">Tentang Kami</a></li>
						<li><a href="<?=url('logout.php')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>	
	</header>
</body>
</html>
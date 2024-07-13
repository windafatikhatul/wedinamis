<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CONTOH CRUD MySQLi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">CONTOH CRUD MySQLi</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah.php">Tambah Mahasiswa</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah dosen.php">Tambah Dosen</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah makul.php">Tambah Makul</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah kelas.php">Tambah Kelas</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tambah biodata.php">Tambah Biodata</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tampil.php">Tampil</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Tambah Makul</h2>
		
		<hr>
		
		<?php
		if(isset($_POST['submit'])){
			$kode_mk			= $_POST['kode_mk'];
			$nama_mk			= $_POST['nama_mk'];
			$sks				= $_POST['sks'];
			$kode_dosen			= $_POST['kode_dosen'];
						
			$cek = mysqli_query($koneksi, "SELECT * FROM makul WHERE kode_mk='$kode_mk'") or die(mysqli_error($koneksi));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO makul(kode_mk, nama_mk, sks, kode_dosen) VALUES('$kode_mk', '$nama_mk', '$sks', '$kode_dosen')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="tambah makul.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, Kode Makul sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="tambah makul.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KODE MAKUL</label>
				<div class="col-sm-10">
					<input type="text" name="kode_mk" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA MAKUL</label>
				<div class="col-sm-10">
					<input type="text" name="nama_mk" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">SKS</label>
				<div class="col-sm-10">
					<input type="text" name="sks" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KODE DOSEN</label>
				<div class="col-sm-10">
					<input type="text" name="kode_dosen" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>
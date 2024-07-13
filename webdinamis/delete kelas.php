<?php
//include file config.php
include('config.php');

//jika benar mendapatkan GET kode_kelas dari URL
if(isset($_GET['kode_kelas'])){
	//membuat variabel $kode_kelas yang menyimpan nilai dari $_GET['kode_kelas']
	$kode_dosen = $_GET['kode_kelas'];
	
	//melakukan query ke database, dengan cara SELECT data yang memiliki kode_kelas yang sama dengan variabel $kode_kelas
	$cek = mysqli_query($koneksi, "SELECT * FROM kelas WHERE kode_kelas='$kode_kelas'") or die(mysqli_error($koneksi));
	
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi kode_kelas=$kode_kelas
		$del = mysqli_query($koneksi, "DELETE FROM kelas WHERE kode_kelas='$kode_kelas'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
		}
	}else{
		echo '<script>alert("Kode Kelas tidak ditemukan di database."); document.location="index.php";</script>';
	}
}else{
	echo '<script>alert("kode_kelas tidak ditemukan di database."); document.location="index.php";</script>';
}

?>
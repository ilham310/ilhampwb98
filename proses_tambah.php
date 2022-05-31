<?php
include("connect.php");

if (isset($_POST['daftar'])) {

	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$jk =$_POST['jk'];
	$nomor =$_POST['nomor'];
	$kodepost =$_POST['kodepost'];

	mysqli_query($db, "INSERT INTO identitas VALUES 
	('','$nama','$alamat','$jk','$nomor','$kodepost')");
	
	// mengalihkan halaman kembali ke index.php
	header("location:index.php");
}

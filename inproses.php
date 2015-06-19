<?php
session_start();
include "includes/koneksi.php";

$proses = "";

if(!isset($_POST['proses']) || $_POST['proses']=="") $proses = $_GET['proses'];
else $proses = $_POST['proses'];
switch($proses){
	case "tambah":
		$IDbuku	= $_POST['IDbuku'];
		$Judul	= $_POST['Judul'];
		$Penulis= $_POST['Penulis'];
		$Pengarang	= $_POST['Pengarang'];
		$Index	= $_POST['Index'];
		$Tahun	= $_POST['Tahun'];
		$Jumlah	= $_POST['Jumlah'];
		$Rak		= $_POST['Rak'];
		//masukan ke database
		$cek = mysql_query("INSERT INTO tbbuku VALUES ('$IDbuku','$Judul','$Penulis','$Pengarang','$Index','$Tahun','$Jumlah','$Rak')");
		//cek apa bisa dimasukan
		if ($cek == true) echo "<script>alert('Sukses');</script>";
		else echo "<script>alert('Gagal');</script>";
	break;
}
?>
<meta http-equiv="refresh" content="1;URL=input.php" />
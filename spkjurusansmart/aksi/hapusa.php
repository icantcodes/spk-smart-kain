<?php
	session_start();
	include '../onek.php';

	if (isset($_GET['name'])) {
		
		$kain = $_GET['name'];
		mysqli_query($dbcon,"DELETE FROM kain WHERE kode_kain = '$kain'");
		mysqli_query($dbcon,"DELETE FROM penilaian WHERE kode_kain='$kain'");
		echo "<script>confirm('berhasil menghapus beserta nilai')</script>";
		header("location:../alternatif.php");

	}else{
		echo "<h1>NGAPAIN WOI</h1>";
	}

?>
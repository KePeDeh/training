<?php
include 'config.php';

//code

if (isset($_POST['update'])){

	$kod_kursus = $_POST['kod_kursus'];
	$nama_kursus = $_POST['nama_kursus'];
	$trainer = $_POST['trainer'];
	$tarikh_kursus = $_POST['tarikh_kursus'];
	$status = $_POST['status'];

	$query = "INSERT INTO course(kod_kursus, nama_kursus, trainer, tarikh_kursus, status)"."VALUES('$kod_kursus', '$nama_kursus', '$trainer', '$tarikh_kursus', '$status')";

	if (mysqli_query($mysqli,$query)) {
		echo"Data berjaya direkod";
		header('location:index.php');
	}
	else{
		echo"data tidak berjaya direkod";
	}

}


?>

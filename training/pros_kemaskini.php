<?php
include ("config.php");
//code
    if (isset($_POST['submit'])){

        $kod_kursus = $_POST['kod_kursus'];
		$nama_kursus = $_POST['nama_kursus'];
		$trainer = $_POST['trainer'];
		$tarikh = $_POST['tarikh_kursus'];
		$status = $_POST['status'];

        $query = "UPDATE course SET kod_kursus = '$kod_kursus', nama_kursus = '$nama_kursus', trainer = '$trainer', tarikh_kursus = '$tarikh', status = '$status' WHERE kod_kursus = $kod_kursus";

        $result = mysqli_query($mysqli, $query);

        if ($result){
            echo "<script>alert('Kemaskini Maklumat Berjaya')</script>"."<script>window.location='index.php'</script>";
        }
        else{
            echo "<script>alert('Kemaskini Maklumat Tidak Berjaya')</script>";
        }

    }

?>
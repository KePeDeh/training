<?php
include ("config.php");
//code
$kod_kursus = $_GET['kod_kursus'];

$result = mysqli_query($mysqli, "DELETE FROM course WHERE kod_kursus='$kod_kursus'");
echo "<script>alert('Hapus Maklumat Berjaya');"."window.location='index.php'</script>";

?>
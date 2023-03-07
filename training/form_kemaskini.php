<!DOCTYPE html>
<html>
<head>
	<title>Training Center</title>
</head>
<body>
<?php

	include ("config.php");
	$kod_kursus = $_GET['kod_kursus'];
	$sql = "SELECT * FROM course WHERE kod_kursus = '$kod_kursus'";

	$result = mysqli_query($mysqli, $sql);

	while ($res = mysqli_fetch_array($result)){
		$kod_kursus = $res['kod_kursus'];
		$nama_kursus = $res['nama_kursus'];
		$trainer = $res['trainer'];
		$tarikh = $res['tarikh_kursus'];
		$status = $res['status'];
	}

?>



<form action="pros_kemaskini.php" name="submit" method="POST">

	<center>
	<br>Kod Kursus</br>
		<br><input type="text" name="kod_kursus" value="<?php echo $kod_kursus;?>"></br>
		<br>Nama Kursus</br>
	<br><input type="text" name="nama_kursus" value="<?php echo $nama_kursus;?>"></br>
	<br>Trainer</br>
	<br>	<input type="text" name="trainer" value="<?php echo $trainer;?>"></br>
	<br>Tarikh Kursus</br>
			<br><input type="date" name="tarikh_kursus" value="<?php echo $tarikh;?>"></br>
			<br>Status</br>
			<br>	<input type="text" name="status" value="<?php echo $status;?>"></br>
				<br><input type="submit" name="submit" value="submit">
	</center>

</form>

<br><br><h3><center><a href="index.php">Kembali Ke Laman Utama</a></center></h3>

</body>
</html>
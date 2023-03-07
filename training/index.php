<?php
include ('config.php');
//code

	$result = mysqli_query($mysqli, "SELECT * FROM course");

?>

<table align="center">
<p align="center">Senarai Nama Kursus</p>
		<td align="center" bgcolor="green">Kod Kursus</td>
		<td align="center" bgcolor="green">Nama Kursus</td>
		<td align="center" bgcolor="green">Trainer</td>
		<td align="center" bgcolor="green">Tarikh kursus</td>
			<td align="center" bgcolor="green">Status</td>
			<td align="center" bgcolor="green">Kemaskini</td>
						<td align="center" bgcolor="green">Hapus</td>

<?php
//code
	while($res = mysqli_fetch_array($result)){	
		echo "<tr>";
		echo "<td>".$res['kod_kursus']."</td>";
		echo "<td>".$res['nama_kursus']."</td>";
		echo "<td>".$res['trainer']."</td>";
		echo "<td>".$res['tarikh_kursus']."</td>";
		echo "<td>".$res['status']."</td>";
		echo "<td>","<a href=\"form_kemaskini.php?kod_kursus=$res[kod_kursus]\">Kemaskini</a>";
		echo "<td>","<a href=\"pros_delete.php?kod_kursus=$res[kod_kursus]\">Hapus</a>";
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br><h3><center><a href="form_insert.php">Daftar Kursus</a></center></h3>
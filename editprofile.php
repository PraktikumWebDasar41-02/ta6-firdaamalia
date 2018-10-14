<table>
		<form method="post">
			<h3>---Edit Profile---</h3>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
				<input type="radio" name="kelas" value="D3MI-41-01">D3MI4101
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI4102<br>
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI4103
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI4104
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis" value="Perempuan">Perempuan<br>
					<input type="radio" name="jenis" value="Laki-Laki">Laki Laki
					
				</td>
			</tr>

				<tr>
				<td>Hobi : </td>
				<td>
				<input type="checkbox" name="hobi" value="badminton">badminton
				<input type="checkbox" name="hobi" value="membaca">membaca<br>
				<input type="checkbox" name="hobi" value="menulis">menulis
				<input type="checkbox" name="hobi" value="travel">travel
				</td>
			</tr>
			
			<tr>
				<td>Fakultas</td>
				<td>
					<select name="fakultas">
						<option></option>
						<option value="FIT">FIT</option>
						<option value="FIK">FRI</option>
						<option value="FKB">FI(INFORMATIKA)</option>
						<option value="FEB">FTE</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="send"></td>
			</tr>
			
		</form>
	</table>


	<?php  

$koneksi = mysqli_connect("localhost","root","","modul6_firda");

$errorNma = "";
$errorNim = "";


if (isset($_POST["kirim"])) {
	
	$nama = $_POST["nama"];

	if (strlen($_POST['nama']) > 35) {
		$errorNma = "Nama > 35";
	}

	$nim = $_POST["nim"];

	if (!is_numeric($nim)) {
		$errorNim = "NIM = angka";
	}

	$jenis = $_POST["jenis"];
	$hobi = $_POST["hobi"];
	$fakultas = $_POST["fakultas"];
	$alamat = $_POST ["alamat"];



	if ($errorNma === "" && $errorNim === "") {
		$query =  ("INSERT INTO jurnal6_firda VALUES('$nama', '$nim','$jenis','$hobi','$fakultas','$alamat')");

	$simpan = mysqli_query($koneksi, $query);

	if ($simpan) {
		echo "<script>
			alert('Data Berhasil Diinputkan');
		</script>";
		header("location:hsl.php");
	}

	
	} 

	
}




?>


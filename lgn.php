
<h3>---Login---</h3>
	<form method="post">
		<table>
		<tr>
			<td>Nama</td> 
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="send"></td>
		</tr>
		</table>
	</form>


<?php 

$koneksi = mysqli_connect("localhost","root","","modul6_firda");

if (isset($_POST["login"])) {
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];



	$query = ("SELECT * from jurnal6_firda where nama='$nama' and nim='$nim'");
	$save = mysqli_query($koneksi, $query);
	$masuk = mysqli_num_rows($save);

	if($masuk > 0){
	session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
		header("location:hsl.php");
	}else{
	 echo "<script>
			alert('Gagal Login');
		</script>";	
	}
}


 ?>
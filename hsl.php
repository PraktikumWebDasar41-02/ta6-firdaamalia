<?php 

$koneksi = mysqli_connect("localhost","root","","modul6_firda");

session_start();
 
if($_SESSION['status'] !="login"){
	header("location:lgn.php");
}


$data = mysqli_query($koneksi, "SELECT * FROM jurnal6_firda");
 
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="6">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>fakultas</th>
			<th>Alamat</th>
		</tr>


		<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["jeniskelamin"]; ?></td>
      <td><?= $row["hobi"]; ?></td>
      <td><?= $row["fakultas"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
    </tr>


    <?php endwhile; ?>
	</table><br>

	
<a href='posting.php'>Posting Cerita</a><br><br>
<a href="editprofile.php">Edit Profile</a>
 
</body>
</html>



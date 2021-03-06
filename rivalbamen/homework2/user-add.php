<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah User</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel User</h1>
	</div>
	<ul>
		<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a class="active" href="user-table.php"><i class="fa fa-users"></i> User</a></li>
		<li><a href="kwitansi-table.php"><i class="fa fa-credit-card-alt"></i> Kwitansi</a></li>
		<li style="float:right"><a href="logout.php"><i class="fa fa-sign-out"> </i> Logout</a></li>
	</ul>
	<div class="form">
	<p><a class="p-color" href="user-table.php">Tabel User</a> / Tambah User</p>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<label>Nama :</label>
		<input type="text" name="nama" />
		<label>Username :</label>
		<input type="text" name="username" />
		<label>Password :</label>
		<input type="password" name="password" />
		<label>Hak Akses :</label>
		<select name="role">
			<option value="">--Pilih--</option>
			<option value="1">Admin</option>
			<option value="2">User</option>
		</select>
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>
	</div>

	<?php
		if(isset($_POST['simpan']) && $_POST['simpan'] == 'Simpan') {
			include "koneksi.php";

			$sql_user = "INSERT INTO `user` (`nama`, `username`, `password`, `role`)
								VALUES ('".$_POST['nama']."',
										'".$_POST['username']."',
										'".$_POST['password']."',
										'".$_POST['role']."')";
			$result = mysql_query($sql_user);

			if(isset($result)) {
				header('location:user-table.php');
			} else {
				echo "Data Gagal Disimpan";
			} 
		}

	?>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>
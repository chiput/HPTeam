<!DOCTYPE html>
<html>
	<head>
		<title>Coba Form</title>
		<style>

			table{
				border-style: none;
			}
			input{
				margin-top: 10px;
				/*display: block;*/
			}
		</style>
	</head>
	<body>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<table>
			
				<tr>
					<td>abjat</td>
					<td> : </td>
					<td><input type="text" name="abjat"></td>
				</tr>
				<tr>
					<td>angka</td>
					<td> : </td>
					<td><input type="text" name="angka"></td></tr>			
				<td><input type="submit" name="save" value="Save"><td>
		</table>
		</form>
		<br/>
			<?php
				if(isset($_POST['save'])&&$_POST['save']=="Save") {
					if (empty($_POST['abjat'])) {
						echo "masukan nilai";
					}else if(preg_match("/^[a-zA-Z ]*$/", $_POST['abjat'])) {
						echo $_POST['abjat'];
					}else{
						echo "inputan anda salah";
					}
				}
			?>
			<br/>
			<?php
				if(isset($_POST['save'])&&$_POST['save']=="Save") {
					if (empty($_POST['angka'])) {
						echo "masukan nilai";
					}else if(preg_match("/^[0-9 ]*$/", $_POST['angka'])) {
						echo $_POST['angka'];
					}else{
						echo "inputan anda salah";
					}
				}
			?>

	</body>
</html>
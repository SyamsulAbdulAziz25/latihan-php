<?php 
	include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<form method="post" action="insert_action.php">
<table>
	<tr>
		<td>id</td>
		<td><input type="Text" name="id"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input type="Text" name="nama"></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input type="Text" name="alamat"></td>
	</tr>
	<tr>
		<td>keluhan</td>
		<td><input type="Text" name="keluhan"></td>
	</tr>
	<tr>
		<td><input type="submit" name="kirim"></td>

	</tr>
</table>
</form>
</body>
</html>
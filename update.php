<?php 
	include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<?php 
	$id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM tb_klinik where id='$id'");
	while($data=mysqli_fetch_array($query)){

 ?>
<form method="post" action="update_action.php">
<table>
	<tr>
		<td>id</td>
		<td><input type="Text" name="id" value=<?php echo $data['id']; ?> readonly></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input type="Text" name="nama" value=<?php echo $data['nama']; ?>></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input type="Text" name="alamat" value=<?php echo $data['alamat']; ?>></td>
	</tr>
	<tr>
		<td>keluhan</td>
		<td><input type="Text" name="keluhan" value="<?php echo $data['keluhan']; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="kirim" value="Update"></td>

	</tr>
</table>
<?php 
	}
 ?>
</form>
</body>
</html>
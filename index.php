<?php 
	include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<form method="POST" action="#">
<table border="1">
	<tr>
		<th>id</th>
		<th>nama</th>
		<th>alamat</th>
		<th>keluhan</th>
		<th>aksi</th>
	</tr>
	<?php 
		$query=mysqli_query($con,"SELECT * FROM tb_klinik");
		while($data=mysqli_fetch_array($query)){
	 ?>
	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['keluhan']; ?></td>
		<td>
			<a href="insert.php">Insert</a>
			<a href="update.php?id=<?php echo $data['id']; ?>">Update</a>
			<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
		</td>

	</tr>
	<?php 
		}

	?>
</table>
</form>
</body>
</html>
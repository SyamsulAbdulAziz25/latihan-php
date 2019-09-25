<?php 
	include "connection.php";
	$id=$_GET['id'];
	mysqli_query($con,"DELETE FROM tb_klinik WHERE id=$id");

	header("location:index.php");
 ?>
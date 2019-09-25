<?php 
	include "connection.php";

	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$keluhan=$_POST['keluhan'];

	mysqli_query($con,"INSERT INTO tb_klinik values('$id','$nama','$alamat','$keluhan')");
	header("location:index.php");

 ?>
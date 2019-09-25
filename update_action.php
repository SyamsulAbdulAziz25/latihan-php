<?php 
	include "connection.php";
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$keluhan=$_POST['keluhan'];

	mysqli_query($con,"UPDATE tb_klinik SET nama='$nama', alamat='$alamat', keluhan='$keluhan' WHERE id='$id'");

	header("location:index.php");

 ?>
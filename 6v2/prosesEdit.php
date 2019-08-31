<?php

	include_once("koneksi.php");

	$id = $_GET['id'];
	
	$name = $_POST['name'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];

	mysqli_query($koneksi, "UPDATE karyawan SET name = '$name',
												work = '$work',
												salary = '$salary'
												WHERE id = '$id'");

	header("location: index.php");

?>
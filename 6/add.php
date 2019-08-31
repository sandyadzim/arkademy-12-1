<?php

	include "koneksi.php";

	$name = $_POST[name];
	$work = $_POST[work];
	$salary = $_POST[salary];

	$query = "INSERT INTO name (name) VALUE ('$name');";
	$query .= "INSERT INTO work (work) VALUE ('$work');";
	$query .= "INSERT INTO salary (salary) VALUE ('$salary');";


	$result = mysqli_multi_query($koneksi, $query);
	header("location : index.php");

?>
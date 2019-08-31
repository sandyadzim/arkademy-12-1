<?php

	include "koneksi.php";

	$name = $_POST[name];
	$work = $_POST[work];
	$salary = $_POST[salary];
	
	$query = mysqli_query($koneksi, "SELECT salary.*, name.name, work.work FROM salary, name, work WHERE salary.id = name.id AND salary.id = work.id ORDER BY id DESC");
?>
<?php

	include_once("koneksi.php");

	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'");
	$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-8 offset-md-2"  style="background: gray;">
				
					<form action="prosesEdit.php?id=<?php echo $id; ?>" method="post">
						<div class="form-group">
							<label>Nama</label>
							<div class="input-group">
								<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
							</div>
						</div>

						<div class="form-group">
							<label>Pekerjaan</label>
							<div class="input-group">
								<select name="work" class="form-control">
									<option >Backend Dev</option>
									<option>Frontend Dev</option>
									<option>Fullstack Dev</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label>Salary</label>
							<input type="text" name="salary" class="form-control" value="<?php echo $row['salary'] ?>">
						</div>

						<div class="footer">
							<button class="btn btn-success" type="submit">
								Update
							</button>
							<button type="reset" class="btn btn-danger">
								Cancel
							</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
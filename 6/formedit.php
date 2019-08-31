<?php

	include "koneksi.php";

	$query = mysqli_query($koneksi, "SELECT salary.*, name.name, work.work FROM salary, name, work WHERE salary.id = name.id AND salary.id = work.id ORDER BY id DESC");
	$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>EDIT</title>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="form">
						<form action="edit.php" method="post">
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<input class="form-control" name="name" type="text" value="<?php echo $row['name'] ?>" />
									</div>
							</div>
							
						</form>
						
					</div>
					
				</div>
				
			</div>

	</body>
</html>	
			


			
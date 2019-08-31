<?php

	include_once("koneksi.php");



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Karyawan</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-8 offset-md-2">
					<div class="table-responsive">
						<a href="#" align="right"><button class="btn btn-warning" type="button" data-target="#myModal" data-toggle="modal">Add</button></a>

						<table class="table table-bordered table-striped table-hover table-dark">
							<?php
								include ("main.php");
							?>
						</table>
					</div>
				</div>
			</div>
			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h4 class="modal-title">Add Data</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body" style="background: gray">
			          <form action="add.php" name="modal_popup" method="post">
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<input class="form-control" name="name" type="text" placeholder="Masukkan Nama"/>
									</div>
							</div>
							<div class="form-group">
								<label>Pekerjaan</label>
									<div class="input-group">
										<select name="work" class="form-control">
											<option>Backend Dev</option>
											<option>Frontend Dev</option>
											<option>Fullstack Dev</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Salary</label>
									<div class="input-group">
										<input class="form-control" name="salary" type="text" placeholder="Nilai Salary"/>
									</div>
							</div>
						
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
			      </div>
			    </div>
			  </div>
			</div>

			<div id="modalEdit" class="modal fade" tabindex="-1" role="dialog"></div>

			<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		</div>
		
	</body>
</html>
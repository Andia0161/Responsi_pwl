<!DOCTYPE >
<html>
<head>
	<title>Add Data</title>
</head>
<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Add Data</label>
			<div class="panel panel-body">
			<form method="post" action="addData.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12">
						<label>Name</label>
						<input type="text" name="nama" class="form-control input-sm">
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<label>Email</label>
						<input type="text" name="email" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12"> 
						<label>Company</label>
						<select name="company" class="form-control input-sm" >
						<?php
							include "cons.php";
							$queryCo = "SELECT * FROM company";
							$sqlCo = mysqli_query($kon,$queryCo);

							while ($rowCo = mysqli_fetch_array($sqlCo)) {
								?>
									<option value="<?php echo $rowCo["idcompany"]; ?>"><?php echo $rowCo["name"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group row">
					<div class="col-lg-12">
						<label>Address</label>
						<input type="text" name="address" class="form-control input-sm">
					</div>
				</div>

				 <div class="form-group row">
					<div class="col-lg-12"> 
						<label>City</label>
						<select name="city" class="form-control input-sm" >
						<?php
							include "cons.php";
							$queryCi = "SELECT * FROM city";
							$sqlCi = mysqli_query($kon,$queryCi);

							while ($rowCi = mysqli_fetch_array($sqlCi)) {
								?>
									<option value="<?php echo $rowCi["idcity"]; ?>"><?php echo $rowCi["cityname"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group row">
					<div class="col-lg-12">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<a href="tabel.php" title="kembali" class="btn btn-warning">Kembali</a>
					
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
					
					
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>
</head>
<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>

<style type="text/css">
	.container{
		width: 50%;
		margin-top: 50px;
	}
</style>
<body>
<?php
	include "cons.php";
	$id = $_GET['id'];
	$query = "SELECT co.idcompany , co.name as companyName, m.id as idMember, m.idcompany as idcompany, m.idcity  as idcity, m.fullname as fullname, m.email as email, ci.idcity,m.address as address,m.foto as foto, ci.cityname as cityName FROM company co JOIN members m ON co.idcompany=m.idcompany JOIN city ci ON m.idcity=ci.idcity WHERE id='".$id."'";
	$sql = mysqli_query($kon,$query);
	$row = mysqli_fetch_array($sql);
?>

	<div class="container">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Edit Member</label>
			<div class="panel panel-body">
			<form method="post" action="simpan.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label>Name</label>
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"  >
						<input type="text" name="nama" class="form-control input-sm" value="<?php echo $row['fullname']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Email</label>
						<input type="text" name="email" class="form-control input-sm" value="<?php echo $row['email']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12"> 
						<label>Company</label>
						<select name="company" class="form-control input-sm" >
						<option value="<?php echo $row["idcompany"]; ?>"><?php echo $row["companyName"]; ?></option>
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
						<input type="text" name="address" class="form-control input-sm" value="<?php echo $row['address']; ?>">
					</div>
				</div>

				 <div class="form-group row">
					<div class="col-lg-12"> 
						<label>City</label>
						<select name="city" class="form-control input-sm" >
						<option value="<?php echo $row["idcity"]; ?>"><?php echo $row["cityName"]; ?></option>
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
						<input type="file" name="foto" class="form-control input-sm" value="<?php echo $row["foto"]; ?>">
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
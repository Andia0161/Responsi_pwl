<!DOCTYPE html>
<html>
<head>
	<title>Edit City</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<body>
<?php

	include "../cons.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM city WHERE idcity='".$id."'";
	$sql = mysqli_query($kon,$query);
	$row = mysqli_fetch_array($sql);
?>

	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Edit City</label>
			<div class="panel panel-body">
			<form method="post" action="simpanCity.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"  >
	
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>City Name</label>
						<input type="text" name="cityname" class="form-control input-sm" value="<?php echo $row['cityname']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Country</label>
						<input type="text" name="countryname" class="form-control input-sm" value="<?php echo $row['country']; ?>">
					</div>
				</div>

				



				<div class="form-group row">
					<a href="city.php" title="kembali" class="btn btn-warning">Kembali</a>
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
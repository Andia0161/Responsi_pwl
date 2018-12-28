<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<body>
<?php
	include "../cons.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM company WHERE idcompany='".$id."'";
	$sql = mysqli_query($kon,$query);
	$row = mysqli_fetch_array($sql);
?>

	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Edit Company</label>
			<div class="panel panel-body">
			<form method="post" action="simpanCompany.php">
				<div class="form-group row">
					<div class="col-lg-12">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"  >
	
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Company Name</label>
						<input type="text" name="companyname" class="form-control input-sm" value="<?php echo $row['name']; ?>">
					</div>
				</div>

				



				<div class="form-group row">
					<a href="company.php" title="kembali" class="btn btn-warning">Kembali</a>
					<input type="submit" name="submit" value="simpan" class="btn btn-info">
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
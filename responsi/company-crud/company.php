<!DOCTYPE html>
<html>
<head>
	<title>Company</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 100px">
				<label style="font-size: 28px;margin-left: 15px">Data Members</label>
			<div class="panel panel-body">
				<a href="../tabel.php" class="btn btn-info">1. CRUD Members</a>
				<a href="../city-crud/city.php" class="btn btn-info">2. CRUD City</a>
				<a href="company.php" class="btn btn-info">3. CRUD Company</a>

				<a href="addCompany.php" class="btn btn-success">Add Data</a>
			

				<div class="table table-responsive" style="margin-top: 10px;">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Company</th>
							<th></th>
							<th></th>
						</tr>

						<?php
							include "../cons.php";
							$query = "SELECT * FROM company";
							$sql = mysqli_query($kon,$query);
							$no=0;
							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["name"]; ?></td>
								
								<td>
									 <a href="editCompany.php?id=<?php echo $row['idcompany'] ?>" title="edit" class="btn btn-warning">Edit</a>
								</td>

								<td>
									<a href="deleteCompany.php?id=<?php echo $row['idcompany'] ?>" title="delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
								<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>




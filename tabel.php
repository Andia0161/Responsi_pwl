<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>

	<style type="text/css">
		.container1{
			margin-top: 100px;
		}

		.table table-responsive{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container1">
		<div class="panel panel-default">
			<label style="font-size: 30px; margin-left: 20px;">Data Member</label>
			<div class="panel panel-body">
				<button type="button" class="btn btn-info">CRUD City</button>
				<button type="button" class="btn btn-info">CRUD Company</button>
			<a href="form.php">
				<button type="button" class="btn btn-success">Add Data</button>
			</a>

		<div class="table table-responsive">
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Fullname</th>
					<th>Email</th>
					<th>Company</th>
					<th>City</th>
					<th></th>
					<th></th>
					<th></th>
					
				</tr>

	<?php 
		include "cons.php";
		$query = "SELECT co.idcompany, co.name as Company, m.idcompany, m.idcity, m.Fullname as Fullname, m.Email as Email, ci.idcity, ci.cityname as city FROM Company co JOIN Members m ON co.idcompany=m.idcompany JOIN City ci ON m.idcity=ci.idcity ";
		$sql = mysqli_query($kon,$query);
		$No=0;
		while ($row = mysqli_fetch_array($sql)) {
			# code...
			$No++;
		}

	 ?>

	 <tr>
	 	<td><?php echo $No; ?></td> <td><?php echo $row["Fullname"];?></td>

	 	<td><?php echo $row; ?></td> <td><?php echo $row["Email"];?></td>

	 	<td><?php echo $No; ?></td> <td><?php echo $row["Company"];?></td>

	 	<td><?php echo $No; ?></td> <td><?php echo $row["city"];?></td>

	 	<td>
	 		<a href="edit.php?id=<?php echo $row['idMember']?>"
	 			title="edit" class="btn btn-warning">Edit</a>
	 	</td>

	 	<td><a href="detail.php?id=<?php echo $row['idMember']?>" title="detail" class="btn btn-info">Detail</a></td>

	 <td><a href="delete.php?id=<?php echo $row['idMember']?>" title="delete" class="btn btn-danger"></a></td>
	 </tr>
			</table>
		</div>
			</div>
		</div>
	</div>

</body>
</html>
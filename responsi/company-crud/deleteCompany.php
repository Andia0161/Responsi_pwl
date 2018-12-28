<?php
	include "../cons.php";
	$id = $_GET['id'];
	$query = "DELETE FROM company WHERE idcompany = $id ";
	$sql = mysqli_query($kon,$query);
	if ($sql) {
		?>
				<script>
					alert('Data Berhasil dihapus');
					window.open('company.php','_SELF');
				</script>
			<?php
	}else{
		?>
				<script>
					alert('data gagal dihapus');
					window.open('company.php','_SELF');
				</script>
			<?php
	}
?>
<?php
	include "../cons.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$city = $_POST['city'];
<?php
  include "cons.php";
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $address = $_POST['address'];
  $city = $_POST['city'];

  $nama_file = $_FILES['foto']['name'];
  $ukuran_file = $_FILES['foto']['size'];
  $tipe_file = $_FILES['foto']['type'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  $path = "foto/".$nama_file;

     if (isset($_POST['submit'])) {
      
      $query = "INSERT INTO members (fullname,email,address,foto,idcompany,idcity) VALUES ('".$nama."','".$email."','".$address."','".$nama_file."','".$company."','".$city."')";
      $sql = mysqli_query($kon,$query);

      if ($sql) {
        ?>
              <script>
                alert('Data berhasil disimpan');
                window.open('tabel.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('addData.php','_SELF');
              </script>
            <?php
          }
   
     }


?>
	$nama_file = $_FILES['foto']['name'];
	$ukuran_file = $_FILES['foto']['size'];
	$tipe_file = $_FILES['foto']['type'];
	$tmp_file = $_FILES['foto']['tmp_name'];

	$path = "foto/".$nama_file;

     if (isset($_POST['submit'])) {
     	
     	$query = "INSERT INTO members (fullname,email,address,foto,idcompany,idcity) VALUES ('".$nama."','".$email."','".$address."','".$nama_file."','".$company."','".$city."')";
     	$sql = mysqli_query($kon,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('index.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('addData.php','_SELF');
              </script>
            <?php
          }
   
     }


?>
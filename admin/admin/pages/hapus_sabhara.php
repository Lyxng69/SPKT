<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM tbl_sabhara WHERE id_sabhara='$bk'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=sabhara';
			</script>";
 ?>
<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM tbl_perijinan WHERE id_perijinan='$bk'");
	echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=perijinan';
				</script>";
 ?>
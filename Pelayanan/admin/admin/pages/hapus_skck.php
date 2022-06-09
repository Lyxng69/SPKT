<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM tbl_skck WHERE id_skck='$bk'");
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=skck';
				</script>";
 ?>
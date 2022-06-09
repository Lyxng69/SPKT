<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM tbl_stnk WHERE id_stnk='$bk'");
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=stnk';
				</script>";
 ?>
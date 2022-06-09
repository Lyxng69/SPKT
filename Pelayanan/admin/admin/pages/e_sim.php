<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$tmp_lahir = $_POST['tmp_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$tinggi= $_POST['tinggi'];
	$pekerjaan= $_POST['pekerjaan'];
	$no_sim = $_POST['no_sim'];
	$id_sim = $_POST['id_sim'];
$ket= $_POST['ket'];
$masa= $_POST['masa'];
			mysqli_query($conn,"UPDATE tbl_sim set nama='$nama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',tinggi='$tinggi',pekerjaan='$pekerjaan',keterangan='$ket',masa='$masa',no_sim='$no_sim' where id_sim='$id_sim'");
		

				echo "<script>
					window.location='index.php?module=sim';
				</script>";

		
	
?>
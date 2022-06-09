<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$masa = $_POST['masa'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$tinggi = $_POST['tinggi'];
	$pekerjaan = $_POST['pekerjaan'];
	$ket = $_POST['ket'];
	$no_sim = $_POST['no_sim'];
		

			
			mysqli_query($conn,"INSERT into tbl_sim set nama='$nama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',tinggi='$tinggi',pekerjaan='$pekerjaan',keterangan='$ket',masa='$masa',no_sim='$no_sim'");
			
				echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=sim';
				</script>";


	
?>
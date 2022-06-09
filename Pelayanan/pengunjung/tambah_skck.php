<?php
include "../koneksi.php";
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$kebangsaan = $_POST['kebangsaan'];
	$agama = $_POST['agama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$tmp_lahir = $_POST['tmp_lahir'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$no_ktp = $_POST['no_ktp'];
	$keperluan = $_POST['keperluan'];
	$riwayat_sekolah = $_POST['riwayat_sekolah'];
		$ket = $_POST['ket'];
		
		
			mysqli_query($conn,"INSERT into tbl_skck set nama='$nama',jenis_kelamin='$jenis_kelamin',kebangsaan='$kebangsaan',agama='$agama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',alamat='$alamat', pekerjaan='$pekerjaan', no_ktp='$no_ktp',keperluan='$keperluan',riwayat_sekolah='$riwayat_sekolah',keterangan='$ket'");
			
			echo "<script>alert('Data Sukses Tersimpan');
				window.location='index.php?module=skck';
			</script>"
		

	
?>
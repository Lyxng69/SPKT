<?php
include "koneksi.php";
	$id_laporan = $_POST['id_laporan'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$tmp_lahir = $_POST['tmp_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$pekerjaan= $_POST['pekerjaan'];
	$judul_laporan= $_POST['judul_laporan'];
	$isi_laporan= $_POST['isi_laporan'];
	

		

			mysqli_query($conn,"UPDATE tbl_lapor set id_laporan='$id_laporan',nama='$nama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',judul_laporan='$judul_laporan',isi_laporan='$isi_laporan' where id_laporan='$id_laporan'");
		

			echo "<script>
					window.location='index.php?module=laporan_diri';
				</script>";
		
	
?>
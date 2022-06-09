<?php
include "../koneksi.php";
	$no_registrasi = $_POST['no_registrasi'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$merk = $_POST['merk'];
	$type = $_POST['type'];
	$jenis = $_POST['jenis'];
	$model = $_POST['model'];
	$tahun = $_POST['tahun'];
	$isi_silinder = $_POST['isi_silinder'];
	$warna = $_POST['warna'];
		$ket = $_POST['ket'];
		
		
			
			mysqli_query($conn,"INSERT into tbl_stnk set no_registrasi='$no_registrasi',nama='$nama',alamat='$alamat',merk='$merk',type='$type',jenis='$jenis',model='$model',tahun='$tahun',isi_silinder='$isi_silinder',warna='$warna',keterangan='$ket'");
			
				echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=stnk';
				</script>";
		

	
?>
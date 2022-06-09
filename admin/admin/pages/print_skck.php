<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data Surat Tugas</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_skck where id_skck='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/pati.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>POLRES PATI<br>
         RESOR KOTA PATI <br> SEKTOR KOTA PATI </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. A. Yani No.50, Winong, Kec. Pati Kabupaten Pati Jawa Tengah </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT KETERANGAN CATATAN KEPOLISIAN (SKCK) </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_skck]"; ?>/198/TRANTIB/309.07/VIII/2022</p></td>
</tr> 
</table>

<table width='100%'>
<tr>
  <td>Kepala Kelurahan Winong Kecamatan Pati Pemerintah Kota Pati, Menerangkan Bahwa : </td>
</tr>

</table>
<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Nama Lengkap</td>
<td width="65%">: <?php echo "$d[nama]";?></td>
</tr>
<tr>
<td>2</td>
<td>NIK</td>
<td>: <?php echo "$d[no_ktp]";?></td>
</tr>
<tr>
<td>3</td>
<td>Jenis Kalamin</td>
<td>: <?php echo "$d[jenis_kelamin]";?></td>
</tr>

<tr>
<td>4</td>
<td>Tempat/ Tanggal Lahir</td>
<td>: <?php echo "$d[tmp_lahir]";?>/ <?php echo TanggalIndo($d['tgl_lahir']);?></td>
</tr>
<tr>
<td>5</td>
<td>Alamat</td>
<td>: <?php echo "$d[alamat]";?></td>
</tr>
<tr>
<td>6</td>
<td>Agama</td>
<td>: <?php echo "$d[agama]";?></td>
</tr>
<tr>
<td>7</td>
<td>Pekerjaan</td>
<td>: <?php echo "$d[pekerjaan]";?></td>
</tr>
<tr>
<td>8</td>
<td>Pendidikan Terakhir</td>
<td>: <?php echo "$d[riwayat_sekolah]";?></td>
</tr>
<tr>
<td>9</td>
<td>Warga Negara</td>
<td>: <?php echo "$d[kebangsaan]";?></td>
</tr>
<tr>
<td>10</td>
<td>Keterangan</td>
<td>: <?php echo "$d[keterangan]";?></td>
</tr>
<tr>
<td>11</td>
<td>Masa Berlaku</td>
<td>: <?php echo TanggalIndo($d['masa']);?></td>
</tr>
</table>

<p>Nama tersebut di atas selama berada di Kelurahan Winong Kecamatan Pati berkelakukan serta berkepribadian &quot;BAIK&quot; Surat Keterangan Catatan Kepolisian ini diberikan untuk persyaratan</p>
<h3 align="center"><?php echo "$d[keperluan]";?> </h3>
Serta sebagai bahan pertimbangan bagi semua pihak yang berkepentingan.<br><br>  Demikian Surat Keterangan Catatan Kepolisian (SKCK) ini diberikan untuk dipergunakan sebagaimana mestinya. 
<br>
<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table>
            
            <tr>
            <br>
            <td>Pati,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          KEPALA KEPOLISIAN SEKTOR KOTA PATI<br>
          <br>
          <br>
          <br>
          <br>

          <u>	CHRISTIAN TOBING, S.I.K, M.H., M.Si., CPHR</u><br>
        </center>
    </td>
  </tr>
</table> 
</body>
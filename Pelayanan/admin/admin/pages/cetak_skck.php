        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center>POLRES PATI</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA SKCK POLRES PATI</center></td></tr>
<tr><td colspan=8 ><center>Jl. A. Yani No.50, Winong, Kec. Pati Kabupaten Pati Jawa Tengah</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>Nama</td>
<td>Jenis Kelamin</td>
<td>Kebangsaan </td>
<td>Agama</td>
<td>Tempat/ Tanggal Lahir</td>
<td>Alamat</td>
<td>Pekerjaan</td>
<td>No KTP</td>
<td>Keperluan</td>
<td>Riwayat Sekolah</td>
<td>Masa Berlaku</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysqli_query($conn,"SELECT * FROM tbl_skck ORDER BY id_skck");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
<td align='left'> <?php echo $row['kebangsaan']; ?> </td>
<td align='left'> <?php echo $row['agama']; ?> </td>
<td align='left'><?php echo $row['tmp_lahir']; ?>/ <?php echo TanggalIndo($row['tgl_lahir']);?> </td>
<td align='left'> <?php echo $row['alamat']; ?>  </td>
<td align='left'> <?php echo $row['pekerjaan']; ?>  </td>
<td align='center'> <?php echo $row['no_ktp']; ?>  </td>
<td align='center'> <?php echo $row['keperluan']; ?>  </td>
<td align='center'> <?php echo $row['riwayat_sekolah']; ?>  </td>

<td align='left'> <?php echo TanggalIndo($row['masa']);?>  </td>
</tr>
<?php
$no++;
}
?>
</table>
<br>
<br>
<table>
<td>
<tr>Pati, <?php echo date ('d  M  Y'); ?></tr><br>
<tr>        Ttd         </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>      Boruto Uchiha, M.Si     </tr>
</td>
</table>

</div>
</div>
</div>
</div>
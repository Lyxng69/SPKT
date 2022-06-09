        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">



<tr><td colspan=8 color="#FFF000"><center>POLRES PATI</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA STNK POLRES PATI</center></td></tr>
<tr><td colspan=8 ><center>Jl. A. Yani No.50, Winong, Kec. Pati Kabupaten Pati Jawa Tengah</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="8" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>No Registrasi</td>
<td>Nama</td>
<td>Alamat</td>
<td>Merk</td>
<td>Type</td>
<td>Jenis</td>
<td>Model</td>
<td>Tahun</td>
<td>Isi Silinder</td>
<td>Warna</td>
<td>Masa Berlaku</td>
</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysqli_query($conn,"SELECT * FROM tbl_stnk ORDER BY id_stnk");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['no_registrasi']; ?></td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['alamat']; ?> </td>
<td align='left'> <?php echo $row['merk']; ?> </td>
<td align='left'> <?php echo $row['type']; ?> </td>
<td align='left'> <?php echo $row['jenis']; ?> </td>
<td align='left'> <?php echo $row['model']; ?>  </td>
<td align='left'> <?php echo $row['tahun']; ?>  </td>
<td align='left'> <?php echo $row['isi_silinder']; ?>  </td>
<td align='left'> <?php echo $row['warna']; ?>  </td>
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
<tr>      Sarada Uzumaki, M.Si     </tr>
</td>
</table>

</div>
</div>
</div>
</div>
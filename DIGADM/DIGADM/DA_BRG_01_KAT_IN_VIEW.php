<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<h5><i class="far fa-clipboard"></i>&nbsp;Daftar Kategori</h5>
    <br>
    <table width="100%" border="0" class="table table-bordered table-sm table-striped" style="max-width:30rem;">
          <tr class="table-info">
            <td width="2%">#</td>
            <td width="67%">kategori</td>
            <td width="31%">&nbsp;</td>
          </tr>
          <?PHP
		  	$da_kat_no_01 = 1;
		  		$da_vkbrg01_sw = $CL_Q($CONN01,"$CL_SL da_kat_barang_01 order by kat_tglinput_01 desc");
					while($da_vkbrg01_sww = $CL_FAS($da_vkbrg01_sw)){
		  ?>
          <tr>
            <td><?PHP echo"$da_kat_no_01"; ?></td>
            <td><?PHP echo"$da_vkbrg01_sww[kat_kode_01]<br>$da_vkbrg01_sww[kat_nama_01]"; ?></td>
            <td>
            <!-- -->
            	<a href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_KAT_UP&IDKBRG01=$da_vkbrg01_sww[idmain_kat_barang_01]"; ?>" class="badge badge-warning">#Update / Edit</a>
            <!-- -->
            </td>
          </tr>
          <?PHP $da_kat_no_01++; } ?>
	</table>

</body>

<?PHP } ?>
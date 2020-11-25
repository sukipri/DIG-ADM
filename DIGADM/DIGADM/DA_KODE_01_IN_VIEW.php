<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>&nbsp;
<h5><i class="far fa-clipboard"></i>&nbsp;Daftar Kode</h5>
    <br />
    <table width="100%" border="0" class="table table-sm table-bordered table-striped" style="max-width:40rem;">
          <tr class="table-info">
            <td width="3%">#</td>
            <td width="49%">Keterangan</td>
            <td width="48%">&nbsp;</td>
          </tr>
          <?PHP 
		  	$da_kode_no_01 = 1;
		  		$da_vkd01_sw = $CL_Q($CONN01,"$CL_SL da_kode_01 order by kode_kode_01");
					while($da_vkd01_sww = $CL_FAS($da_vkd01_sw)){
		  ?>
          <tr>
            <td><?PHP echo"$da_kode_no_01"; ?></td>
            <td><?PHP echo"$da_vkd01_sww[kode_kode_01]<br>$da_vkd01_sww[kode_ket_01]"; ?></td>
            <td>
            <!-- -->
            	<a href="<?PHP echo"?PG_SA=DA_KODE_01&PG_SA_SUB=DA_KODE_01_UP&IDKD01=$da_vkd01_sww[idmain_kode_01]"; ?>" class="badge badge-warning">#Update / Edit</a>
                &nbsp;
                <a href="<?PHP ?>" class="badge badge-info">#Pengunaan</a>
            <!-- -->
            </td>
          </tr>
          <?PHP $da_kode_no_01++; } ?>
	</table>


<?PHP } ?>
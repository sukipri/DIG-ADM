<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<h5><i class="far fa-clipboard"></i>&nbsp;Daftar Unit Satuan</h5>
    
	<table width="100%" border="0" class="table table-bordered table-sm table-striped" style="max-width:40rem;">
          <tr class="table-info">
            <td width="1%">#</td>
            <td width="68%">Reff ID</td>
            <td width="31%">Nama</td>
          </tr>
          <?PHP 
		  $da_unit_no = 1;
		  	$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 order by unit_nama_01");
				while($da_vunit01_sww = $CL_FAS($da_vunit01_sw)){
		  ?>
          <tr>
            <td><?PHP echo"$da_unit_no"; ?></td>
            <td><?PHP echo"$da_vunit01_sww[unit_kode_01]"; ?></td>
            <td><?PHP echo"$da_vunit01_sww[unit_nama_01]"; ?></td>
          </tr>
          <?PHP $da_unit_no++; } ?>
	</table>


</body>

<?PHP } ?>
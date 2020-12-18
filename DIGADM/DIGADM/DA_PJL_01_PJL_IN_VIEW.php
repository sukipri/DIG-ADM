<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
<h5>#Daftar harga barang</h5>
    
    <table width="100%" border="0" class="table table-sm table-bordered table-striped" style="max-width:42rem;">
          <tr>
            <td width="3%">#</td>
            <td width="48%">Kode & Barang</td>
            <td width="36%">Harga Jual</td>
            <td width="13%">&nbsp;</td>
          </tr>
          <?PHP
		  $da_harga_no = 1;
		  	$da_vhrg01_sw = $CL_Q($CONN01,"$CL_SL da_jual_barang_harga_01");
		  		while($da_vhrg01_sww = $CL_FAS($da_vhrg01_sw)){
			//--Barang--//
				$da_vbrg01_sw = $CL_Q($CONN01,"$CL_SL da_barang_01 WHERE idmain_barang_01='$da_vhrg01_sww[idmain_barang_01]'");
					$da_vbrg01_sww = $CL_FAS($da_vbrg01_sw);
			//--UNIT--//
					$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 WHERE idmain_unit_satuan_01='$da_vbrg01_sww[idmain_unit_satuan_01]'");
						$da_vunit01_sww = $CL_FAS($da_vunit01_sw);
			//--Konversi--//
				$nom_vhrg01_sw = $da_vhrg01_sww['harga_nom01_01'];
				
					
		  ?>
          <tr>
            <td><?PHP echo"$da_harga_no"; ?></td>
            <td><?PHP echo"<a href=?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_UP&IDHRG01=$da_vhrg01_sww[idmain_jual_barang_harga_01]&IDBRG01=$da_vbrg01_sww[idmain_barang_01]>$da_vhrg01_sww[harga_kode_01]</a><br>$da_vbrg01_sww[barang_nama_01]"; ?></td>
            <td><?PHP echo"Rp.$nom_vhrg01_sw / $da_vunit01_sww[unit_nama_01] "; ?></td>
            <td>&nbsp;</td>
          </tr>
          <?PHP $da_harga_no++; } ?>
	</table>

    
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>


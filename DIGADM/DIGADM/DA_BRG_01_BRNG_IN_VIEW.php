<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
		<body>
		<h5><i class="far fa-clipboard"></i>&nbsp;Daftar Barang</h5>
        <form method="post">
        <table width="100%" border="0" class="table table-bordered table-sm table-striped" style="max-width:60rem;">
          <tr class="table-info">
            <td width="1%">#</td>
            <td width="21%">REFF ID</td>
            <td width="38%">BARANG</td>
            <td width="20%">Jumlah / QTY</td>
            <td width="20%">&nbsp;</td>
          </tr>
          <?PHP
		  	$da_barang_no = 1;
		  		$da_vbrg01_sw = $CL_Q($CONN01,"$CL_SL da_barang_01 order by barang_nama_01 asc");
					while($da_vbrg01_sww = $CL_FAS($da_vbrg01_sw)){
						//-JENIS-//
							$da_vkbrg01_sw = $CL_Q($CONN01,"$SL idmain_kat_barang_01,kat_nama_01 FROM da_kat_barang_01 WHERE idmain_kat_barang_01='$da_vbrg01_sww[idmain_kat_barang_01]' ");
								$da_vkbrg01_sww = $CL_FAS($da_vkbrg01_sw);
						//-UNIT SATUAN-//
						$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 WHERE idmain_unit_satuan_01='$da_vbrg01_sww[idmain_unit_satuan_01]'");
							$da_vunit01_sww = $CL_FAS($da_vunit01_sw);
						
		  ?>
          <tr>
            <td><?PHP echo"$da_barang_no"; ?></td>
            <td><?PHP echo"<a href=#>$da_vbrg01_sww[barang_kode_01]</a>"; ?></td>
            <td><?PHP echo"$da_vbrg01_sww[barang_nama_01] << $da_vkbrg01_sww[kat_nama_01] >>  "; ?></td>
            <td><?PHP echo"$da_vbrg01_sww[barang_jml01_01] / $da_vunit01_sww[unit_nama_01]"; ?>
            		<?PHP 
						//-Konversi Data-//
						$hit_vbrg01_sw = $da_vbrg01_sww['barang_jml01_01'] -  $da_vbrg01_sww['barang_jml02_01'];
							//-PENG KONDISIAN--//
								if($hit_vbrg01_sw < $da_vbrg01_sww['barang_jml01_01']){	
								
					?>
                    		<i class="fas fa-battery-half"></i>-
                    <?PHP }elseif($hit_vbrg01_sw > $da_vbrg01_sww['barang_jml01_01']){ ?>
                    <i class="fas fa-battery-full"></i>--
                    
                    <?PHP } ?>
            </td>
            <td>&nbsp;</td>
          </tr>
	    </table>
		<?PHP $da_barang_no++; } ?>
        
        </form>
        
        
        </body>
<?PHP } ?>
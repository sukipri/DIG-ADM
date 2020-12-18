<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<h5><i class="far fa-clipboard"></i>&nbsp;Record penggunaan dan penambahan Barang</h5>

            <table width="100%" border="0" class="table table-sm">
              <tr>
                <td width="49%">
                <b>#Barang Masuk Terahir</b>
                <!-- -->
                <?PHP 
					$da_vbqty01_sw = $CL_Q($CONN01,"$CL_SL da_barang_qty_01 order by qty_tglinput_01 desc");
						while($da_vbqty01_sww = $CL_FAS($da_vbqty01_sw)){
							//--BARANG--//
							$da_vbrg01_sw = $CL_Q($CONN01,"$SL idmain_barang_01,idmain_kat_barang_01,idmain_unit_satuan_01,barang_kode_01,barang_nama_01 FROM da_barang_01  WHERE idmain_barang_01='$da_vbqty01_sww[idmain_barang_01]'");
								$da_vbrg01_sww = $CL_FAS($da_vbrg01_sw);
							//-UNIT SATUAN-//
						$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 WHERE idmain_unit_satuan_01='$da_vbrg01_sww[idmain_unit_satuan_01]'");
							$da_vunit01_sww = $CL_FAS($da_vunit01_sw);
							
				?>
                	
                <div class="list-group">
              
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <span class="mb-1"><?PHP echo"$da_vbrg01_sww[barang_nama_01]"; ?></span>
                      <small class="text-muted"><?PHP echo FS_DATE($da_vbqty01_sww['qty_tglinput_01']); ?></small>
                    </div>
                    <p class="mb-1"><?PHP echo"Melakukan Penambahan $da_vbqty01_sww[qty_jml01_01] / $da_vunit01_sww[unit_nama_01]"; ?></p>
                    <small><?PHP  echo"$da_vbqty01_sww[qty_ket_01]";?></small>
                  </a>
				</div>
                <?PHP } ?>
                <!-- -->
                </td>
                <td width="51%">
                 <b>#Barang Keluar Terahir</b>
                <!-- -->
                
                
                <!-- -->
                </td>
              </tr>
            </table>


<?PHP } ?>
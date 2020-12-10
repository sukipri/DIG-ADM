<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
<form method="post">
    <div class="card card-sm border-primary mb-3" style="max-width: 25rem;">
              <div class="card-header">#Entri  Barang</div>
                <div class="card-body">
                     <select name="da_idmain_kode_01" class="form-control form-control-sm" required>
                        <option value="">Kode Data</option>
                        <?PHP 
                            $da_vkd01_sw = $CL_Q($CONN01,"$CL_SL da_kode_01 order by kode_kode_01 asc");
                                while($da_vkd01_sww = $CL_FAS($da_vkd01_sw)){
                                    
                        ?>
                            <option value="<?PHP echo"$da_vkd01_sww[idmain_kode_01]"; ?>"><?PHP echo"$da_vkd01_sww[kode_kode_01] | $da_vkd01_sww[kode_ket_01]"; ?></option>
                        <?PHP } ?>
               
           		 </select>
         	   <br>
                
                <b>Reff ID</b>
	              <input type="text" class="form-control form-control-sm" name="da_barang_kode_01" required value="<?PHP echo"$da_cq_vbrg01_sw"; ?>">
              <br>
              
              <br>
              <select name="da_idmain_kat_barang_01" required class="form-control form-control-sm">
              <option value="">Jenis Barang</option>
              <?PHP
			  		$da_vkbrg01_sw = $CL_Q($CONN01,"$SL idmain_kat_barang_01,kat_nama_01 FROM da_kat_barang_01 order by kat_nama_01 asc ");
						while($da_vkbrg01_sww = $CL_FAS($da_vkbrg01_sw)){
						
							echo"<option value=$da_vkbrg01_sww[idmain_kat_barang_01]>$da_vkbrg01_sww[kat_nama_01]</option>";	
						}
			  ?>
              
              </select>
              <br>
              
               <b>#Nama Barang</b>
	              <input type="text" class="form-control form-control-sm" name="da_barang_nama_01" required>
              <br>
           
              <select name="da_idmain_unit_satuan_01" required class="form-control form-control-sm">
              <option value="">Unit Satuan</option>
              <?PHP
						$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 order by unit_nama_01 asc");
							while($da_vunit01_sww = $CL_FAS($da_vunit01_sw)){
								echo"<option value=$da_vunit01_sww[idmain_unit_satuan_01]>$da_vunit01_sww[unit_kode_01] / $da_vunit01_sww[unit_nama_01]</option>";	
							}
			  ?>
              
              </select>
              <br>
              
               <b>#Jumlah Awal</b>
	              <input type="text" class="form-control form-control-sm" name="da_barang_jml01_01" required>
              <br>
              
              <b>Keterangan</b>
              <textarea class="form-control" name="da_barang_ket_01"></textarea>
              <br>
              
             
               <button class="btn btn-success btn-sm" name="da_barang_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
              
    </div>     
    </div>

</form>

	<?PHP include"../LOGIC/PRC/EXE_IN.php"; ?>

<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
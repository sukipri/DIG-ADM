<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
	<?PHP
		$da_vbrg01_sw = $CL_Q($CONN01,"$CL_SL da_barang_01 WHERE idmain_barang_01='$IDBRG01'");
			$da_vbrg01_sww = $CL_FAS($da_vbrg01_sw);
	?>
    <form method="post">
        <div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">#Entri Harga <?PHP echo"$da_vbrg01_sww[barang_nama_01]"; ?></div>
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
               
               <b>#REFF ID</b>
               <input type="text" name="da_harga_kode_01" class="form-control form-control-sm" required autocomplete="off" readonly value="<?PHP echo"$da_cq_vhrg01_sw"; ?>">
               <br>
               
               <b>#Harga Barang(Rp)</b>
               <input type="text" name="da_harga_nom01_01" class="form-control form-control-sm" required autocomplete="off">
               <br>
               
               <select name="da_idmain_diskon_01" class="form-control form-control-sm" required>
               <option value="">Diskon Barang</option>
               <option value="0">Tanpa Diskon</option>
               <?PHP
			   		$da_vdis01_sw = $CL_Q($CONN01,"$CL_SL da_jual_barang_diskon_01");
						while($da_vdis01_sww = $CL_FAS($da_vdis01_sw)){
							echo"<option value=$da_vdis01_sww[idmain_jual_barang_diskon_01]>$da_vdis01_sww[diskon_nama_01] $da_vdis01_sww[diskon_nom01_01]% </option>";
						}
			   
			   ?>
               </select>
               <br>
               
               <b>#Keterangan</b>
               <textarea name="da_harga_ket_01" class="form-control"></textarea>
               <br>
               
               <button class="btn btn-success btn-sm" name="da_harga_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
               
               
             </div>
             </div>
    </form>
    
    <!-- -->
    	<?PHP include"../LOGIC/PRC/EXE_IN.php"; ?>
    <!-- -->

<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
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
              <div class="card-header">#Entri Diskon</div>
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
            
            <b>#Reff ID</b>
            <input type="text" class="form-control form-control-sm" name="da_diskon_kode_01" value="<?PHP echo"$da_cq_vdis01_sw"; ?>">
            <br>
            
            <b>#Nama Diskon</b>
            <input type="text" class="form-control form-control-sm" name="da_diskon_nama_01" required autocomplete="off">
            <br>
            
             <b>#Nominal Diskon %</b>
            <input type="number" class="form-control form-control-sm" name="da_diskon_nom01_01" required autocomplete="off"> 
            <br>
            
            <b>#Keterangan</b>
			<textarea name="da_diskon_ket_01" class="form-control"></textarea>
            <br>
            
            <button class="btn btn-success btn-sm" name="da_diskon_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
               
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
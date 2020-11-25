<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
	<?PHP
		$da_vkbrg01_sw = $CL_Q($CONN01,"$CL_SL da_kat_barang_01 WHERE idmain_kat_barang_01='$IDKBRG01'");
			$da_vkbrg01_sww = $CL_FAS($da_vkbrg01_sw);
	
	?>
<body>
	<form method="post">
        <div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">#Update Kategori Barang</div>
          <div class="card-body">
          <!-- -->
          	<select name="da_idmain_kode_01" class="form-control form-control-sm" required>
            	<option value="">Kode Data</option>
                <?PHP 
					$da_vkd01_sw = $CL_Q($CONN01,"$CL_SL da_kode_01 order by kode_kode_01 asc");
						while($da_vkd01_sww = $CL_FAS($da_vkd01_sw)){
							if($da_vkd01_sww['idmain_kode_01']==$da_vkbrg01_sww['idmain_kode_01']){
							
				?>
                	<option value="<?PHP echo"$da_vkd01_sww[idmain_kode_01]"; ?>" selected><?PHP echo"$da_vkd01_sww[kode_kode_01] | $da_vkd01_sww[kode_ket_01]"; ?></option>
                <?PHP }else{ ?>
                	<option value="<?PHP echo"$da_vkd01_sww[idmain_kode_01]"; ?>"><?PHP echo"$da_vkd01_sww[kode_kode_01] | $da_vkd01_sww[kode_ket_01]"; ?></option>
                <?PHP }} ?>
               
            </select>
            <br>
            
            <b>#Reff ID</b>
            <input type="text" name="da_kat_kode_01" readonly class="form-control form-control-sm" required value="<?PHP echo"$da_vkbrg01_sww[kat_kode_01]"; ?>">
            <br>
            
             <b>#Kategori</b>
            <input type="text" name="da_kat_nama_01"  class="form-control form-control-sm" required autocomplete="off" value="<?PHP echo"$da_vkbrg01_sww[kat_nama_01]"; ?>">
            
            <br>
                <button class="btn btn-success btn-sm" name="da_kat_up_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
          <!-- -->
          </div>
          </div>
        
        </form>
        	<!-- -->
        		<?PHP include"../LOGIC/PRC/EXE_UP.php"; ?>
            <!-- -->
</body>
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>

<?PHP } ?>
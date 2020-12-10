<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
<form method="post">
<div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">#Entri  Unit Satuan</div>
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
              
              No Reff<br>
              <input type="text" class="form-control form-control-sm" name="da_unit_kode_01" required autocomplete="off" value="<?PHP echo"$da_cq_vunit01_sw"; ?>">
              <br>
              
              Unit Nama<br>
              <input type="text" class="form-control form-control-sm" name="da_unit_nama_01" required autocomplete="off">
              
               <br>
               <button class="btn btn-success btn-sm" name="da_unit_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
              
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
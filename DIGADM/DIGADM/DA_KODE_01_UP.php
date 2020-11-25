<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
	<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
		<?PHP
			$da_vkd01_sw = $CL_Q($CONN01,"$CL_SL da_kode_01 WHERE idmain_kode_01='$IDKD01'");
					$da_vkd01_sww = $CL_FAS($da_vkd01_sw);
		?>
	<form method="post">
    <div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">#Update Kode Setup</div>
          <div class="card-body">
            <!-- -->
            	<input type="text" autocomplete="off" value="<?PHP echo"$da_vkd01_sww[kode_kode_01]"; ?>" name="da_kode_kode_01"  class="form-control form-control-sm">
                <br>
                
                <b>#Keterangan</b>
                <br>
                <textarea name="da_kode_ket_01" class="form-control" required><?PHP echo"$da_vkd01_sww[kode_ket_01]"; ?></textarea>
                
                <br>
                <button class="btn btn-success btn-sm" name="da_kode_up_01"><i class="fas fa-check"></i>&nbsp;Update Data</button>
            <!-- -->
          </div>
	</div>
    </form>
    	<!-- -->
        	<?PHP include"../LOGIC/PRC/EXE_UP.php"; ?>
        <!-- -->
    <?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>
<?php } ?>
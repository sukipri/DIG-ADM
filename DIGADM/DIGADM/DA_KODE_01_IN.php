<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
	<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
	
	<form method="post">
    <div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header">#Entri Kode Setup</div>
          <div class="card-body">
            <!-- -->
            	<input type="text" autocomplete="off" value="<?PHP echo"$da_cq_vkd01_sw"; ?>" name="da_kode_kode_01"  class="form-control form-control-sm">
                <br>
                
                <b>#Keterangan</b>
                <br>
                <textarea name="da_kode_ket_01" class="form-control" required></textarea>
                
                <br>
                <button class="btn btn-success btn-sm" name="da_kode_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button>
            <!-- -->
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
<?php } ?>
<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
    <form method="post">
        <div class="card card-sm border-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">#Entri Harga Barang</div>
              <div class="card-body">
              <div class="input-group mb-3">
             <input type="text" name="da_barang_cari_01" autofocus placeholder="Ketik nama barang..." class="form-control form-control-sm" required autocomplete="off">
                  <div class="input-group-append">
						<button name="da_barang_btncari_01" class="btn btn-info btn-sm"><i class="fas fa-search"></i></button>
                  </div>
			</div>
	         </div>
         </div>
      </form>
      <!--- -->
		<?PHP
			if(isset($_POST['da_barang_btncari_01'])){
				$da_barang_cari_01 = @$SQL_ESC($CONN01,$_POST['da_barang_cari_01']);
		
		?>
        <table width="100%" border="0" class="table table-bordered table-sm table-striped" style="max-width:40rem;">
        <?PHP
			$da_vbrg01_sw = $CL_Q($CONN01,"$SL idmain_barang_01,idmain_kat_barang_01,barang_kode_01,barang_nama_01 FROM  da_barang_01 WHERE barang_nama_01 LIKE '%$da_barang_cari_01%'");
				while($da_vbrg01_sww = $CL_FAS($da_vbrg01_sw)){
		
		?>
          <tr>
            <td width="58%"><?PHP echo"$da_vbrg01_sww[barang_kode_01]<br>$da_vbrg01_sww[barang_nama_01]"; ?></td>
            <td width="42%">
            <!-- -->
            <?PHP 
				$da_vhrg01_sw = $CL_Q($CONN01,"$SL idmain_jual_barang_harga_01,idmain_barang_01 FROM da_jual_barang_harga_01 WHERE idmain_barang_01='$da_vbrg01_sww[idmain_barang_01]'");
					$da_nr_vhrg01_sww = $CL_NR($da_vhrg01_sw);
			?>	
            <?PHP if($da_nr_vhrg01_sww > 0){ ?>
            
            <?PHP }elseif($da_nr_vhrg01_sww < 1){ ?>
            <a href="<?PHP echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN_02&IDBRG01=$da_vbrg01_sww[idmain_barang_01]"; ?>" class="btn btn-warning btn-sm"><i class="far fa-clipboard"></i>&nbsp;Beri Harga</a>
            <?PHP } ?>
            <!-- -->
            </td>
          </tr>
          <?PHP } ?>
	</table>

        
        <?PHP } ?>
        <!-- -->
        
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
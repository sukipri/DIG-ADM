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
		//-UNIT SATUAN--//
		$da_vunit01_sw = $CL_Q($CONN01,"$CL_SL da_unit_satuan_01 WHERE idmain_unit_satuan_01='$da_vbrg01_sww[idmain_unit_satuan_01]'");
			$da_vunit01_sww = $CL_FAS($da_vunit01_sw);
	
	?>
	<form method="post">
    <div class="card card-sm border-primary mb-3" style="max-width: 25rem;">
              <div class="card-header">#Update Data Barang <?PHP echo"$da_vbrg01_sww[barang_nama_01]"; ?></div>
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
                <br>
                <input type="text" class="form-control from-control-sm" name="da_qty_kode_01" required value="<?PHP echo"$da_cq_vbqtyg01_sw"; ?>">
                <br>
                
                 <b>QTY Sebelumnya</b>
                <br>
                <input type="text" class="form-control from-control-sm" readonly name="da_qty_jmlasal_01" required value="<?PHP echo"$da_vbrg01_sww[barang_jml03_01]"; ?>">
                <br>
                
                <b>QTY yang ditambahkan</b>
                <br>
                <input type="text" class="form-control from-control-sm" name="da_qty_jml01_01" required>
                <br>
                
                <b>Harga Qty Barang</b>
                <br>
                <input type="text" class="form-control from-control-sm" name="da_qty_harga_01" required>
                <br>
                
                <b>Keterangan</b>
                <br>
				<textarea name="da_qty_ket_01" class="form-control form-control-sm"></textarea>
               
               <br>
               <button class="btn btn-success btn-sm" name="da_qty_up_01"><i class="fas fa-check"></i>&nbsp;Update Data</button>
               </div>
               </div>
   </form>
   	<!-- -->
    	<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>
    <!--- -->
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
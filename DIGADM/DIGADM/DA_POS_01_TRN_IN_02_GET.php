	<?php 	 include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";  ?>
    <?php    include"../../DIST/CODE/CODE_02_DDL.php";    ?>
    <?php    include"../../DIST/CODE/CODE_01.php";     ?>
    <?php    include"../../DIST/CODE/CODE_02.php";     ?>
<body>
	<?PHP
		$da_vhrg01_sw = $CL_Q($CONN01,"$CL_SL da_jual_barang_harga_01 WHERE idmain_barang_01='$IDBRG01'");
			$da_vhrg01_sww = $CL_FAS($da_vhrg01_sw);
	
	?>
    <b>#Harga</b>
	<input type="text" style="max-width:20rem;" name="da_harga_nom01_01" readonly class="form-control form-control-sm" value="<?PHP echo"$da_vhrg01_sww[harga_nom01_01]"; ?>">
    <br>
    
    <b>#Panjang</b>
    <input type="text" name="beli_panjang_01" class="form-control form-control-sm" autocomplete="off" required>
    <br>
    
    <b>#Lebar</b>
    <input type="text" name="beli_lebar_01" class="form-control form-control-sm" autocomplete="off" required>
    <br>
    
    <b>#Tanggal</b>
     <input type="date" name="beli_tglmasuk_01" class="form-control form-control-sm" autocomplete="off" required>
	<br>
    
    
</body>
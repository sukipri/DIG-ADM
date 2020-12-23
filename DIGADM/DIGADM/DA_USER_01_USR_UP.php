<?php 
		if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
	<?PHP
	$da_vus01_sw02 = @$CL_Q($CONN01,"$CL_SL da_user_01 where idmain_user_01='$IDUSR01'");
        $da_vus01_sww02 = $CL_FAS($da_vus01_sw02);
		
	?>
<body>
	<h5 class="badge badge-info"><?PHP echo"#Update user  $da_vus01_sww02[user_kode_01]"; ?></h5>
    <form method="post">
	<table width="100%" border="0" class="table tabl-bordered table-sm">
          <tr>
            <td>
            <!-- -->
            <div class="card card-sm border-primary mb-3" style="max-width: 25rem;">
              <div class="card-header">#Update Akun</div>
                <div class="card-body">
                    <select name="da_idmain_kode_01" class="form-control form-control-sm" required>
                        <option value="">Kode Data</option>
                        <?PHP 
                            $da_vkd01_sw = $CL_Q($CONN01,"$CL_SL da_kode_01 order by kode_kode_01 asc");
                                while($da_vkd01_sww = $CL_FAS($da_vkd01_sw)){
                          	
							if($da_vkd01_sww['idmain_kode_01']==$da_vus01_sww02['idmain_kode_01']){         
                        ?>
                            <option value="<?PHP echo"$da_vkd01_sww[idmain_kode_01]"; ?>" selected><?PHP echo"$da_vkd01_sww[kode_kode_01] | $da_vkd01_sww[kode_ket_01]"; ?></option>
                		<?PHP }else{ ?>
                   			 <option value="<?PHP echo"$da_vkd01_sww[idmain_kode_01]"; ?>"><?PHP echo"$da_vkd01_sww[kode_kode_01] | $da_vkd01_sww[kode_ket_01]"; ?></option>
                    
                    <?PHP }} ?>
                 </select>
         	   <br>
             	
                <b>#Reff ID</b>
                <input type="text" name="da_user_kode_01" class="form-control form-control-sm" required value="<?PHP echo"$da_vus01_sww02[user_kode_01]"; ?>">
                <br>
                
                <b>#Nama User</b>
                <input type="text"  name="da_user_namaasli_01" class="form-control form-control-sm" required autocomplete="off" value="<?PHP echo"$da_vus01_sww02[user_nama_01]"; ?>">
                <br>
                
                <b>#Password</b>
                <input type="text" name="da_user_pass_01" class="form-control form-control-sm" required autocomplete="off" value="<?PHP echo"$da_vus01_sww02[user_pass_01]"; ?>">
                <br>
            
                <select name="da_user_akses_01" class="form-control form-control-sm" required>
                <option value="">Hak Akses</option>
                <?php
					$list_akses = array('A1','A2','C1');
						foreach ($list_akses as $akses) {
 								 echo"<option value=$akses>$akses</option>";
							}
				?>
                <!--
                <option value="A1">Super Admin</option>
                <option value="A2">Admin</option>
                <option value="C1">Customer</option>
                </select>
                -->
                <br>
                
               <button class="btn btn-success btn-sm" name="da_user_up_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button> 
                
               
                </div>
              </div>
            <!-- -->
            </td>
            <td>&nbsp;</td>
          </tr>
	</table>
	</form>
    			<!-- -->
                	<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>
                <!-- -->
</body>

<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
<form method="post">
    <div class="card card-sm border-primary mb-3" style="max-width: 25rem;">
              <div class="card-header">#Entri  User</div>
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
                <input type="text" name="da_user_kode_01" class="form-control form-control-sm" required value="<?PHP echo"$da_cq_vusr01_sw"; ?>">
                <br>
                
                <b>#Nama User</b>
                <input type="text"  name="da_user_namaasli_01" class="form-control form-control-sm" required autocomplete="off">
                <br>
                
                <b>#Password</b>
                <input type="password" name="da_user_pass_01" class="form-control form-control-sm" required autocomplete="off">
                <br>
               
                <select name="da_user_akses_01" class="form-control form-control-sm" required>
                <option value="">Hak Akses</option>
                <option value="A1">Super Admin</option>
                <option value="A2">Admin</option>
                <option value="C1">Customer</option>
                </select>
                <br>
                
               <button class="btn btn-success btn-sm" name="da_user_simpan_01"><i class="fas fa-check"></i>&nbsp;Simpan Data</button> 
                
                
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
<?php 
		if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
<body>
<h5>#List User Admin & Customer / All</h5>
    <table width="100%" border="0" class="table table-bordered table-sm table-striped" style="max-width:50rem;">
          <tr class="table-info">
            <td width="2%">#</td>
            <td width="50%">Akun</td>
            <td width="24%">Akses</td>
            <td width="24%">&nbsp;</td>
          </tr>
          <?PHP
		  	$da_user_no = 1;
		  	$da_vusr01_sw = $CL_Q($CONN01,"$CL_SL da_user_01 order by user_akses_01 asc");
				while($da_vusr01_sww = $CL_FAS($da_vusr01_sw)){
		  ?>
          <tr>
            <td><?PHP echo"$da_user_no"; ?></td>
            <td><?PHP echo"UserName <i>$da_vusr01_sww[user_nama_01]</i> <br> Password <i>$da_vusr01_sww[user_pass_01]</i>"; ?></td>
            <td>
            <!-- -->
            	<?PHP
					if($da_vusr01_sww['user_akses_01']=="A1"){
				?>
                	<span class="badge badge-success">Super Admin</span>
                 <?PHP
					}elseif($da_vusr01_sww['user_akses_01']=="A2"){
				?>
                	<span class="badge badge-info">Admin</span>
                  <?PHP
					}elseif($da_vusr01_sww['user_akses_01']=="C1"){
				?>
               		 <span class="badge badge-primary">Customer</span>
                <?PHP } ?>
            <!-- -->
            </td>
            <td><a href="<?PHP echo"?PG_SA=DA_USER_01&PG_SA_SUB=DA_USER_01_USR_UP&IDUSR01=$da_vusr01_sww[idmain_user_01]"; ?>" class="btn btn-warning btn-sm">Update Data</a></td>
          </tr>
          <?PHP $da_user_no++; } ?>
	</table>
</body>
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
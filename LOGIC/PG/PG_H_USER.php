<?php
    ob_start();
		 @session_start();
			//..INCLUDER//
            include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
            //include"./../../DIST/CFG/CFG_01.php";
            include"../../DIST/CODE/CODE_02_DDL.php";
            $IDAKS01 = @mysqli_real_escape_string($CONN01,$_GET['IDAKS01']);
            //echo"$_SESSION[namauser]";
			//.....///
		//..Sesiion open../
		 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    	include'PG_H_LOCATION.php';
       }else{
	//..Access Method.//
 	 $da_vus01_sw = $CL_Q($CONN01,"$CL_SL da_user_01 where user_nama_01='$_SESSION[namauser]' AND user_akses_01='$IDAKS01'");
        $da_vus01_sww = $CL_FAS($da_vus01_sw);
            //echo"$IDAKS01";
			if($da_vus01_sww['user_akses_01']=="A1"){ 
?>
    <body>
        <!-- Direct to HOME_APP.php-->
        <meta http-equiv="refresh" content="0; url=<?php echo"../../DIGADM/DA_HOME_APP_01.php"; ?>">
            <!-- . . . ..  -->

            <?php   }elseif($da_vus01_sww['user_akses_01']=="2"){   ?>
                        Who are you?
                        <meta http-equiv="refresh" content="0; url=<?php echo"../../"; ?>">
            
            <!-- Close Session -->
            <?php

                        }else{
                            include'PG_H_LOCATION.php';
                        } }
                        ob_flush();

                    ?>
        </bopdy>
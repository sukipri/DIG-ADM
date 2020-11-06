<?php
		 @session_start();
			//..INCLUDER//
            include"../../CONFIG/MSSQL/MS_CONNECT_01.php";
            //include"./../../DIST/CFG/CFG_01.php";
            include"../../DIST/CODE/CODE_02_DDL.php";
         
			//.....///
		//..Sesiion open../
		 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    	include'PG_H_LOCATION.php';
       }else{
	//..Access Method.//
 	 $vus01_sw = $CL_Q("$CL_SL TBUser where namauser='$_SESSION[namauser]' AND akses='31'");
        $vus01_sww = $CL_FAS($vus01_sw);
        
			if($vus01_sww['akses']=="31"){ 
?>
        <!-- Direct to HOME_APP.php-->
        <meta http-equiv="refresh" content="0; url=<?php echo"../../E-CHECK/EC_HOME_APP.php"; ?>">
            <!-- . . . ..  -->

            <?php   }elseif($vus01_sww['akses']=="2"){   ?>
                        Who are you?
                        <meta http-equiv="refresh" content="0; url=<?php echo"../../"; ?>">
            
            <!-- Close Session -->
            <?php

                        }else{
                            include'PG_H_LOCATION.php';
                        } }
                        ob_flush();

                    ?>
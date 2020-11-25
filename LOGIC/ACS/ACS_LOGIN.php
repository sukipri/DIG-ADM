<?php
	@session_start();
	//ob_start();
	 //session_start();
	//include"../../DIST/DIST_GET.php";
	//include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
	  if(isset($_POST['da_user_nama_01'])){ 
			$username=@trim($SQL_SL($_POST['da_user_nama_01']));
			$passuser=@trim($SQL_SL($_POST['da_user_pass_01']));  // MD5 --> 9e39fe12c7c9c968ceabcd0b80d622a7 	
			$tanya_us=@trim($SQL_SL($_POST['tanya_us']));
			$jawab_us=@trim($SQL_SL($_POST['jawab_us']));
				if($jawab_us!==$tanya_us){
                    //header("location:../SU_ADMIN/");
					echo "<script language='javascript'>alert('Wrong Code..')</script>";
					echo "<script language='javascript'>window.location = '?PG_SA=ACC_LOGIN_ACCOUNT'</script>";
				}elseif($jawab_us==$tanya_us ){
						
			//include"../sc/conek.php";
			$mdpass = EN_HS_MD5($passuser);
				$dt=$CL_Q($CONN01,"$CL_SL da_user_01 WHERE user_nama_01='$username' AND user_pass_01='$mdpass'");
					//$da_vd101_sww = $CL_FAS($dt);
					$bc=$CL_FR($dt);
			if($bc > 0){
				  // session_start(); // di gunakan untuk mengawali perintah session
					//session_start(); 
				   $_SESSION['namauser']=$bc[2];  // di gunakan untuk membandingkan variabel session dengan database
				   $_SESSION['passuser']=$bc[3];
					 //header("location:?HLM=H_LOGIN"); 
					 echo"<b>Success....</b>";
					echo"$_SESSION[namauser]";
					echo"$_SESSION[passuser]";
				?>
					<META HTTP-EQUIV="Refresh" Content="0; URL=<?php echo"../LOGIC/PG/PG_H_USER.php?IDAKS01=$bc[4]"; ?>">
					<?php exit(); ?>
					
				 <?php
			
				}else{
				//header("location:../SU_ADMIN/");
				echo "<script language='javascript'>alert('Username or password is wrong')</script>";
				echo "<script language='javascript'>window.location = '?PG_SA=ACC_LOGIN_ACCOUNT'</script>";
				}
			}else{
            //header("location:../SU_ADMIN/");
			echo "<script language='javascript'>alert('Username or password is wrong')</script>";
			echo "<script language='javascript'>window.location = '?PG_SA=ACC_LOGIN_ACCOUNT'</script>";
			} }
				//echo $mdpass;
		ob_flush();
   						?>
   

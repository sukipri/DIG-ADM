<?php 
	session_start();
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'../LOGIC/PG/PG_H_LOCATION.php';
       }else{

?>
	<?php include"../DIST/DIST_GET.php";  ?>

<body>
    
    <?php include"DA_HOME_MENU_01.php"; ?>
	<?php include"DA_HOME_MENU_02.php"; ?>
    
    <!-- -->
    <?php include"DA_HOME_FOOTER.php"; ?>
     
</body>
<?php } ?>
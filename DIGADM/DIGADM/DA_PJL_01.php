<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>

<body>
 <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link bg-danger active" href="#"><i class="fas fa-folder"></i>&nbsp;Penjualan</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Harga</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN"; ?>">ENTR! Harga</a>
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN_DIS"; ?>">ENTR! Diskon / Promo</a>
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN_VIEW"; ?>">Manage Harga</a>
            
            </div>
          </li>
  </ul>
    
    <hr>
    	 <div style="overflow:auto;width:auto;height:640px;padding:2px; padding-left:9px; border:1px solid #eee">
			<?php include"../LOGIC/PG/PG_SA_SUB.php"; ?>
        
        </div>

</body>

<?php } ?>
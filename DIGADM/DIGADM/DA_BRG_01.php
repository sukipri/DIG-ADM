<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>

<body>
    <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link bg-danger active" href="#"><i class="fas fa-folder"></i>&nbsp;Barang</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Unit Satuan</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_UNIT_IN"; ?>">ENTR!</a>
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_UNIT_IN_VIEW"; ?>">Manage Unit Satuan</a>
            
            </div>
          </li>
          
          <!-- -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategori Barang</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_KAT_IN"; ?>">ENTR!</a>
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_KAT_IN_VIEW"; ?>">Manage Kategori</a>
            
            </div>
          </li>
          
          <!-- -->
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Barang</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_IN"; ?>">ENTR!</a>
              <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_IN_VIEW"; ?>">Manage Barang</a>
               <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_QTY_VIEW"; ?>">Riwayat Penggunaan Barang</a>
            
            </div>
          </li>

    </ul>
    
    <hr>
    	 <div style="overflow:auto;width:auto;height:640px;padding:2px; padding-left:9px; border:1px solid #eee">
			<?php include"../LOGIC/PG/PG_SA_SUB.php"; ?>
        
        </div>

</body>

<?php } ?>
<?php 
	
	 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    include'PG_H_LOCATION.php';
       }else{

?>
<body>
<?PHP if($da_vus01_sww['user_akses_01']=="A1"){ ?>
	<form method="post">
        	<div class="card card-sm border-primary mb-3" style="max-width: 25rem;">
          <div class="card-header">#Transaksi Baru</div>
          <div class="card-body">
          <!-- -->
          <select name="da_idmain_barang_01" class="form-control form-control-sm" onChange="produk(this.value)" required>
          <option value="">Barang</option>
          <?PHP
		  		$da_vbrg01_sw = $CL_Q($CONN01,"$CL_SL da_barang_01 order by barang_nama_01 asc");
					while($da_vbrg01_sww = $CL_FAS($da_vbrg01_sw)){
						echo"<option value=$da_vbrg01_sww[idmain_barang_01]>$da_vbrg01_sww[barang_nama_01]</option>";	
					}
		  ?>
          </select>
          <!--Javascript -->
             <script>
						function produk(str) {
							  if (str=="") {
								document.getElementById("txtHint").innerHTML="";
								return;
							  } 
							  if (window.XMLHttpRequest) {
								// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp=new XMLHttpRequest();
							  } else { // code for IE6, IE5
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							  }
							  xmlhttp.onreadystatechange=function() {
								if (this.readyState==4 && this.status==200) {
								  document.getElementById("txtHint").innerHTML=this.responseText;
								}
							  }
							  xmlhttp.open("GET","DIGADM/DA_POS_01_TRN_IN_02_GET.php?IDBRG01="+str,true);
							  xmlhttp.send();
							}
					</script>
             <!-- -->
          <!--- -->
            <br>
            <div id="txtHint"><b></b></div>
    </div>
    </div>
   </form>
<?PHP }else{ ?>
    	<span class="badge badge-danger">Maaff , hak anda dibatasi</span>
    <?PHP } ?>
</body>

<?PHP } ?>
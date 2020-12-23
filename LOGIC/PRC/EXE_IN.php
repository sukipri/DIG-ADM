<?php
     /*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses Inserting data       DIG-ADM */
    /*-----------------------------------------------------*/
    
?>

<?php
     /*-------------------------------------------------------*/
    /* DIG-ADM     */
    /*-----------------------------------------------------*/

  ?>
  <!--  #-BARANG RELATION-# --> 
  <?PHP
     /*FORM KODE DATA*/
    if(isset($_POST['da_kode_simpan_01'])){
                $da_kode_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kode_kode_01']);
                $da_kode_ket_01 = @$SQL_ESC($CONN01,$_POST['da_kode_ket_01']);

                    $da_save_kode_01 = $CL_Q($CONN01,"$IN da_kode_01(idmain_kode_01,kode_kode_01,kode_ket_01,kode_tglinput_01,kode_uploader)VALUES('$IDMAIN','$da_kode_kode_01','$da_kode_ket_01','$DATE_HTML5_SQL  $TIME_HTML5','$da_vus01_sww[idmain_user_01]')");

        ?>
            
                <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_KODE_01&PG_SA_SUB=DA_KODE_01_IN_VIEW"; ?>">
    <?PHP } ?>

<!-- #-USER  RELATION-# -->
    <?PHP
        if(isset($_POST['da_user_simpan_01'])){
            $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
            $da_user_kode_01 = @$SQL_ESC($CONN01,$_POST['da_user_kode_01']);
            //$da_user_nama_01 = @str_replace(' ',' ',$SQL_ESC($CONN01,$_POST['da_user_nama_01']));
            $da_user_pass_01 = @EN_HS_MD5($SQL_ESC($CONN01,$_POST['da_user_pass_01']));
            $da_user_akses_01 = @$SQL_ESC($CONN01,$_POST['da_user_akses_01']);
            $da_user_namaasli_01 = @$SQL_ESC($CONN01,$_POST['da_user_namaasli_01']);

                $da_save_user_01 = $CL_Q($CONN01,"$IN da_user_01(idmain_user_01,idmain_kode_01,user_kode_01,user_nama_01,user_pass_01,user_akses_01,user_namaasli_01)VALUES('$IDMAIN','$da_idmain_kode_01','$da_user_kode_01','$da_user_kode_01','$da_user_pass_01','$da_user_akses_01','$da_user_namaasli_01')");
            if($da_save_user_01){
    ?>
                  <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_USER_01&PG_SA_SUB=DA_USER_01_USR_IN"; ?>">
            <?PHP }else{
                include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
            }
    }
?>
<!-- #-CLOSE RELATION-# -->


<!-- #-BARANG RELATION-#  -->
     <!-- -->

     <?PHP
                /*FORM  UNIT SATUAN*/
                if(isset($_POST['da_unit_simpan_01'])){
                    $da_idmain_kode_01= @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_unit_kode_01 = @$SQL_ESC($CONN01,$_POST['da_unit_kode_01']);
                    $da_unit_nama_01 = @$SQL_ESC($CONN01,$_POST['da_unit_nama_01']);

                    $da_save_unit_01 = @$CL_Q($CONN01,"$IN da_unit_satuan_01(idmain_unit_satuan_01,idmain_kode_01,unit_kode_01,unit_nama_01)VALUES('$IDMAIN','$da_idmain_kode_01','$da_unit_kode_01','$da_unit_nama_01')");
                        if($da_save_unit_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_UNIT_IN"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>
   
        <!-- -->

        <?PHP
                /*FORM  KATEGORI BARANG*/
                if(isset($_POST['da_kat_simpan_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_kat_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kat_kode_01']);
                    $da_kat_nama_01 = @$SQL_ESC($CONN01,$_POST['da_kat_nama_01']);

                        $da_save_kat_01 = @$CL_Q($CONN01,"$IN da_kat_barang_01(idmain_kat_barang_01,idmain_kode_01,kat_kode_01,kat_nama_01,kat_tglinput_01,kat_uploader)VALUES('$IDMAIN','$da_idmain_kode_01','$da_kat_kode_01','$da_kat_nama_01','$DATE_HTML5_SQL','$da_vus01_sww[idmain_user_01]')");
                        if($da_save_kat_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_KAT_IN"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

        
        <!-- -->

        <?PHP
                /*FORM  BARANG*/
                if(isset($_POST['da_barang_simpan_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_idmain_kat_barang_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kat_barang_01']);
                    $da_idmain_unit_satuan_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_unit_satuan_01']);
                    $da_barang_kode_01 = @$SQL_ESC($CONN01,$_POST['da_barang_kode_01']);
                    $da_barang_nama_01 = @$SQL_ESC($CONN01,$_POST['da_barang_nama_01']);
                    $da_barang_jml01_01 = @$SQL_ESC($CONN01,$_POST['da_barang_jml01_01']);
                    $da_barang_harga_01 = @$SQL_ESC($CONN01,$_POST['da_barang_harga_01']);
                    $da_barang_ket_01 = @$SQL_ESC($CONN01,$_POST['da_barang_ket_01']);

                        $da_save_barang_01 = @$CL_Q($CONN01,"$IN da_barang_01(idmain_barang_01,idmain_kode_01,idmain_kat_barang_01,idmain_unit_satuan_01,barang_kode_01,barang_nama_01,barang_jml01_01,barang_jml02_01,barang_jml03_01,barang_harga_01,barang_ket_01,barang_uploader)VALUES('$IDMAIN','$da_idmain_kode_01','$da_idmain_kat_barang_01','$da_idmain_unit_satuan_01','$da_barang_kode_01','$da_barang_nama_01','$da_barang_jml01_01','0','$da_barang_jml01_01','$da_barang_harga_01','$da_barang_ket_01','$da_vus01_sww[idmain_user_01]')");
                        if($da_save_barang_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_IN"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>


<!-- #-CLOSE BARANG RELATION-#  -->

<!-- #JUAL RELATION-#  -->

         <!-- -->

         <?PHP
                /*FORM Harga Diskon */
                if(isset($_POST['da_diskon_simpan_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_diskon_kode_01 = @$SQL_ESC($CONN01,$_POST['da_diskon_kode_01']);
                    $da_diskon_nama_01 = @$SQL_ESC($CONN01,$_POST['da_diskon_nama_01']);
                    $da_diskon_nom01_01 = @$SQL_ESC($CONN01,$_POST['da_diskon_nom01_01']);
                    $da_diskon_ket_01 = @$SQL_ESC($CONN01,$_POST['da_diskon_ket_01']);
                   

                        $da_save_diskon_01 = @$CL_Q($CONN01,"$IN da_jual_barang_diskon_01(idmain_jual_barang_diskon_01,idmain_kode_01,diskon_kode_01,diskon_nama_01,diskon_nom01_01,diskon_ket_01)VALUES('$IDMAIN','$da_idmain_kode_01','$da_diskon_kode_01','$da_diskon_nama_01','$da_diskon_nom01_01','$da_diskon_ket_01')");
                        if($da_save_diskon_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN_DIS"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

          <!-- -->

          <?PHP
                /*FORM Harga Barang */
                if(isset($_POST['da_harga_simpan_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_idmain_diskon_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_diskon_01']);
                    $da_harga_kode_01 = @$SQL_ESC($CONN01,$_POST['da_harga_kode_01']);
                    $da_harga_nom01_01 = @$SQL_ESC($CONN01,$_POST['da_harga_nom01_01']);
                    $da_harga_ket_01 = @$SQL_ESC($CONN01,$_POST['da_harga_ket_01']);
                   
                        $da_save_harga_01 = @$CL_Q($CONN01,"$IN da_jual_barang_harga_01(idmain_jual_barang_harga_01,idmain_kode_01,idmain_barang_01,idmain_jual_barang_diskon_01,harga_kode_01,harga_nom01_01,harga_ket_01,harga_uploader)VALUES('$IDMAIN','$da_idmain_kode_01','$IDBRG01','$da_idmain_diskon_01','$da_harga_kode_01','$da_harga_nom01_01','$da_harga_ket_01','$da_vus01_sww[idmain_user_01]')");
                            if($da_save_harga_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_IN_DIS"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>
<!-- #CLOSE JUAL RELATION-#  -->
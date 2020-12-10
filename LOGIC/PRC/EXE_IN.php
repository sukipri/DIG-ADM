<?php
     /*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses Inserting data       DIG-ADM */
    /*-----------------------------------------------------*/
    
?>

<?php
     /*-------------------------------------------------------*/
    /* DIG-ADM     */
    /*-----------------------------------------------------*/
     /*FORM KODE DATA*/
    if(isset($_POST['da_kode_simpan_01'])){
                $da_kode_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kode_kode_01']);
                $da_kode_ket_01 = @$SQL_ESC($CONN01,$_POST['da_kode_ket_01']);

                    $da_save_kode_01 = $CL_Q($CONN01,"$IN da_kode_01(idmain_kode_01,kode_kode_01,kode_ket_01,kode_tglinput_01,kode_uploader)VALUES('$IDMAIN','$da_kode_kode_01','$da_kode_ket_01','$DATE_HTML5_SQL  $TIME_HTML5','$da_vus01_sww[idmain_user_01]')");

        ?>
            
                <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_KODE_01&PG_SA_SUB=DA_KODE_01_IN_VIEW"; ?>">
    <?PHP } ?>

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
                    $da_barang_ket_01 = @$SQL_ESC($CONN01,$_POST['da_barang_ket_01']);

                        $da_save_barang_01 = @$CL_Q($CONN01,"$IN da_barang_01(idmain_barang_01,idmain_kode_01,idmain_kat_barang_01,idmain_unit_satuan_01,barang_kode_01,barang_nama_01,barang_jml01_01,barang_ket_01,barang_uploader)VALUES('$IDMAIN','$da_idmain_kode_01','$da_idmain_kat_barang_01','$da_idmain_unit_satuan_01','$da_barang_kode_01','$da_barang_nama_01','$da_barang_jml01_01','$da_barang_ket_01','$da_vus01_sww[idmain_user]')");
                        if($da_save_barang_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_IN"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

       

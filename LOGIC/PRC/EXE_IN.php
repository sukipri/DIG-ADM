<?php
     /*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses Inserting data       DIG-ADM */
    /*-----------------------------------------------------*/
    
?>

<?php
     /*-------------------------------------------------------*/
    /* DIG-ADM     */
    /*-----------------------------------------------------*/

    if(isset($_POST['da_kode_simpan_01'])){
                $da_kode_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kode_kode_01']);
                $da_kode_ket_01 = @$SQL_ESC($CONN01,$_POST['da_kode_ket_01']);

                    $da_save_kode_01 = $CL_Q($CONN01,"$IN da_kode_01(idmain_kode_01,kode_kode_01,kode_ket_01,kode_tglinput_01,kode_uploader)VALUES('$IDMAIN','$da_kode_kode_01','$da_kode_ket_01','$DATE_HTML5_SQL  $TIME_HTML5','$da_vus01_sww[idmain_user_01]')");

        ?>
            
                <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_KODE_01&PG_SA_SUB=DA_KODE_01_IN_VIEW"; ?>">
    <?PHP } ?>
   
        <!-- -->

        <?PHP
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


<?php
     /*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses Mixing execution Quering            */
    /*-----------------------------------------------------*/
?>

<?php
     /*-------------------------------------------------------*/
    /* DIG-ADM      */
    /*-----------------------------------------------------*/
?>
<!-- -->

<?PHP
                /*FORM  UPDATE QTY BARANG*/
                if(isset($_POST['da_qty_up_01'])){
                 $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                 $da_qty_kode_01 = @$SQL_ESC($CONN01,$_POST['da_qty_kode_01']);
                 $da_qty_jml01_01 = @$SQL_ESC($CONN01,$_POST['da_qty_jml01_01']);
                 $da_qty_jmlasal_01 = @$SQL_ESC($CONN01,$_POST['da_qty_jmlasal_01']);
                 $da_qty_harga_01 = @$SQL_ESC($CONN01,$_POST['da_qty_harga_01']);
                 $da_qty_ket_01 = @$SQL_ESC($CONN01,$_POST['da_qty_ket_01']);
                    //-Konversi--//
                        $da_hit_qty_jml_01 = $da_qty_jmlasal_01 + $da_qty_jml01_01;

                        $da_up_barang_jml_01 = $CL_Q($CONN01,"$UP da_barang_01 set barang_jml01_01='$da_hit_qty_jml_01',barang_jml02_01='0',barang_jml03_01='$da_hit_qty_jml_01' WHERE idmain_barang_01='$IDBRG01'");
                        $da_save_qty_01 = $CL_Q($CONN01,"$IN da_barang_qty_01(idmain_barang_qty_01,idmain_kode_01,idmain_barang_01,qty_kode_01,qty_jml01_01,qty_jml02_01,qty_harga_01,qty_tglinput_01,qty_ket_01,qty_uploader)VALUES('$IDMAIN','$da_idmain_kode_01','$IDBRG01','$da_qty_kode_01','$da_qty_jml01_01','$da_qty_jmlasal_01','$da_qty_harga_01','$DATE_HTML5_SQL','$da_qty_ket_01','$da_vus01_sww[idmain_user_01]')");
                        if($da_save_qty_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_QTY_IN&IDBRG01=$IDBRG01"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

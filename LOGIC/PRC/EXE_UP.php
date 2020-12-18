<?php
    /*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses UPDATING data      DIG-ADM       */
    /*-----------------------------------------------------*/
?>
<?PHP
        /*-------------------------------------------------------*/
             /* DIG-ADM       */
        /*-----------------------------------------------------*/
?>
<!--  #-BARANG RELATION-# -->
<?php


 if(isset($_POST['da_kode_up_01'])){
                $da_kode_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kode_kode_01']);
                $da_kode_ket_01 = @$SQL_ESC($CONN01,$_POST['da_kode_ket_01']);

                    $da_up_kode_01 = $CL_Q($CONN01,"$UP da_kode_01 set kode_kode_01='$da_kode_kode_01' , kode_ket_01='$da_kode_ket_01' WHERE idmain_kode_01='$IDKD01'");

        ?>
            
                <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_KODE_01&PG_SA_SUB=DA_KODE_01_IN_VIEW"; ?>">
    <?PHP } ?>
<!-- -->

<?PHP
                if(isset($_POST['da_kat_up_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_kat_kode_01 = @$SQL_ESC($CONN01,$_POST['da_kat_kode_01']);
                    $da_kat_nama_01 = @$SQL_ESC($CONN01,$_POST['da_kat_nama_01']);

                        $da_up_kat_01 = @$CL_Q($CONN01,"$UP da_kat_barang_01 set idmain_kode_01='$da_idmain_kode_01',kat_nama_01='$da_kat_nama_01' WHERE idmain_kat_barang_01='$IDKBRG01'");
                        if($da_up_kat_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_KAT_IN_VIEW"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

<?PHP
                /*FORM  UPDATE BARANG*/
                if(isset($_POST['da_barang_up_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_idmain_kat_barang_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kat_barang_01']);
                    $da_idmain_unit_satuan_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_unit_satuan_01']);
                    $da_barang_kode_01 = @$SQL_ESC($CONN01,$_POST['da_barang_kode_01']);
                    $da_barang_nama_01 = @$SQL_ESC($CONN01,$_POST['da_barang_nama_01']);
                    $da_barang_jml01_01 = @$SQL_ESC($CONN01,$_POST['da_barang_jml01_01']);
                    $da_barang_harga_01 = @$SQL_ESC($CONN01,$_POST['da_barang_harga_01']);
                    $da_barang_ket_01 = @$SQL_ESC($CONN01,$_POST['da_barang_ket_01']);

                        $da_up_barang_01 = @$CL_Q($CONN01,"$UP da_barang_01 set idmain_kode_01='$da_idmain_kode_01',idmain_kat_barang_01='$da_idmain_kat_barang_01',barang_nama_01='$da_barang_nama_01',barang_harga_01='$da_barang_harga_01',barang_ket_01='$barang_ket_01' WHERE idmain_barang_01='$IDBRG01'");
                        if($da_up_barang_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_BRG_01&PG_SA_SUB=DA_BRG_01_BRNG_UP&IDBRG01=$IDBRG01"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

        

<!-- #-CLOSE BARANG RELATION-#  -->

<!-- #JUAL RELATION-#  -->

 <!-- -->

 <?PHP
                /*FORM Harga Barang */
                if(isset($_POST['da_harga_up_01'])){
                    $da_idmain_kode_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_kode_01']);
                    $da_idmain_diskon_01 = @$SQL_ESC($CONN01,$_POST['da_idmain_diskon_01']);
                    $da_harga_kode_01 = @$SQL_ESC($CONN01,$_POST['da_harga_kode_01']);
                    $da_harga_nom01_01 = @$SQL_ESC($CONN01,$_POST['da_harga_nom01_01']);
                    $da_harga_ket_01 = @$SQL_ESC($CONN01,$_POST['da_harga_ket_01']);
                   
                        $da_up_harga_01 = @$CL_Q($CONN01,"$UP da_jual_barang_harga_01 set idmain_jual_barang_diskon_01='$da_idmain_diskon_01',harga_nom01_01='$da_harga_nom01_01',harga_ket_01='$da_harga_ket_01' WHERE idmain_jual_barang_harga_01='$IDHRG01'");
                            if($da_up_harga_01){

                            ?>
                              <meta http-equiv="refresh" content="0; url=<?php echo"?PG_SA=DA_PJL_01&PG_SA_SUB=DA_PJL_01_PJL_UP&IDHRG01=$IDHRG01&IDBRG01=$IDBRG01"; ?>">
                        <?PHP }else{
                            include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
                        }
                }
        ?>

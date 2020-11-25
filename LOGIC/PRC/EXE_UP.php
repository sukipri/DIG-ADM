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
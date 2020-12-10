
<?php
    /*--------------------------*/
    /*--------------DIG-ADM---- */
    /*---------------------------*/
    switch(@$SQL_SL($_GET['PG_SA_SUB'])){
        /*SET UP*/
                //MASTER-KODE
                case'DA_KODE_01_IN':
                    include"DIGADM/DA_KODE_01_IN.php";
                break;
                case'DA_KODE_01_IN_VIEW':
                    include"DIGADM/DA_KODE_01_IN_VIEW.php";
                break;
                case'DA_KODE_01_UP':
                    include"DIGADM/DA_KODE_01_UP.php";
                break;
                //BARANG
                case'DA_BRG_01_UNIT_IN':
                    include"DIGADM/DA_BRG_01_UNIT_IN.php";
                break;
                case'DA_BRG_01_UNIT_IN_VIEW':
                    include"DIGADM/DA_BRG_01_UNIT_IN_VIEW.php";
                break;
                case'DA_BRG_01_KAT_IN':
                    include"DIGADM/DA_BRG_01_KAT_IN.php";
                break;
                case'DA_BRG_01_BRNG_IN':
                    include"DIGADM/DA_BRG_01_BRNG_IN.php";
                break;
                case'DA_BRG_01_BRNG_IN_VIEW':
                    include"DIGADM/DA_BRG_01_BRNG_IN_VIEW.php";
                break;
                case'DA_BRG_01_KAT_IN_VIEW':
                    include"DIGADM/DA_BRG_01_KAT_IN_VIEW.php";
                break;
                case'DA_BRG_01_KAT_UP':
                    include"DIGADM/DA_BRG_01_KAT_UP.php";
                break;



           }
?>
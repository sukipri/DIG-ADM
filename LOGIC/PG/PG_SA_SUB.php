
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
                    case'DA_BRG_01_BRNG_UP':
                        include"DIGADM/DA_BRG_01_BRNG_UP.php";
                    break;
                    case'DA_BRG_01_BRNG_QTY_IN':
                        include"DIGADM/DA_BRG_01_BRNG_QTY_IN.php";
                    break;
                    case'DA_BRG_01_BRNG_QTY_VIEW':
                        include"DIGADM/DA_BRG_01_BRNG_QTY_VIEW.php";
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
                    
                //PENJUALAN
                    case'DA_PJL_01_PJL_IN_DIS':
                        include"DIGADM/DA_PJL_01_PJL_IN_DIS.php";
                    break;
                    case'DA_PJL_01_PJL_IN':
                        include"DIGADM/DA_PJL_01_PJL_IN.php";
                    break;
                    case'DA_PJL_01_PJL_IN_02':
                        include"DIGADM/DA_PJL_01_PJL_IN_02.php";
                    break;
                    case'DA_PJL_01_PJL_UP':
                        include"DIGADM/DA_PJL_01_PJL_UP.php";
                    break;
                    case'DA_PJL_01_PJL_IN_VIEW':
                        include"DIGADM/DA_PJL_01_PJL_IN_VIEW.php";
                    break;

                //User Admin & Customer
                    case'DA_USER_01_USR_IN':
                        include"DIGADM/DA_USER_01_USR_IN.php";
                    break;
                    case'DA_USER_01_USR_UP':
                        include"DIGADM/DA_USER_01_USR_UP.php";
                    break;
                    case'DA_USER_01_USR_VIEW':
                        include"DIGADM/DA_USER_01_USR_VIEW.php";
                    break;

                    
        /* APP */
            //POS (Point Of Sales)
                    case'DA_POS_01_TRN_IN':
                        include"DIGADM/DA_POS_01_TRN_IN.php";
                    break;


           }
?>
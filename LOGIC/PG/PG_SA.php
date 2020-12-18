<?php
    
    switch(@$SQL_SL($_GET['PG_SA'])){
     
  
        /*--------------------------*/
                /* DIG-ADM*/
        /*---------------------------*/

        /* MASTER */
                case'DA_KODE_01':
                    include"DIGADM/DA_KODE_01.php";
                break;
            //BARANG
                case'DA_BRG_01':
                    include"DIGADM/DA_BRG_01.php";
                break;
            //PENJUALAN
                case'DA_PJL_01':
                    include"DIGADM/DA_PJL_01.php";
                break;
            //User Admin & Customer
            case'DA_USER_01':
                include"DIGADM/DA_USER_01.php";
            break;

        /* APP */
            //POS (Point Of Sales)
                case'DA_POS_01':
                    include"DIGADM/DA_POS_01.php";
                break;
    }
?>
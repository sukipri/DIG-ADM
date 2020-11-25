<?php
    
    switch(@$SQL_SL($_GET['PG_SA'])){
     
  
        /*--------------------------*/
                /* DIG-ADM*/
        /*---------------------------*/

            //MASTER
                case'DA_KODE_01':
                    include"DIGADM/DA_KODE_01.php";
                break;
            //BARANG
             case'DA_BRG_01':
                include"DIGADM/DA_BRG_01.php";
             break;
              
    }
?>
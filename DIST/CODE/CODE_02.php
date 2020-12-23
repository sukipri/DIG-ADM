<?php
            /* DIGADM */
    /*-------------------------------------------------------*/
    /* Himpunan Data Code Variabel DAN FUNGSI  QUERING DBMS */
    /*-----------------------------------------------------*/


    /*_________________________________________________*/

        /* Numbering Field Code Quering 
                // titik_kode_01
                $ec_cn_vtt01_sw = $CL_Q("$SL titik_kode_01 FROM tb_ec_titik_01 ");
                $ec_nr_vtt01_cq = $CL_NR($ec_cn_vtt01_sw);
                $ec_hit_vtt01_cq = $ec_nr_vtt01_cq + 1;
                $ec_hit_zero_vtt01_cq = sprintf("%02d", $ec_hit_vtt01_cq);
                @$ec_cq_vtt01_sw = "TT$DATE_ymd-$ec_hit_zero_vtt01_cq"; 
                // titik_kode_01
               */

              /* da_kode_01 */
              $da_cn_vkd01_sw = $CL_Q($CONN01,"$SL kode_kode_01 FROM da_kode_01 ");
              $da_nr_vkd01_cq = $CL_NR($da_cn_vkd01_sw);
              $da_hit_vkd01_cq = $da_nr_vkd01_cq + 1;
              $da_hit_zero_vkd01_cq = sprintf("%02d", $da_hit_vkd01_cq);
              @$da_cq_vkd01_sw = "KD$DATE_ymd-$da_hit_zero_vkd01_cq"; 

#-USER ADMIN & CUSTOMER-#
                /* da_kode_01 */
              $da_cn_vusr01_sw = $CL_Q($CONN01,"$SL user_kode_01 FROM da_user_01 ");
              $da_nr_vusr01_cq = $CL_NR($da_cn_vusr01_sw);
              $da_hit_vusr01_cq = $da_nr_vusr01_cq + 1;
              $da_hit_zero_vusr01_cq = sprintf("%02d", $da_hit_vusr01_cq);
              @$da_cq_vusr01_sw = "USR$DATE_ymd-$da_hit_zero_vusr01_cq"; 



#-BARANG RELATION-#
              /* da_unit_satuan_01 */
              $da_cn_vunit01_sw = $CL_Q($CONN01,"$SL unit_kode_01 FROM da_unit_satuan_01 ");
              $da_nr_vunit01_cq = $CL_NR($da_cn_vunit01_sw);
              $da_hit_vunit01_cq = $da_nr_vunit01_cq + 1;
              $da_hit_zero_vunit01_cq = sprintf("%02d", $da_hit_vunit01_cq);
              @$da_cq_vunit01_sw = "UNT$DATE_ymd-$da_hit_zero_vunit01_cq"; 

             

              /* da_kat_barang_01*/
              $da_cn_vkbrg01_sw = $CL_Q($CONN01,"$SL kat_kode_01 FROM da_kat_barang_01 ");
              $da_nr_vkbrg01_cq = $CL_NR($da_cn_vkbrg01_sw);
              $da_hit_vkbrg01_cq = $da_nr_vkbrg01_cq + 1;
              $da_hit_zero_vkbrg01_cq = sprintf("%02d", $da_hit_vkbrg01_cq);
              @$da_cq_vkbrg01_sw = "KBRG$DATE_ymd-$da_hit_zero_vkbrg01_cq"; 

              /* da_barang_01*/
              $da_cn_vbrg01_sw = $CL_Q($CONN01,"$SL barang_kode_01 FROM da_barang_01 ");
              $da_nr_vbrg01_cq = $CL_NR($da_cn_vbrg01_sw);
              $da_hit_vbrg01_cq = $da_nr_vbrg01_cq + 1;
              $da_hit_zero_vbrg01_cq = sprintf("%02d", $da_hit_vbrg01_cq);
              @$da_cq_vbrg01_sw = "BRG$DATE_ymd-$da_hit_zero_vbrg01_cq"; 
              
               /* da_barang_qty_01*/
               $da_cn_vbqty01_sw = $CL_Q($CONN01,"$SL qty_kode_01 FROM da_barang_qty_01 ");
               $da_nr_vbqty01_cq = $CL_NR($da_cn_vbqty01_sw);
               $da_hit_vbqty01_cq = $da_nr_vbqty01_cq + 1;
               $da_hit_zero_vbqty01_cq = sprintf("%02d", $da_hit_vbqty01_cq);
               @$da_cq_vbqtyg01_sw = "QTY$DATE_ymd-$da_hit_zero_vbqty01_cq"; 

#-CLOSE BARANG RELATION-#

#-JUAL RELATION-#

                /* da_jual_barang_diskon_01*/
               $da_cn_vdis01_sw = $CL_Q($CONN01,"$SL diskon_kode_01 FROM da_jual_barang_diskon_01 ");
               $da_nr_vdis01_cq = $CL_NR($da_cn_vdis01_sw);
               $da_hit_vdis01_cq = $da_nr_vdis01_cq + 1;
               $da_hit_zero_vdis01_cq = sprintf("%02d", $da_hit_vdis01_cq);
               @$da_cq_vdis01_sw = "DIS$DATE_ymd-$da_hit_zero_vdis01_cq"; 

                 /* da_jual_barang_harga_01*/
               $da_cn_vhrg01_sw = $CL_Q($CONN01,"$SL harga_kode_01 FROM da_jual_barang_harga_01 ");
               $da_nr_vhrg01_cq = $CL_NR($da_cn_vhrg01_sw);
               $da_hit_vhrg01_cq = $da_nr_vhrg01_cq + 1;
               $da_hit_zero_vhrg01_cq = sprintf("%02d", $da_hit_vhrg01_cq);
               @$da_cq_vhrg01_sw = "HRG$DATE_ymd-$da_hit_zero_vhrg01_cq"; 

/*..DIGADM......................................................................... */
                /*DATAVIEW */
                        //VIEW-UPDATE//
                                /* User */
                                $IDUSR01 = @$SQL_ESC($CONN01,$_GET['IDUSR01']);
                                $IDAKS01 = @$SQL_ESC($CONN01,$_GET['IDAKS01']);
                                
                                /*MASTER - KODE */
                                $IDKD01 = @$SQL_ESC($CONN01,$_GET['IDKD01']);
                                
                                /*Master - Barang */
                                $IDKBRG01 = @$SQL_ESC($CONN01,$_GET['IDKBRG01']);
                                $IDBRG01 = @$SQL_ESC($CONN01,$_GET['IDBRG01']);

                                /*MASTER - PENJUALAN */
                                $IDHRG01 = @$SQL_ESC($CONN01,$_GET['IDHRG01']);

                
/*..View generate data  */
$da_vqa01_sw = $CL_Q($CONN01,"$CL_SL da_qa_01 order by rand()");
        $da_vqa01_sww = $CL_FAS($da_vqa01_sw);

/* User Vieew Control - Must edit */
$da_vus01_sw = @$CL_Q($CONN01,"$CL_SL da_user_01 where user_nama_01='$_SESSION[namauser]'");
        $da_vus01_sww = $CL_FAS($da_vus01_sw);
?>
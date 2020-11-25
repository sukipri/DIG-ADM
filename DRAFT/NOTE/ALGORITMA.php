<?php
	/*------------------*/
	/*ALGORITHM pseudocode DIG-ADM*/
	/*------------------*/

?>

	<?php 
		/*Algoritma & multifungsi Menu Kode data */
			$Entri Kode$
			1. Entri Form Prosedure
				[
				  1.1 generate kode dari sistem
				  1.2 entri penamaan kode
				]
			2. Proses simpan()
					
					/*---Table Assesment--*/
							NAME //>> da_kode_01
								[
									idmain_kode_01
									kode_kode_01
									kode_ket_01
									kode_tglinput_01
									kode_uploader					
								]
				
			/*   
			  pemufungsian kode data , untuk menjadi master atau penggolongan(flag) saat melakukan
			   pengentrian / proses pemasukan data baru
			
			*/
		--CLOSE--
		
		/*Algoritma BARANG */
		
		$ENTRI KATEGORI BARANG$
			1. Entri Form Prosedure
				[
					1.1 Entri Kode Data sistem(da_kode_01)
					1.2 Entri Kode generate barang
				]
			2. Proses Simpan
				
					/*---Table Assesment--*/
							NAME //>> da_kat_barang_01
								[
									idmain_kat_barang_01
									idmain_kode_01
									kat_kode_01
									kat_nama_01
									kat_tglinput_01
									kat_uploader
								]
			
			--SUB CLOSE--
			
			$ENTRI BARANG$
			1. Entri Form Prosedure
				[
					1.1 Entri Kode Data sistem(da_kode_01)
					1.2 Entri Kode generate barang
				]
			2. Proses Simpan
				
					/*---Table Assesment--*/
							NAME //>> da_barang_01
								[
														
								]
		

			
			
		
	?>

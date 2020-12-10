<?php
	/*------------------*/
	/*ALGORITHM pseudocode DIG-ADM*/
	/*------------------*/

?>

	<?php 
		/*Algoritma & multifungsi SET TAHUN */
			(Untuk menentukan Pengaturan BUKU tahunan APlikasi DATA)
			
		
	
		--CLOSE--
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
		/*Algorithm & MultiFungsi UNIT Satuan */
		$ENTRI UNIT SATUAN$
		
		/*--Table Assement--*/
				NAME //>> da_unit_satuan_01
					[
						idmain_unit_01
						idmain_kode_01
						unit_kode_01
						unit_nama_01
					]
		
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
					1.2 Entri Kode generate barang(FLD: barang_kode_01)
					1.3 Entri Jenis Barang(da_kat_barang_01)
					
					
					
				]
			2. Proses Simpan
				
					/*---Table Assesment--*/
							NAME //>> da_barang_01
								[
									idmain_barang_01
									idmain_kode_01
									idmain_kat_barang_01
									idmain_unit_01
									barang_kode_01
									barang_nama_01
									barang_jml01_01 //Jumlah Awal Sebelum Update
									barang_jml02_01 //Jumlah Pemakaian
									barang_ket_01
									barang_status_01
									
									
									
								]
	
			
		--SUB CLOSE--
		
		/*ALgorthm * Mutifungsi Manage barang  */
			$QTY Control$
				(mengetahui data penggunaan keluar masuk stock barang)
				1. IF QTY barang masih > 80% <60% Stock masih bisa digunakan tanpa perlu penambahan stock
				2. IF QTY barang masih >60% <40% stock masih bisa dugnakan tpi haruse segera melakukan penambahan stock
				3. IF QTY barang masih <60% Stock sangat terbatas digunakan harus segera melakukan penambhanan stock
				4 IF QTY barang masih <40% Stock sudah tidah bisa digunakan
					/*Match Method */
						Jumlah Awal = QTY-AW
						Jumlah Ahir = QTY-AH
						
						QTY-AW - QTY-AH = [RESULT] $QTY Control$ Method Kondisi
				
		
		--SUB CLOSE-- 


	?>

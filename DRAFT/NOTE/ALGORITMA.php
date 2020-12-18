<?php
	/*------------------*/
	/*ALGORITHM pseudocode DIG-ADM*/
	/*------------------*/
	
	||--MENU SET--||
		Master
			#SET Up
				[
					1.Kode
						(mengatur kode setiap master data pada DIG-ADM)
						[
							1.1 Entri
							1.2 Manage Kode
						]
					2.Pengunna User
					3.BARANG
						[
							3.1 Unit SATUAN
								[
									3.1.1 Entri
									3.1.2 Manage Unit
								]
							3.2 Kategori BARANG
								[
									3.2.1 Entri 
									3.2.2 Manage Kategori BARANG
								]
							3.3 BARANG
								[
									3.3.1 Entri
									3.3.2 Riwaayat BARANG
											[
												UPDATE BARANG
												UPDATE QTY
											]
									3..3.3 Riwayat Pengunnaan Barang
											
								]
						]
					4.Penjualan
						[
							4.1 Harga 
								[
									4.1.1 ENTRI Harga
									4.1.2 Entri Diskon / Promo
									4.1.2 Manage Harga 
								]
							
						]
				]
				
			#CLOSE SET Up#
			
			# APP#
					1. POS(Point Of Sales)
						[
							1.1 Transaksi
								[
									1.1.1 Transaksi Baru
								]
						]
			
			
			
	||--CLOSE MENU SET--||
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
			
||-BARANG RELATION(MASTER)-||

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
				[//MAIN RELATION FLD
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
									barang_jml03_01 ///Jumlah Rec jml01
									barang_haraga_01
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
						Jumlah Awal = QTY-AW(jml01)
						Jumlah Ahir = QTY-AH(jml02)
						Jumlah Percentage = QTY-PER(80%)
						 QTY-AH = [RESULT] $QTY Control$ Method Kondisi persentase
														[//FORMULLA PERCETAGE
															$QTY-AW - QTY-AH
															$QTY-AW - QTY-PER
																IF QTY-AH > QTY-PER 
																IF QTY-AH < QTY-PER 
																Reset Jumlah
																
															
														]
				
		
		--SUB CLOSE-- 
			
				/*ALgorthm * Mutifungsi Penambahan QTY / Jumlah Barang  */
					$ADD & Record QTY barang$
						(Merecord setiap transaksi penambahan barang)
						1. GET DATA barang(da_barang_01)
						2. FORM Prosedure
							[
								2.1 GET DATA QTY lama 
								2.2 Replace dengan QTY terbaru
									[
										QTY LAMA  + QTY BARU(Update:da_barang_01)(INSERT:da_barang_qty_01)
										
									]
							]
						3. Proses simpan dan Update(da_barang_01,da_barang_qty_01)
						
						
					/*---Table Assesment--*/
							NAME //>> da_barang_qty_01
								[
									idmain_barang_qty_01
									idmain_kode_01
									idmain_barang_01
									qty_kode_01
									qty_jml01_01 //Jumlah yang ditambahkan
									qty_jml02_01 //Jumlah riwayat qty sebelumnya
									qty_harga_01
									qty_tglinput_01
									qty_ket_01
									qty_uploader
									
								]
			
			
							
			
||-CLOSE BARANG RELATION-||

||PENJUALAN RELATION(MASTER) -||
				
					/*ALgorthm * Mutifungsi Entri Harga Barang  */
						$ENTRI HARGA$
							(Meberikan mastering harga penjualan barang)
						
							1. ENTRI FORM Prosedure
								[
									1.1 GET ID DARI BARANG(da_barang_01)
									1.2 ENTRI Data Harga()
									
									
									
								]
							
					/*---Table Assesment--*/
							NAME //>> da_jual_barang_harga_01
								[
									idmain_jual_barang_harga_01
									idmain_kode_01
									idmain_barang_01
									idmain_jual_barang_diskon_01
									harga_kode_01
									harga_nom01_01
									harga_ket_01
									harga_uploader
									
									
								]	
							
	--SUB CLOSE--
				/*ALgorthm * Mutifungsi Entri Diskon  */
						$ENTRI DISKON$
							(Untuk meentukan potongan harga dan promo barang)
					
					/*---Table Assesment--*/
							NAME //>> da_jual_barang_diskon_01
								[
									idmain_jual_barang_diskon_01
									idmain_kode_01
									diskon_kode_01
									diskon_nama_01
									diskon_nom01_01
									diskon_ket_01
									
								]
	--SUB CLOSE--
	
	>>||PENJUALAN RELATION(APP) -||
				/*ALgorthm * Mutifungsi Entri Traksaksi Baru*/
						$TRAKSAKSI BARU(POS)$
							(Untuk Melakukan transaksi baru pembelian)
						1. ENTRI PROSEDURE TRAKSAKSI
								[
									1.1 GET BARANG(da_barang_01)
										[
											GET Harga BARANG(da_jual_barang_harga_01)
											SHOW Panjang
											SHOW LEBAR
											SHOW Tanggal Manual
											
											
											
										]
										
								]
				
						/*---Table Assesment--*/
							NAME //>> da_jual_barang_beli_01
								[
									idmain_jual_barang_beli_01
									idmain_kode_01
									idmain_barang_01
									idmain_jual_barang_harga_01
									beli_kode_01
									
									
									
									
									
								]
		--CLOSE--
	
	||-Admin / Customer / Pembeli(MASTER)-||
				/*ALgorthm * Mutifungsi Admin && Customer */
					(Mengatur Admin dan Pembeli dalam melakukan transaksi data)
					{/*handling User*/
						Super Admin 
							[/*KODE Handling*/
								Super Admin = A1;
									[/*Control Pages*/
									
									
									]
							]
						Admin 
							[/*Kode Handling */
								Admin = A2;
									[/*Control Pages*/
									
									
									]
								
							]
						Customer
							[/*Kode Handling*/
								Customer = C1;
									[/*Control Pages*/
									
									
									]
							
							]
							
					}
					
					
			
			/*---Table Assesment--*/
							NAME //>> da_user_01
								[
									idmain_user_01
									user_kode_01
									user_nama_01
									user_pass_01
									user_akses_01
									
								]
	
		--CLOSE--
				
	?>

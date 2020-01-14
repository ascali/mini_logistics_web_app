<div class="border-0">
	<h2>Selamat Datang!</h2>
	<p align="justify">
		Ini adalah halaman website dari PT. Multiartha Retalindo Lestari. 
		Melalui website ini Anda dapat melakukan hubungan dengan kami untuk komunikasi mengenai layanan-layanan kami.
		Dengan website ini juga kami berusaha meningkatkan layanan yang kami berikan untuk Anda sebagai pelanggan kami,
		nikmati kemudahan layanan kami untuk mencari informasi dalam pengiriman barang Anda.
	</p>
	<!-- <p>
		<a class="btn btn-primary" href="#">
			Pelajari selengkapnya...
		</a>
	</p> -->
</div>
<div class="row">
	<?php
	$masuk = $this->session->userdata('status');
	if ($masuk != "masuk") {
	?>
	<div class="col-md-6">
		<div class="border-0">
			<h3>Daftar Sekarang</h3>
			<p align="">
				Berbagai kemudahan yang kami tawarkan untuk Anda melalui layanan online terbaru kami. 
				Dapatkan berbagai kemudahan informasi yang Anda butuhkan disini.
				<br><br>
				Daftar sekarang untuk menikmati layanan kami dengan klik 
				<a href="<?php echo base_url(); ?>index.php/page/daftar_pelanggan">disini</a>.</p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="border-0">
			<h3>Biaya Pengiriman</h3>
			<p align="justify">
				Untuk melihat biaya pengiriman yang ingin Anda lakukan, silahkan masuk kehalaman 
				<a href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Informasi Biaya Pengiriman</a> 
				atau dengan memilih tombol dibawah ini.
			</p>
			<br>
			<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Biaya Pengiriman</a>
			&nbsp;
		</div>
	</div>
	<?php
	} else {
	?>
	<div class="col-md-12">
		<div class="border-0">
			<h3>Biaya Pengiriman</h3>
			<p align="justify">
				Untuk melihat biaya pengiriman yang ingin Anda lakukan, silahkan masuk kehalaman 
				<a href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Informasi Biaya Pengiriman</a> 
				atau dengan memilih tombol dibawah ini.
			</p>
			<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Biaya Pengiriman</a>
		</div>
	</div>
	<?php
	}
	?>
</div>
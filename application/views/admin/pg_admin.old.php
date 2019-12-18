<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $judul; ?> - PT. Multiartha Retalindo Lestari</title>
	<!-- Meta -->
	<?php 
		echo meta('description', 'Website tracking PT. Multiartha Retalindo Lestari');
		echo meta('keywoards', 'kirim barang, tracking, pelayaran, pengiriman');
		echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); 
		echo meta('viewport', 'width=device-width, initial-scale=1.0');
	?>
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mystyle.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flick/jquery-ui-1.9.2.custom.css">
	<style type="text/css">
		.content{
			padding-top: 40px;
			padding-bottom: 20px;
		}
		.spacer-large{
			height: 100px;
		}
		.icon-chevron-right{
			opacity: .25;
		}
		.icon-home{
			opacity: .25;
		}
		.icon-off{
			opacity: .5;
		}
		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
				border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}
		.spacer {
			height: 25px;
		}
		.left-foot {
			color: rgb(0, 123, 215);
			font-size: 10pt;
			text-align: center;
		}
		.bg{
			background-color: #cbffc2;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='540' height='450' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/svg%3E");
			/*background-color: #fbfaff;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='152' height='152' viewBox='0 0 152 152'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='temple' fill='%23ff6e6e' fill-opacity='0.1'%3E%3Cpath d='M152 150v2H0v-2h28v-8H8v-20H0v-2h8V80h42v20h20v42H30v8h90v-8H80v-42h20V80h42v40h8V30h-8v40h-42V50H80V8h40V0h2v8h20v20h8V0h2v150zm-2 0v-28h-8v20h-20v8h28zM82 30v18h18V30H82zm20 18h20v20h18V30h-20V10H82v18h20v20zm0 2v18h18V50h-18zm20-22h18V10h-18v18zm-54 92v-18H50v18h18zm-20-18H28V82H10v38h20v20h38v-18H48v-20zm0-2V82H30v18h18zm-20 22H10v18h18v-18zm54 0v18h38v-20h20V82h-18v20h-20v20H82zm18-20H82v18h18v-18zm2-2h18V82h-18v18zm20 40v-18h18v18h-18zM30 0h-2v8H8v20H0v2h8v40h42V50h20V8H30V0zm20 48h18V30H50v18zm18-20H48v20H28v20H10V30h20V10h38v18zM30 50h18v18H30V50zm-2-40H10v18h18V10z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");*/
		}
    </style>
</head>
<body class="bg">
	<!-- Navbar -->
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">PT. Multiartha Retalindo Lestari</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li><a href="<?php echo base_url(); ?>index.php/pg_admin/logout">
							<i class="icon-off icon-white"></i>&nbsp;Keluar</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Navbar -->

	<!-- Header -->	
	<div class="spacer">
		<!-- comment header
		<a href="#">
			<img src="<?php echo base_url(); ?>assets/img/head2.jpg" alt="PT. Multiartha Retalindo Lestari">
		</a>
		-->
	</div>

	<!-- Content -->
	<div class="container content">
		<div class="row">
			<div class="span3">
				<!--Sidebar content-->
				<div class="well" style="padding: 8px 0;">
					<ul class="nav nav-list">
						<!-- kategori baru -->
						<li class="<?php if ($this->uri->segment(2)=='') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/">Beranda
							<i class="icon-home pull-right"></i></a>
						</li>
						<!-- kategori baru -->
						<li class="nav-header">Master Data</li>
						<li class="<?php if ($this->uri->segment(2)=='kota_provinsi') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/kota_provinsi">Kota & Provinsi
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='bidang_kerja') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/bidang_kerja">Bidang Kerja
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='status') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/status">Status Pengiriman
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='biaya') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/biaya">Biaya Pengiriman
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='jenis_barang') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/jenis_barang">Jenis Barang
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='barang') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/barang">Barang
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='customer') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/customer">Customer
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="nav-header">Order</li>
						<li class="<?php if ($this->uri->segment(2)=='pengiriman') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/pengiriman">Pengiriman
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='tracking') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/tracking">Tracking
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<!-- kategori baru -->
						<li class="nav-header">Setting</li>
						<li class="<?php if ($this->uri->segment(2)=='admin') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/admin">Kelolah Otorisasi
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
						<li class="<?php if ($this->uri->segment(2)=='laporan') echo $aktif; ?>">
							<a href="<?php echo base_url(); ?>index.php/pg_admin/laporan">Laporan
							<i class="icon-chevron-right pull-right"></i></a>
						</li>
					</ul>
				</div>
				<div class="left-foot">
					<strong>PT. Multiartha Retalindo Lestari</strong>
					<br>Jalan Kemang Pratama Raya, Boulevard Blok B nomor 9 – Rawalumbu, Kota Bekasi<br>
					<abbr title="Phone">CS:</abbr> (021) 82749503<br>
					&nbsp;<br>
					<?= date('Y') ?> &copy;&nbsp;
					<a href="javascript:void(0)">made with &#10084;</a>
				</div>
			</div>
			<div class="span9">
				<!--Body content-->
				<?php $this->load->view($konten); ?>
			</div>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mine.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
</body>
</html>
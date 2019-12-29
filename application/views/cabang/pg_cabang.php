<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    <!-- Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Website tracking PT. Multiartha Retalindo Lestari">
  <meta name="keywoards" content="kirim barang, tracking, pelayaran, pengiriman">
  <meta name="theme-color" content="#563d7c">
  <meta name="author" content="PT. Multiartha Retalindo Lestari, Ascaliko">

  <title><?= $judul; ?> · PT. Multiartha Retalindo Lestari</title>

  <link rel="canonical" href="<?= base_url(); ?>">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url(); ?>public/vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/vendor/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="180x180">
  <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="32x32" type="image/png">
  <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="16x16" type="image/png"> 
  <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png"> 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
      /* width */
      ::-webkit-scrollbar {
        width: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1; 
      }
       
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #343a40; 
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555; 
      }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?= base_url(); ?>assets/vendor/adminlte/#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="<?= base_url(); ?>assets/vendor/adminlte/#">
          <i class="far fa-user"></i>
          <!-- <span class="badge badge-warning navbar-badge">15</span> -->
          <?= $this->session->userdata('nama_cabang'); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <!-- <div class="dropdown-divider"></div> -->
          <a href="<?php echo base_url(); ?>index.php/cabang/logout" class="dropdown-item">
            <span data-feather="log-out"></span> Logout
          </a>
          <!-- <div class="dropdown-divider"></div> -->
          <a href="<?= base_url(); ?>assets/vendor/adminlte/#" class="dropdown-item dropdown-footer"></a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-lightblue">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link navbar-light" title="Nawala Express Courier">
      <!-- <img src="<?= base_url(); ?>assets/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><b><font color="red">NAW</font><font color="#2d87d6">ALA</font> <font color="green">Express Courier</font></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="<?= base_url(); ?>assets/vendor/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="<?= base_url(); ?>assets/vendor/adminlte/#" class="d-block">Hi, <?= $this->session->userdata('nama_cabang'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/cabang/">
              <span data-feather="home"></span>
              Beranda
            </a>
          </li>
          <li class="nav-header">Master Data</li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='agen') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/cabang/agen">
              <span data-feather="compass"></span>
              Agen
            </a>
          </li>
          <li class="nav-header">Transaksi</li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='pengiriman') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/cabang/pengiriman">
              <i data-feather="truck"></i>
              Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='tracking') echo $aktif; ?>"  href="<?php echo base_url(); ?>index.php/cabang/tracking">
              <i data-feather="send"></i>
              Tracking
          </a>
          </li>
          <li class="nav-header">Transaksi</li>
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='admin') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/cabang/data">
              <i data-feather="settings"></i>
              Setting Data
          </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php $this->load->view($konten); ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?=date('Y');?> <a href="javascript:void(0)">PT. Multi Artha Retalindo Lestari </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/vendor/adminlte/dist/js/adminlte.js"></script>

    <script src="<?= base_url(); ?>assets/js/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
    <!-- icon&chart -->
    <!-- datatable -->
    <script src="<?= base_url(); ?>public/vendor/DataTables/datatables.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/Buttons-1.6.1/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>public/vendor/DataTables/Responsive-2.2.3/js/responsive.bootstrap4.min.js"></script>

    <!-- module -->
    <script type="text/javascript">
      /* globals Chart:false, feather:false */
      (function () {
        'use strict'
        feather.replace()
      }())
      var url = window.location.origin;
      var base_url = window.location.origin;
      var lang_indo_datatables = {
          "sProcessing": "Sedang proses...",
          "sLengthMenu": "Menampilkan _MENU_ entri",
          "sZeroRecords": "Tidak ditemukan data yang sesuai",
          "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "sInfoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
          "sInfoPostFix": "",
          "sSearch": "Cari:",
          "sUrl": "",
          "oPaginate": {
              "sFirst": "<<",
              "sPrevious": "<",
              "sNext": ">",
              "sLast": ">>"
          }
      };
    </script>
    <script src="<?= base_url(); ?>assets/module/<?=$module;?>.js"></script>
</body>
</html>

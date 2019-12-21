<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
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

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
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
    <!-- Custom styles for this template -->
    <style type="text/css">
      body {
        font-size: .875rem;
      }

      .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
      }

      /*
       * Sidebar
       */

      .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100; /* Behind the navbar */
        padding: 48px 0 0; /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      }

      .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
      }

      @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sidebar-sticky {
          position: -webkit-sticky;
          position: sticky;
        }
      }

      .sidebar .nav-link {
        font-weight: 500;
        color: #333;
      }

      .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
      }

      .sidebar .nav-link.active {
        color: #007bff;
      }

      .sidebar .nav-link:hover .feather,
      .sidebar .nav-link.active .feather {
        color: inherit;
      }

      .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
      }

      /*
       * Content
       */

      [role="main"] {
        padding-top: 133px; /* Space for fixed navbar */
      }

      @media (min-width: 768px) {
        [role="main"] {
          padding-top: 48px; /* Space for fixed navbar */
        }
      }

      /*
       * Navbar
       */

      .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
      }

      .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
      }

      .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
      }

      .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
      }
      .bgg1{
        background: #9fbd9f; /*#abbaab*/  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #ffffff, #9fbd9f) /*#abbaab*/;  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #ffffff, #9fbd9f) /*#abbaab*/; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .bgg2{
        background: #9fbd9f; /*#abbaab*/  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ffffff, #9fbd9f) /*#abbaab*/;  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ffffff, #9fbd9f) /*#abbaab*/; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body class="bgg1">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nawala Express Courier</a>
      <!-- <input <center></center>lass="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/pg_admin/logout"><span data-feather="log-out"></span> Log Out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar bgg2">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/">
                  <span data-feather="home"></span>
                  Beranda
                </a>
              </li>
            </ul>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Master Data</span>
                <a class="d-flex align-items-center text-muted" href="#" aria-label="menu">
                  <span data-feather="chevron-right"></span>
                </a>
              </h6>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='kota_provinsi') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/kota_provinsi">
                    <span data-feather="compass"></span>
                    Kota & Provinsi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='bidang_kerja') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/bidang_kerja">
                    <span data-feather="layers"></span>
                    Bidang Kerja
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='status') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/status">
                    <span data-feather="repeat"></span>
                    Status Pengiriman
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='biaya') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/biaya">
                    <span data-feather="tag"></span>
                    Biaya Pengiriman
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='jenis_barang') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/jenis_barang">
                    <span data-feather="server"></span>
                    Jenis Barang
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='barang') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/barang">
                    <span data-feather="package"></span>
                    Barang
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if ($this->uri->segment(2)=='customer') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/customer">
                    <span data-feather="users"></span>
                    Customer
                  </a>
                </li>
              </ul>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>TRANSAKSI</span>
              <a class="d-flex align-items-center text-muted" href="#" aria-label="menu">
                <span data-feather="chevron-right"></span>
              </a>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='pengiriman') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/pengiriman">
                  <i data-feather="truck"></i>
                  Pengiriman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='tracking') echo $aktif; ?>"  href="<?php echo base_url(); ?>index.php/pg_admin/tracking">
                  <i data-feather="send"></i>
                  Tracking
              </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>PENGATURAN</span>
              <a class="d-flex align-items-center text-muted" href="#" aria-label="menu">
                <span data-feather="chevron-right"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='admin') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/admin">
                  <i data-feather="settings"></i>
                  Kelolah Otorisasi
              </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='laporan') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/pg_admin/laporan">
                  <i data-feather="file-text"></i>
                  Laporan
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <!--Body content-->
          <?php $this->load->view($konten); ?>
          <!--Body content-->
        </main>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <!-- icon&chart -->
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
    <!-- datatable -->
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

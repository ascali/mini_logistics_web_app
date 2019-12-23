
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
    <link href="<?= base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="180x180">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="16x16" type="image/png">
    <!-- <link rel="manifest" href="<?= base_url(); ?>assets/img/favicons/manifest.json"> -->
    <!-- <link rel="mask-icon" href="<?= base_url(); ?>assets/img/favicons/safari-pinned-tab.svg" color="#563d7c"> -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png">
    <!-- <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.4/assets/img/favicons/browserconfig.xml"> -->

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
    </style>
    <!-- Custom styles for this template -->
    <style type="text/css">
      html {
        font-size: 14px;
      }
      @media (min-width: 768px) {
        html {
          font-size: 16px;
        }
      }

      .container {
        max-width: 960px;
      }

      .pricing-header {
        max-width: 700px;
      }

      .card-deck .card {
        min-width: 220px;
      }
      .bg{
        background-color: #ffffff;
        background-attachment: fixed;
        background-size: cover;
      }
      .header-fixed {
        width: 100%;
        position: fixed; 
        background: white;
        z-index: 999;
      }
      .img-nawala {
        width: 100%;
        -webkit-filter: drop-shadow(5px 5px 5px #666666);
        filter: drop-shadow(5px 5px 5px #666666);
      }
    </style>
  </head>
  <body class="bg">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm header-fixed">
      <h5 class="my-0 mr-md-auto font-weight-normal" style=""><b><font color="red">NAW</font><font color="#2d87d6">ALA</font> <font color="green">Express Courier</font></b></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-<?php if ($this->uri->segment(2)=='') echo $aktif; ?>" href="<?= base_url(); ?>">Beranda</a>
        <a class="p-2 text-<?php if ($this->uri->segment(2)=='layanan') echo $aktif; ?>" href="<?= base_url(); ?>index.php/page/layanan">Layanan</a>
        <a class="p-2 text-<?php if ($this->uri->segment(2)=='profil') echo $aktif; ?>" href="<?= base_url(); ?>index.php/page/profil">Profil Perusahaan</a>
        <a class="p-2 text-dark" href="javascript:void(0)"></a>
      </nav>
      <?php
      $masuk = $this->session->userdata('status');
      if ($masuk != "masuk") {
        echo "<a class='btn btn-outline-primary' href='#loginModal' role='button'  data-toggle='modal' data-target='#loginModal'>Masuk</a>";
      } else {
        $nama = $this->session->userdata('nama_cust');
        $id_cust = $this->session->userdata('id_cust');
      ?>
        <div class="dropdown">
          <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $nama; ?>&nbsp;<b class="caret"></b>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url(); ?>index.php/customer/edit_cust/<?= $id_cust; ?>">Pengaturan Akun</a>
            <a class="divider" href="JavaScript:void(0)"></a>
            <a class="dropdown-item" href="<?=base_url();?>index.php/customer/logout">Keluar</a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- Header --> 
    <div class="header" style="height: 200px;">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <div class="container" style="color: white;">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= base_url(); ?>assets/img/nawala.png" class="img-nawala" />
          </div>
          <div class="col-md-8">
            <h2 style="color: black; text-shadow: 2px 2px 4px #000000;">PT. MULTI ARTHA RETALINDO LESTARI</h2>
            <h3 style="color: black; text-shadow: 2px 2px 4px #000000;">NAWALA EXPRESS COURIER</h3>
            <h4 style="color: black; text-shadow: 2px 2px 4px #000000;">Cepat, Fresh & Hygienic</h4>
          </div>
        </div>
      </div>
    </div>


    <div class="container">

      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action <?php if ($this->uri->segment(2)=='') echo $aktif; ?>"href="<?php echo base_url(); ?>">Beranda</a>
            <?php
            $masuk = $this->session->userdata('status');
            if ($masuk != "masuk") {
              echo "<a class='list-group-item list-group-item-action' href='#loginModal' data-toggle='modal'>Pengiriman Barang</a>";
            } else {
              $nama = $this->session->userdata('nama_cust');
              $active = ($this->uri->segment(2)=='pengiriman_barang') ? $aktif : '';
              echo "<a href='".base_url()."index.php/page/pengiriman_barang' class='list-group-item list-group-item-action ".$active."'>Pengiriman Barang</a>";
            }
            ?> 
            <?php
            // $masuk = $this->session->userdata('status');
            // if ($masuk != "masuk") {
              // echo "<a class='list-group-item list-group-item-action' href='#loginModal' role='button' data-toggle='modal'>Tracking Area";
            // } else {
              $nama = $this->session->userdata('nama_cust');
              $active = ($this->uri->segment(2)=='tracking') ? $aktif : '';
              echo "<a href='".base_url()."index.php/page/tracking' class='list-group-item list-group-item-action ".$active."'>Tracking Area</a>";
            // }
            ?>
            <a class="list-group-item list-group-item-action <?php if ($this->uri->segment(2)=='biaya_pengiriman') echo $aktif; ?>" href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Informasi Biaya</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="list-home-list">
              <!--Body content-->
              <?php $this->load->view($konten); ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <!-- Footer -->
    <div class="container">
      <footer class="pt-5 my-md-6 pt-md-6 border-top">
        <div class="row">
          <div class="col-6 col-md">
            <h5>Layanan</h5>
            <ul class="list-unstyled text-small">
              <li>
                <?php
                $masuk = $this->session->userdata('status');
                if ($masuk != "masuk") {
                  echo "<a class='text-muted' href='#loginModal' role='button' data-toggle='modal'>Pengiriman Barang";
                } else {
                  $nama = $this->session->userdata('nama_cust');
                  echo "<a class='text-muted' href='".base_url()."index.php/page/pengiriman_barang'>Pengiriman Barang";
                }
                ?>
              </li>
              <li>
                <?php
                $masuk = $this->session->userdata('status');
                if ($masuk != "masuk") {
                  echo "<a class='text-muted' href='#loginModal' role='button' data-toggle='modal'>Tracking Area";
                } else {
                  $nama = $this->session->userdata('nama_cust');
                  echo "<a class='text-muted' href='".base_url()."index.php/page/tracking'>Tracking Area";
                }
                ?>
              </li>
              <li>
                <a class="text-muted" href="<?php echo base_url(); ?>index.php/page/biaya_pengiriman">Informasi Biaya</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Kemitraan</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="<?php echo base_url(); ?>index.php/page/lowongan">Lowongan Kerja</a></li>
              <li><a class="text-muted" href="<?php echo base_url(); ?>index.php/page/promo">Daftar Promo</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Informasi Umum</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="<?php echo base_url(); ?>index.php/page/profil">Profil Perusahaan</a></li>
              <li><a class="text-muted" href="<?php echo base_url(); ?>index.php/page/rekanan">Perusahaan Rekanan</a></li> 
            </ul>
          </div>
          <div class="col-12 col-md"> 
            <strong style="font-size: 88%;">PT. Multiartha Retalindo Lestari</strong>
            <br>
            <abbr align="justify"><small>Jalan Kemang Pratama Raya, Boulevard Blok B nomor 9 – Rawalumbu, Kota Bekasi</small></abbr>
            <br>
            <abbr title="Phone"><small>CS:</small></abbr> <small>(021) 82749503</small>
            <br>
            <small><?= date('Y') ?> &copy;&nbsp;<a href="javascript:void(0)">made with &#10084;</a></small>
            <!-- <small class="d-block mb-3 text-muted">&copy; <?=date('Y');?></small> -->
          </div>
        </div>
      </footer>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
            <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body">

            <table style="width: 100%;">
              <tr style="vertical-align: top;">
                <td style="width: 50%; border-right:1px solid #eeeeee; padding-right: 10px;">
                  <form method="post" action="<?php echo base_url(); ?>index.php/customer/ceklogin">
                    <fieldset>
                      <legend>Sudah Terdaftar</legend>
                      <table style="width: 100%;">
                        <tr>
                          <td><label for="txtEmail">Email</label></td>
                          <td>&nbsp;</td>
                          <td><input id="txtEmail" class="form-control form-control-sm" name="txtEmail" type="text" placeholder="ketik email disini"></td>
                        </tr>
                        <tr>
                          <td><label for="txtPassword">Password</label></td>
                          <td>&nbsp;</td>
                          <td><input id="txtPassword" class="form-control form-control-sm" name="txtPassword" type="password" placeholder="ketik password disini"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><button type="submit" class="btn btn-sm btn-primary float-right">Masuk</button></td>
                        </tr>
                      </table>
                    </fieldset>
                  </form>
                </td>
                <td style="width: 50%; padding-left: 10px;">
                  <fieldset>
                    <legend>Belum Terdaftar</legend>
                    <label>
                      Bagi Anda yang belum memiliki akun, silahkan 
                      <a href="<?= base_url(); ?>index.php/page/daftar_pelanggan">klik disini</a>.
                    </label>
                  </fieldset>
                </td>
              </tr>
            </table> 

          </div>
        </div>
      </div>
    </div>

    <br>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>public/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

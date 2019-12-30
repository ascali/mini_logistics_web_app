<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website tracking PT. Multiartha Retalindo Lestari">
    <meta name="keywoards" content="kirim barang, tracking, pelayaran, pengiriman">
    <meta name="theme-color" content="#563d7c">
    <meta name="author" content="PT. Multiartha Retalindo Lestari, Ascaliko">
    <title><?php echo $judul; ?></title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/nawala.jpg" sizes="180x180">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.jpg" sizes="16x16" type="image/png"> 
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.jpg"> 
    
    <!-- Le styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mystyle.css">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
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
      .bg{
        background-color: #1ac0fd;
        /*background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cpolygon fill='%23cc0000' points='957 450 539 900 1396 900'/%3E%3Cpolygon fill='%23aa0000' points='957 450 872.9 900 1396 900'/%3E%3Cpolygon fill='%23d6002b' points='-60 900 398 662 816 900'/%3E%3Cpolygon fill='%23b10022' points='337 900 398 662 816 900'/%3E%3Cpolygon fill='%23d9004b' points='1203 546 1552 900 876 900'/%3E%3Cpolygon fill='%23b2003d' points='1203 546 1552 900 1162 900'/%3E%3Cpolygon fill='%23d3006c' points='641 695 886 900 367 900'/%3E%3Cpolygon fill='%23ac0057' points='587 900 641 695 886 900'/%3E%3Cpolygon fill='%23c4008c' points='1710 900 1401 632 1096 900'/%3E%3Cpolygon fill='%239e0071' points='1710 900 1401 632 1365 900'/%3E%3Cpolygon fill='%23aa00aa' points='1210 900 971 687 725 900'/%3E%3Cpolygon fill='%23880088' points='943 900 1210 900 971 687'/%3E%3C/svg%3E");*/
        background-image: url("<?= base_url(); ?>assets/img/Truck404.svg");
        background-attachment: fixed;
        background-size: cover;
        background-position-y: 100%;
      }
    </style>
  </head>

  <body class="bg">
    <div class="container">
      <form method="post" style="box-shadow: 0 8px 6px -6px black;" class="form-signin" action="<?php echo base_url();?>cabang/ceklogin">
        <h2 class="form-signin-heading"><center>Login Cabang</center></h2>
        <input type="text" class="input-block-level" placeholder="Email" name="txtEmail">
        <input type="password" class="input-block-level" placeholder="Password" name="txtPassword">
        <button class="btn btn-large btn-primary" type="submit">Masuk</button>
      </form>
    </div>
  </body>
</html>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Pengiriman</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<!-- <a href="javascript:void(0)" role="button" class="btn btn-sm btn-outline-primary" 			onclick="window.open('<?php //echo base_url(); ?>index.php/pengiriman/buat_permintaan_pengiriman', 800, 600)"> -->

		<a href="<?php echo base_url(); ?>index.php/page/pengiriman_barang_cabang" role="button" class="btn btn-sm btn-outline-primary">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah data pengiriman:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No. Pengiriman</th>
				<th>Tanggal Pengiriman</th>
				<!--<th>Biaya Pengiriman</th>-->
				<th>Nama Penerima</th>
				<th>Tujuan Pengiriman</th>
				<!--<th>Kota Tujuan</th>-->
				<!--<th>Alamat</th>-->
				<!--<th>Berat Pengiriman</th>-->
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($pengiriman) > 0) {
				foreach ($pengiriman as $list) {
					$tanggal = date('d F Y', strtotime($list['tgl_pengiriman']));
					echo "<tr>";
					echo "<td>".$list['id_pengiriman']."</td>";
					echo "<td>".$tanggal."</td>";
					//echo "<td>Rp".number_format($list['biaya_pengiriman'], 0, ",", ".").",00</td>";
					echo "<td>".$list['nama_penerima']."</td>";
					echo "<td>".$list['tujuan_pengiriman']." -";
					echo " ".$list['kota_tujuan']."</td>";
					//echo "<td>".$list['alamat_penerima']."</td>";
					//echo "<td>".$list['berat_pengiriman']."</td>";
					echo "<td>";
					//echo anchor('pengiriman/detil/'.$list['id_pengiriman'], 'Detil', '');
					?>
					<a href="javascript:;" onclick="window.open('<?php echo base_url(); ?>index.php/pengiriman/detil/<?php echo $list['id_pengiriman']; ?>', 800, 600)">Detil</a>
					<?php
					echo nbs(2)."/".nbs(2);
					echo anchor('pengiriman/edit_cabang/'.$list['id_pengiriman'], 'Ubah', '');
					?>
					<!--<a href="javascript:;" onclick="window.open('<?php echo base_url(); ?>index.php/pengiriman/edit/<?php echo $list['id_pengiriman']; ?>', 500, 435)">Ubah</a>-->
					<?php
					echo nbs(2)."/".nbs(2);
					echo anchor('pengiriman/hapus/'.$list['id_pengiriman'], 'Hapus', '');
					echo "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='5'>Tidak ada data yang bisa ditampilkan.</td></tr>";
			}
			?>
		</tbody>
</table>
</div>


<!-- Modal Tambah -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/customer/add">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>



<!--  -->
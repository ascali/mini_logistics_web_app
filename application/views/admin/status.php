<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Status Pengiriman</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar status pengiriman:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Status Pengiriman</th>
				<th>Keterangan</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($status) > 0) {
				$idx = 1;
				foreach ($status as $list) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$list['status_pengiriman']."</td>";
					echo "<td>".$list['keterangan']."</td>";
					echo "<td>";
					//echo anchor('status/edit/'.$list['status_pengiriman'], 'Ubah', '');
					//echo nbs(2)."/".nbs(2);
					echo anchor('status/remove/'.$list['status_pengiriman'], 'Hapus', '');
					echo "</td>";
					echo "</tr>";
					$idx++;
				}
			} else {
				echo "<tr><td colspan='4'>Tidak ada data yang bisa ditampilkan.</td></tr>";
			}
			?>
		</tbody>
</table>
</div>


<!-- Modal Tambah -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/status/add">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Bidang Kerja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<p>Silahkan isi status pengiriman yang ingin ditambahkan.</p>
		<div class="control-group">
			<label class="control-label" for="inputStatusPengiriman">Status Pengiriman</label>
			<div class="controls">
				<input type="text" class="form-control" id="inputStatusPengiriman" name="txtStatusPengiriman" placeholder="Status Pengiriman">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputKeterangan">Keterangan</label>
			<div class="controls">
				<textarea class="form-control" id="inputKeterangan" name="txtKeterangan" placeholder="Keterangan"></textarea>
			</div>
		</div>
      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Biaya Pengiriman</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar biaya pengiriman:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kota Asal</th>
				<th>Kota Tujuan</th>
				<th>Total Berat (Kg)</th>
				<th>Biaya (Rp)</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($biaya) > 0) {
				$idx = 1;
				foreach ($biaya as $list) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$list['kota_asal']."</td>";
					echo "<td>".$list['kota_tujuan']."</td>";
					echo "<td>".$list['total_berat']."</td>";
					echo "<td>Rp".number_format($list['biaya'], 0, ",", ".").",00</td>";
					echo "<td>";
					echo anchor('biaya/edit/'.$list['id_biaya'], 'Ubah', '');
					echo nbs(2)."/".nbs(2);
					echo anchor('biaya/remove/'.$list['id_biaya'], 'Hapus', '');
					echo "</td>";
					echo "</tr>";
					$idx++;
				}
			} else {
				echo "<tr><td colspan='6'>Tidak ada data yang bisa ditampilkan.</td></tr>";
			}
			?>
		</tbody>
</table>
</div>


<!-- Modal Tambah -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/biaya/add">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Biaya Pengiriman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<p>Silahkan isi biaya pengiriman yang ingin ditambahkan.</p>
		<div class="control-group">
			<label class="control-label" for="inputKotaAsal">Kota Asal</label>
			<div class="controls">
				<select class="form-control" id="inputKotaAsal" name="cbKotaAsal">
					<?php
					foreach ($kota as $data) {
						echo "<option value='".$data['id_kota']."'>".$data['nama_kota']."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputKotaTujuan">Kota Tujuan</label>
			<div class="controls">
				<select class="form-control" id="inputKotaTujuan" name="cbKotaTujuan">
					<?php
					foreach ($kota as $data) {
						echo "<option value='".$data['id_kota']."'>".$data['nama_kota']."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputTotalBerat">Total Berat/Kg.</label>
			<div class="controls">
				<input class="form-control" type="number" id="inputTotalBerat" name="txtTotalBerat" placeholder="Berat" class="input-small">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputBiaya">Biaya Pengiriman/Rp.</label>
			<div class="controls">
				<input class="form-control" type="text" id="inputBiaya" name="txtBiaya" placeholder="Biaya" class="input-medium">
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




<!--  -->

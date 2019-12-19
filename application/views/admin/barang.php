<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Barang</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar barang:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Berat Barang</th>
				<th>Jenis Barang</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($barang) > 0) {
				$idx = 1;
				foreach ($barang as $list) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$list['nama_barang']."</td>";
					echo "<td>".$list['berat_barang']." ".$list['satuan_barang']."</td>";
					echo "<td>".$list['jenis_barang']."</td>";
					echo "<td>";
					echo anchor('barang/edit/'.$list['id_barang'], 'Ubah', '');
					echo nbs(2)."/".nbs(2);
					echo anchor('barang/remove/'.$list['id_barang'], 'Hapus', '');
					echo "</td>";
					echo "</tr>";
					$idx++;
				}
			} else {
				echo "<tr><td colspan='5'>Tidak ada data yang bisa ditampilkan.</td></tr>";
			}
			?>
		</tbody>
</table>
</div>


<!-- Modal Tambah -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/barang/add">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<p>Silahkan isi data barang yang ingin ditambahkan.</p>
			<div class="control-group">
				<label class="control-label" for="inputNamaBarang">Nama Barang</label>
				<div class="controls">
					<input class="form-control" type="text" id="inputNamaBarang" name="txtNamaBarang" placeholder="Nama Barang">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputJenisBarang">Jenis Barang</label>
				<div class="controls">
					<select class="form-control" id="inputJenisBarang" name="cbJenisBarang">
						<?php
						foreach ($jenis as $data) {
							echo "<option value='".$data['id_jenis_barang']."'>".$data['jenis_barang']."</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputBeratBarang">Berat Barang</label>
				<div class="controls">
					<div class="row">
						<div class="col-md-8">
							<input class="form-control" type="number" id="inputBeratBarang" class="span1" name="txtBeratBarang" placeholder="Berat">
						</div>
						<div class="col-md-4">
							<select class="form-control" class="input-small" name="cbSatuanBarang">
								<option value="kg">kg</option>
								<option value="liter">liter</option>
								<option value="kubik">kubik</option>
								<option value="kw">kw</option>
							</select>
						</div>
					</div>
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

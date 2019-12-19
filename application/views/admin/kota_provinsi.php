<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Kota Dan Provinsi</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#modalTambahProvinsi" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">Tambah Provinsi</a>
		<a href="#modalTambahKota" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">Tambah Kota</a>
	  </div>
	</div>
</div>

<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar Kota dan Provinsi yang ada.</p>
	<p>
		Opsi :
		<a href="#modalLihatProvinsi" role="button" data-toggle="modal">Lihat Semua Data Provinsi</a>
	</p> 
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
	<thead>
		<tr>
			<th>No.</th>
			<th>Provinsi</th>
			<th>Kota</th>
			<th>Pilihan</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if (count($kota) > 0) {
			$idx = 1;
			foreach ($kota as $list) {
				echo "<tr>";
				echo "<td>".$idx."</td>";
				echo "<td>".$list['nama_provinsi']."</td>";
				echo "<td>".$list['nama_kota']."</td>";
				echo "<td>";
				//echo "<a href=#>Ubah Provinsi</a>";
				//echo nbs(2)."/".nbs(2);
				echo "<a href=#>Ubah Kota</a>";
				echo nbs(2)."/".nbs(2);
				echo "<a href=#>Hapus Kota</a>";
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


<!-- Modal Tambah Provinsi -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/provinsi/add">
<div id="modalTambahProvinsi" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Provinsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="control-group">
			<label class="control-label" for="inputNamaProvinsi">Nama Provinsi</label>
			<div class="controls">
				<input type="text" class="form-control" id="inputNamaProvinsi" name="inputNamaProvinsi" placeholder="Provinsi">
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



<!-- Modal Tambah Kota -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/kota/add">
<div id="modalTambahKota" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Kota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="control-group">
			<label class="control-label" for="inputPilihProvinsi">Nama Provinsi</label>
			<div class="controls">
				<select name="inputPilihProvinsi" class="form-control">
					<?php 
					foreach ($provinsi as $list) {
						echo "<option value=".$list['id_provinsi'].">";
						echo $list['nama_provinsi'];
						echo "</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputNamaKota">Nama Kota</label>
			<div class="controls">
				<input type="text" class="form-control" id="inputNamaKota" name="inputNamaKota" placeholder="Nama">
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

<!-- Modal Lihat Provinsi -->
<div id="modalLihatProvinsi" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Provinsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
			<thead>
				<tr>
					<th width="40px">No.</th>
					<th>Nama Provinsi</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$idx = 1; 
				foreach ($provinsi as $list) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$list['nama_provinsi']."</td>";
					echo "<td><a href=#>Ubah</a></td>";
					echo "</tr>";
					$idx++;
				}
				?>
			</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Kembali</button>
      </div>
    </div>
  </div>
</div>
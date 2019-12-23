<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2"><?= $judul; ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" id="btnTambah" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data Agen
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar <i>agen</i>: </p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Provinsi</th>
				<th>Kota</th>
				<th>Alamat</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody></tbody>
</table>
</div>

<!-- form modal agen -->
<form class="form-horizontal" method="post" id="form_agen">
<div id="myModalAgen" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Agen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<p>Silahkan isi data <i>agen</i> yang ingin ditambahkan.</p>
			<fieldset>
				<input type="hidden" name="id_agen" id="id_agen">
				<input type="hidden" name="id_cabang" id="id_cabang_agen">
				<h6>Email dan Password</h6>
				<div class="control-group">
					<label class="control-label" for="email_agen">Email</label>
					<div class="controls">
						<input class="form-control" type="text" id="email_agen" name="email_agen" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password_agen">Password</label>
					<div class="controls">
						<input class="form-control" type="text" id="password_agen" name="password_agen" placeholder="Password">
					</div>
				</div>
			</fieldset>
			<hr>
			<fieldset>
				<h6>Data <i>Agen</i></h6>
				<div class="control-group">
					<label class="control-label" for="txtKotaCust">Kota</label>
					<div class="controls">
						<input type="text" class="form-control" readonly="" id="nama_kota_agen" name="NAMA_KOTA_AGEN">
						<input type="hidden" id="id_kota_agen" name="ID_KOTA_AGEN">
						<!-- <select class="form-control" id="id_kota_agen" name="ID_KOTA_AGEN" placeholder="Kota" readonly> -->
						<!-- </select> -->
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="nama_agen">Nama Agen</label>
					<div class="controls">
						<input class="form-control" type="text" id="nama_agen" name="nama_agen" placeholder="Nama Agen">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="alamat_agen">Alamat</label>
					<div class="controls">
						<textarea class="form-control" name="alamat_agen" id="alamat_agen" rows="3" placeholder="Alamat"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="no_telp_agen">No. Telepon</label>
					<div class="controls">
						<input class="form-control" type="number" name="no_telp_agen" id="no_telp_agen" 
							placeholder="No. Telepon">
					</div>
				</div>
			</fieldset>
      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>


<script type="text/javascript">
	var id_cabang = '<?= $this->session->userdata('id_cabang'); ?>';
</script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2"><?= $judul; ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" id="btnTambahAgen" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data Agen
		</a>
	  </div>
	</div>
</div>

<!-- form modal agen -->
<form class="form-horizontal" method="post" id="form_cabang">
  <div class="modal-body"> 
		<fieldset>
			<input type="hidden" name="id_cabang" id="id_cabang"> 
			<div class="control-group">
				<label class="control-label" for="email_cabang">Email</label>
				<div class="controls">
					<input class="form-control" type="text" id="email_cabang" name="email_cabang" placeholder="Email">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password_cabang">Password</label>
				<div class="controls">
					<input class="form-control" type="text" id="password_cabang" name="password_cabang" placeholder="Password">
				</div>
			</div>
		</fieldset>
		<hr>
		<fieldset> 
			<div class="control-group">
				<label class="control-label" for="txtKotaCust">Kota</label>
				<div class="controls">
					<!-- <input type="text" class="form-control" readonly="" id="nama_kota_cabang" name="NAMA_KOTA_cabang"> -->
					<!-- <input type="hidden" id="id_kota_cabang" name="ID_KOTA_cabang"> -->
					<select class="form-control" id="id_kota_cabang" name="ID_KOTA" placeholder="Kota">
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_cabang">Nama Cabang</label>
				<div class="controls">
					<input class="form-control" type="text" id="nama_cabang" name="nama_cabang" placeholder="Nama Agen">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="alamat_cabang">Alamat</label>
				<div class="controls">
					<textarea class="form-control" name="alamat_cabang" id="alamat_cabang" rows="3" placeholder="Alamat"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="no_telp_cabang">No. Telepon</label>
				<div class="controls">
					<input class="form-control" type="number" name="no_telp_cabang" id="no_telp_cabang" 
						placeholder="No. Telepon">
				</div>
			</div>
		</fieldset>
  </div>
  <div class="modal-footer">
	<button type="submit" class="btn btn-primary">Simpan</button>
	<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
  </div>
</form>


<script type="text/javascript">
	var id_cabang = '<?= $this->session->userdata('id_cabang'); ?>';
	var id_kota = '<?= $this->session->userdata('id_kota'); ?>';
	var id_provinsi = '<?= $this->session->userdata('id_provinsi'); ?>';
</script>
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
<form class="form-horizontal" method="post" id="form_agen">
  <div class="modal-body"> 
		<fieldset>
			<input type="hidden" name="id_agen" id="id_agen"> 
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
			<div class="control-group">
				<label class="control-label" for="txtKotaCust">Kota</label>
				<div class="controls">
					<!-- <input type="text" class="form-control" readonly="" id="nama_kota_agen" name="NAMA_KOTA_agen"> -->
					<!-- <input type="hidden" id="id_kota_agen" name="ID_KOTA_agen"> -->
					<select class="form-control" id="id_kota_agen" name="ID_KOTA_AGEN" placeholder="Kota">
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_agen">Nama Cabang</label>
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
</form>


<script type="text/javascript">
	var id_agen = '<?= $this->session->userdata('id_agen'); ?>';
	var id_cabang = '<?= $this->session->userdata('id_cabang'); ?>';
	var id_kota = '<?= $this->session->userdata('id_kota'); ?>';
	var id_provinsi = '<?= $this->session->userdata('id_provinsi'); ?>';
</script>
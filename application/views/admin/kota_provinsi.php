<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Kota Dan Provinsi</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="javascript:void(0)" id="btnTambahProvinsi" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">Tambah Provinsi</a>
		<a href="javascript:void(0)" id="btnTambahKota" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">Tambah Kota</a>
	  </div>
	</div>
</div>

<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar Kota dan Provinsi yang ada.</p>
	<p>
		Opsi :
		<a href="javascript:void(0)" id="btnLihatProvinsi" role="button" data-toggle="modal">Lihat Semua Data Provinsi</a>
	</p> 
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
	<thead>
		<tr> 
			<th>Provinsi</th>
			<th>Kota</th>
			<th></th>
		</tr>
	</thead>
	<tbody></tbody>
</table>
</div>


<!-- Modal Tambah Kota -->
<form class="form-horizontal" method="post" id="form_kota">
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
        	<input type="hidden" name="id_kota">
			<label class="control-label" for="id_provinsi">Nama Provinsi</label>
			<div class="controls">
				<select name="id_provinsi" id="id_provinsi" class="form-control"></select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="nama_kota">Nama Kota</label>
			<div class="controls">
				<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama">
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
        <table class="table table-hover" id="dataTableProvinsi" style="width:100%">
			<thead>
				<tr>
					<th>Nama Provinsi</th>
					<th> </th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Kembali</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Provinsi -->
<form class="form-horizontal" id="form_provinsi">
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
			<label class="control-label" for="nama_provinsi">Nama Provinsi</label>
			<div class="controls">
				<input type="hidden" name="id_provinsi" id="id_provinsi_input">
				<input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" placeholder="Provinsi">
				<div class="invalid-feedback"></div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
		<button type="submit" id="btnSubmitProvinsi" class="btn btn-primary">Simpan</button>
		<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>
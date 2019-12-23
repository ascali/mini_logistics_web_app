<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2"><?= $judul; ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" id="btnTambah" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data Cabang
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar <i>cabang</i>: <small><font color="red">lihat data agen pada pilihan</font></small></p>
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


<!-- Modal Tambah -->
<!-- <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/customer/add"> -->
<form class="form-horizontal" method="post" id="form_cabang">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Cabang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<p>Silahkan isi data <i>cabang</i> yang ingin ditambahkan.</p>
			<fieldset>
				<input type="hidden" name="id_cabang" id="id_cabang">
				<h6>Email dan Password</h6>
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
				<h6>Data <i>Cabang</i></h6>
				<div class="control-group">
					<label class="control-label" for="txtKotaCust">Kota</label>
					<div class="controls">
						<select class="form-control" id="id_kota" name="ID_KOTA" placeholder="Kota">
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="nama_cabang">Nama Cabang</label>
					<div class="controls">
						<input class="form-control" type="text" id="nama_cabang" name="nama_cabang" placeholder="Nama Cabang">
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
    </div>
  </div>
</div>
</form>




<!--  -->


<!-- AGEN MODAL TABLE -->
<div class="modal fade bd-example-modal-lg" id="modalAgen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Agen di Cabang <b id="titleCabang"></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="btn-toolbar mb-2 mb-md-0 float-right">
		  <div class="btn-group mr-2">
			<a href="javascript:void(0)" id="btnTambahAgen" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
				<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data Agen
			</a>
		  </div>
		</div>
		<br>
      	<hr>
		<div class="table-responsive">
			<table class="table table-striped table-sm" id="dataTableAgen" style="width:100%">
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
      </div>
      <div class="modal-footer">
		<button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
    </div>
  </div>
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

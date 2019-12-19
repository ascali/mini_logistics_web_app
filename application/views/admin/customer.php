<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Customer</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<a href="#myModal" role="button" class="btn btn-sm btn-outline-primary" data-toggle="modal">
			<i class="icon-plus-sign icon-white"></i>&nbsp;Tambah Data
		</a>
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah daftar <i>customer</i>:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Alamat</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($customer) > 0) {
				$idx = 1;
				foreach ($customer as $list) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$list['nama_cust']."</td>";
					echo "<td>".$list['email_cust']."</td>";
					echo "<td>".$list['no_telp_cust']."</td>";
					echo "<td>".$list['alamat_cust']." ".$list['kota_cust']."</td>";
					echo "<td>";
					echo anchor('customer/edit/'.$list['id_cust'], 'Detil', '');
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
			<p>Silahkan isi data <i>customer</i> yang ingin ditambahkan.</p>
			<fieldset>
				<legend>Email dan Password</legend>
				<div class="control-group">
					<label class="control-label" for="inputEmailCust">Email</label>
					<div class="controls">
						<input class="form-control" type="text" id="inputEmailCust" name="txtEmailCust" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPasswordCust">Password</label>
					<div class="controls">
						<input class="form-control" type="password" id="inputPasswordCust" name="txtPasswordCust" placeholder="Password">
					</div>
				</div>
			</fieldset>
			<hr>
			<fieldset>
				<legend>Data Pribadi <i>Customer</i></legend>
				<div class="control-group">
					<label class="control-label" for="inputNamaCust">Nama Lengkap</label>
					<div class="controls">
						<input class="form-control" type="text" id="inputNamaCust" name="txtNamaCust" placeholder="Nama Lengkap">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="rbJenisKelCust">Jenis Kelamin</label>
					<div class="controls">
						<label class="radio inline">
							<input type="radio" name="rbJenisKelCust" id="orLakiLaki" value="L">
							Laki-laki
						</label>
						<label class="radio inline">
							<input type="radio" name="rbJenisKelCust" id="orPerempuan" value="P">
							Perempuan
						</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="txtTglLahirCust">Tanggal Lahir</label>
					<div class="controls">
						<input class="form-control" type="text" name="txtTglLahirCust" class="datepicker" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="txtAlamatCust">Alamat</label>
					<div class="controls">
						<textarea class="form-control" name="txtAlamatCust" id="inputAlamat" rows="3" placeholder="Alamat"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="txtKotaCust">Kota</label>
					<div class="controls">
						<input class="form-control" type="text" name="txtKotaCust" placeholder="Kota">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="txtNoTelpCust">No. Telepon</label>
					<div class="controls">
						<input class="form-control" type="number" name="txtNoTelpCust" id="txtNoTelpCust" 
							placeholder="No. Telepon">
					</div>
				</div>
			</fieldset>
			<hr>
			<fieldset>
				<legend>Informasi Perusahaan</legend>
				<div class="control-group">
					<label class="control-label" for="txtPerusahaanCust">Nama Perusahaan</label>
					<div class="controls">
						<input class="form-control" type="text" name="txtPerusahaanCust" id="txtPerusahaanCust" 
							placeholder="Nama Perusahaan">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="cbBidangKerja">Bidang Kerja</label>
					<div class="controls">
						<select class="form-control" name="cbBidangKerja" id="cbBidangKerja">
							<?php
							foreach ($bidang as $option) {
								echo "<option value='".$option['id_bidang_kerja']."'>".$option['nama_bidang_kerja']."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="txtAlamatPerCust">Alamat Perusahaan</label>
					<div class="controls">
						<textarea class="form-control" id="txtAlamatPerCust" name="txtAlamatPerCust" rows="3" 
							placeholder="Alamat Perusahaan"></textarea>
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

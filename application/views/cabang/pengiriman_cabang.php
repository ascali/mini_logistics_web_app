<?php 
echo heading('Permintaan Pengiriman Barang', 3);
$id_cust = $this->session->userdata('id_cust');
?>

<hr>
<h5>Form Permintaan Pengiriman Barang</h5>
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/pengiriman/buat_pengiriman_cust_cabang">
	<input class="form-control" type="hidden" name="txtIdPengiriman" value="<?php echo $id; ?>">
	<div class="control-group">
		<label class="control-label" for="txtTglPengiriman">Tanggal Pengiriman</label>
		<div class="controls">
			<input class="form-control" type="date" id="txtTglPengiriman" class="datepicker" name="txtTglPengiriman" placeholder="YYYY-MM-DD">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="id_cust">Nama Customer</label>
		<div class="controls">
			<select class="form-control" id="id_cust" class="span4" name="id_cust">
				<option selected disabled="">-- Pilih Customer --</option>
				<?php
				foreach ($customer as $k) {
					echo "<option value='".$k['ID_CUST']."'>".$k['NAMA_CUST']."</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="cbKotaAsal">Kota Asal</label>
		<div class="controls">
			<select class="form-control" id="cbKotaAsal" class="span4" name="cbKotaAsal">
				<!-- <option value="1">Surabaya</option> -->
				<?php
				foreach ($kota as $k) {
					echo "<option value='".$k['id_kota']."'>".$k['nama_kota']."</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="cbKotaTujuan">Kota Tujuan</label>
		<div class="controls">
			<select class="form-control" id="cbKotaTujuan" class="span4" name="cbKotaTujuan">
				<?php
				foreach ($kota1 as $k1) {
					echo "<option value='".$k1['id_kota']."'>".$k1['nama_kota']."</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<!-- <label class="control-label" for="txtBeratPengiriman">Berat</label> -->
		<div class="controls">
			<input class="form-control" type="hidden" value="0" id="txtBeratPengiriman" class="span4" name="txtBeratPengiriman" placeholder="">
		</div>
	</div>
	<!--<div class="control-group">
		<label class="control-label" for="txtBiayaPengiriman">Biaya Pengiriman (Rp)</label>
		<div class="controls">
			<input class="form-control" type="number" id="txtBiayaPengiriman" name="txtBiayaPengiriman" placeholder="Biaya Pengiriman" disabled>
		</div>
	</div>-->
	<div class="control-group">
		<label class="control-label" for="txtNamaPenerima">Nama Penerima</label>
		<div class="controls">
			<input class="form-control" type="text" id="txtNamaPenerima" class="span4" name="txtNamaPenerima" placeholder="Nama Penerima">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="txtTujuanPengiriman">Organisasi Penerima</label>
		<div class="controls">
			<input class="form-control" type="text" id="txtTujuanPengiriman" class="span4" name="txtTujuanPengiriman" placeholder="Organisasi Penerima">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="txtAlamatPenerima">Alamat Pengiriman</label>
		<div class="controls">
			<textarea class="form-control" id="txtAlamatPenerima" class="span4" name="txtAlamatPenerima" rows="3" placeholder="Alamat Pengiriman"></textarea>
		</div>
	</div>
	<br><hr>
	<div class="form-actions">
    	<button type="submit" class="btn btn-primary">Lanjut</button>
    	<a href="<?php echo base_url(); ?>" class="btn">Batal</a>
    </div>
</form>
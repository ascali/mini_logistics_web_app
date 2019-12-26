<?php
echo heading($judul, 3);
if (count($tracking) > 0) {
	foreach ($tracking as $t) {
		$no_resi = $t['no_resi'];
		$id_pengiriman = $t['id_pengiriman'];
		$id_cust = $t['id_cust'];
		$status_pengiriman = $t['status_pengiriman'];
		$tanggal = $t['tanggal'];
		$posisi = $t['posisi'];
		$keterangan = $t['keterangan'];
	}
?>
<label class="label-inline" for="txtNoResi">Nomer Resi: &nbsp;
	<input type="text" class="form-control" id="txtNoResi" name="txtNoResi" value="<?php echo $no_resi; ?>" disabled>
	<input type="hidden" id="txtIdPengiriman" name="txtIdPengiriman" value="<?php echo $id_pengiriman; ?>" disabled>
	<input type="hidden" id="txtIdCust" name="txtIdCust" value="<?php echo $id_cust; ?>" disabled>
</label>
<fieldset>
	<legend>Detil Pengiriman</legend>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Lokasi</th>
				<th>Status Pengiriman</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (count($tracking) > 0) {
				foreach ($tracking as $t) {
					$status_pengiriman = $t['status_pengiriman'];
					$tanggal = date('d M Y', strtotime($t['tanggal']));
					$posisi = $t['posisi'];

					echo "<tr>";
					echo "<td>".$tanggal."</td>";
					echo "<td>".$posisi."</td>";
					echo "<td>".$status_pengiriman."</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='3'>Tidak ada data yang ditampilkan.</td></tr>";
			}
			?>
		</tbody>
	</table>
	<div style="text-align: center;">
		<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">
			<i class="icon-edit icon-white"></i>&nbsp;Perbarui Status Pengiriman
		</a>
	</div>
</fieldset>
<?php
} else {
	echo "<div>Terjadi kegagalan saat mengambil data.</div>";
}
?>
<div class="form-actions">
	<button class="btn btn-primary" onclick="javascript:window.history.back();">
		<i class="icon-chevron-left icon-white"></i>&nbsp;Kembali
	</button>
</div>

<!-- Modal -->
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/tracking/perbarui_data_agen">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Status Pengiriman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<input type="hidden" id="txtNoResi" name="txtNoResi" value="<?php echo $no_resi; ?>">
		<input type="hidden" id="txtIdPengiriman" name="txtIdPengiriman" value="<?php echo $id_pengiriman; ?>">
		<input type="hidden" id="txtIdCust" name="txtIdCust" value="<?php echo $id_cust; ?>">
		<div class="control-group">
			<label class="control-label" for="inputTanggal">Tanggal</label>
			<div class="controls">
				<input class="form-control" type="date" id="inputTanggal" class="datepicker input-medium" name="txtTanggalTracking" placeholder="YYYY-MM-DD">
				<span class="add-on"><i class="icon-calendar"></i>&nbsp;</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputStatus">Status Pengiriman</label>
			<div class="controls">
				<select class="form-control" id="inputStatus" name="cbStatusPengiriman">
					<?php
					if (empty($status)) {
						echo "<option>--pilih status pengiriman--</option>";
					} else {
						foreach ($status as $value) {
							echo "<option value='".$value['status_pengiriman']."'>".$value['status_pengiriman']."</option>";
						}
					}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPosisi">Posisi</label>
			<div class="controls">
				<input class="form-control" type="text" id="inputPosisi" name="txtPosisi" placeholder="Posisi">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputKeterangan">Keterangan</label>
			<div class="controls">
				<textarea class="form-control" id="inputKeterangan" name="txtKeterangan" placeholder="Keterangan"></textarea>
			</div>
		</div>
      </div>
      <div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			<i class="icon-remove"></i>&nbsp;Batal
		</button>
		<button type="submit" class="btn btn-primary">
			<i class="icon-check icon-white"></i>&nbsp;Simpan
		</button>
      </div>
    </div>
  </div>
</div>
</form>
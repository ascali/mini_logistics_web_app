<?php
echo heading($judul, 3);
if (count($tahun) > 0) {
?>
<div class="row-fluid">
	<div class="well span6">
		<form method="post" action="<?php echo base_url(); ?>index.php/laporan/bulanan">
			<fieldset>
				<legend>Laporan Bulanan</legend>
				<label class="label-inline">Pilih Tahun dan Bulan:</label>
				<div class="container row">
					<div class="col-md-2">
						<select class="form-control" name="cbTahun" class="input-small">
							<?php
								foreach ($tahun as $value) {
									$thn = $value['tahun'];
									echo "<option value='".$thn."'>".$thn."</option>";
								}
							?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control" name="cbBulan" class="input-small">
							<?php
								foreach ($bulan as $value) {
									$bln = $value['tahun'];
									echo "<option value='".$bln."'>".$bln."</option>";
								}
							?>
						</select>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Lihat Laporan</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="well span6">
		<form method="post" action="<?php echo base_url(); ?>index.php/laporan/tahunan">
			<fieldset>
				<legend>Laporan Tahunan</legend>
				<label class="label-inline">Pilih Tahun:</label>
				<div class="container row">
					<div class="col-md-2">
						<select class="form-control" name="cbTahun1" class="input-small">
							<?php
								foreach ($tahun as $value) {
									$thn = $value['tahun'];
									echo "<option value='".$thn."'>".$thn."</option>";
								}
							?>
						</select>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Lihat Laporan</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
<?php
} else {
	echo "<p>Gagal mengambil data.</p>";
}
?>
<?php
echo heading($judul, 3);
if (count($tahun) > 0) {
?>
<div class="row-fluid">
    <div class="well span6">
        <form method="post" action="<?php echo base_url(); ?>index.php/laporan/harian">
			<fieldset>
				<legend>Laporan Harian</legend>
				<label class="label-inline">Pilih Tanggal:</label>
				<div class="container row">
					<div class="col-md-2">
						<input class="form-control" type="date" name="date" />
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Lihat Laporan</button>
					</div>
				</div>
			</fieldset>
		</form>
    </div>
    <div class="well span6">
        <form method="post" action="<?php echo base_url(); ?>index.php/laporan/mingguan">
			<fieldset>
				<legend>Laporan Mingguan</legend>
				<label class="label-inline">Pilih Tanggal awal:</label>
				<div class="container row">
					<div class="col-md-2">
						<input class="form-control" type="date" name="date1" />
					</div>
					<div class="col-md-2">
						<input class="form-control" type="date" name="date2" />
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Lihat Laporan</button>
					</div>
				</div>
			</fieldset>
		</form>
    </div>
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
						    <option value=1>Januari</option>
						    <option value=2>Februari</option>
						    <option value=3>Maret</option>
						    <option value=4>April</option>
						    <option value=5>Mei</option>
						    <option value=6>Juni</option>
						    <option value=7>Juli</option>
						    <option value=8>Agustus</option>
						    <option value=9>September</option>
						    <option value=10>Oktober</option>
						    <option value=11>November</option>
						    <option value=12>Desember</option>
						    
							<?php
								// foreach ($bulan as $value) {
								// 	$bln = $value['tahun'];
								// 	echo "<option value='".$bln."'>".$bln."</option>";
								// }
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
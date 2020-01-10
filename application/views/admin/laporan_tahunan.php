<?php
echo heading($judul, 3);
if (count($jumlah) > 0) {
	foreach ($jumlah as $value) {
		$jml_pengiriman = $value['jumlah_pengiriman'];
	}
?>
<p>Periode: <?php echo $tahun.nbs(10); ?>Jumlah Pengiriman: <?php echo $jml_pengiriman; ?></p>
<?php
$tot = array();
foreach ($laporan as $value) {
	$kota = $value['kota'];
	$jml = $value['jumlah'];
	$bulan = $value['bulan'];
	$tahun = $value['tahun'];
	$biaya_pengiriman = $value['biaya_pengiriman'];
	$date = $tahun."-".$bulan."-01";
	$tgl = date("M Y", strtotime($date));
	array_push($tot, $biaya_pengiriman);
	?>
	<strong>Kota: <?php echo $kota; ?></strong>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Bulan</th>
				<th>Jumlah Pengiriman</th>
				<th>Jumlah Pengiriman</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $tgl; ?></td>
				<td><?php echo $jml; ?></td>
				<td><?php echo $biaya_pengiriman; ?></td>
			</tr>
		</tbody>
	</table>
	<?php
}
$total = array_sum($tot);
$total = number_format($total,2,",",".");
?>

<div class=row>
    <div class="col-md-1"><b>Total Biaya : </b></div>
    <div class="col-md-4"><b>Rp. <?= $total; ?> </b></div>
</div>
<br>  

<div style="text-align: center;">
	<button class="btn btn-primary" type="button" onclick="javascript:window.back();">
		<i class="icon-chevron-left icon-white"></i>&nbsp;Kembali
	</button>
	<a href="<?php echo base_url(); ?>index.php/laporan/cetak_tahunan/<?php echo $tahun; ?>" class="btn btn-primary">
		<i class="icon-print icon-white"></i>&nbsp;Cetak (PDF)
	</a>
</div>
<?php
} else {
	echo "<div class='well'>Tidak ada data yang ditampilkan</div>";
}
?>
<?php
echo heading($judul, 3);
$per1 = $date1;
$per2 = $date2;

echo "Periode: ".date('d M Y' ,strtotime($per1))." - ".date('d M Y' ,strtotime($per2));
if (count($laporan) > 0) {
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>No.</th>
			<th>No. Pengiriman</th>
			<th>Biayan</th>
			<th>Nama Pengirim</th>
			<th>Kota Tujuan</th>
			<th>Berat Pengiriman (Kg)</th>
			<th>Tanggal Pengiriman</th>
			<th>Status Terakhir</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$idx = 1;
		$tot = array();
		foreach ($laporan as $value) {
			$id_pengiriman = $value['id_pengiriman'];
			$nama_cust = $value['nama_cust'];
			$kota_tujuan = $value['nama_kota'];
			$berat_pengiriman = number_format($value['berat_pengiriman']);
			$tgl = $value['tanggal'];
			$tanggal = $tgl;
			$date = date('d M Y', strtotime($tanggal));
			$status_pengiriman = $value['status_pengiriman'];
			$biaya_pengiriman = $value['biaya_pengiriman'];
			array_push($tot, $biaya_pengiriman);
			echo "<tr>";
			echo "<td>".$idx."</td>";
			echo "<td>".$id_pengiriman."</td>";
			echo "<td>Rp. ".number_format($biaya_pengiriman,2,",",".")."</td>";
			echo "<td>".$nama_cust."</td>";
			echo "<td>".$kota_tujuan."</td>";
			echo "<td>".$berat_pengiriman." Kg</td>";
			echo "<td>".$date."</td>";
			echo "<td>".$status_pengiriman."</td>";
			echo "</tr>";
			$idx++;
		}
		$total = array_sum($tot);
		$total = number_format($total,2,",",".")
		?>
	</tbody>
	<tfoot>
	    <tr>
	        <td colspan=2>Total Biaya</td>
	        <td colspan=6><?=$total;?></td>
	    </tr>
	</tfoot>
</table>
<div style="text-align: center;">
	<button class="btn btn-primary" type="button" onclick="javascript:window.back();">
		<i class="icon-chevron-left icon-white"></i>&nbsp;Kembali
	</button>
	<a href="<?php echo base_url(); ?>index.php/laporan/cetak_mingguan/<?php echo $per1; ?>/<?php echo $per2; ?>" class="btn btn-primary">
		<i class="icon-print icon-white"></i>&nbsp;Cetak (PDF)
	</a>
</div>
<?php
} else {
	echo "<tr><td colspan='7'>Tidak ada data yang ditampilkan</td></tr>";
}
?>
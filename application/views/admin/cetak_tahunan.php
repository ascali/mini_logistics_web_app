<?php
// masukkan librari fpdf
require('assets/fpdf/fpdf.php');

// passing variabel
if (count($jumlah) > 0) {
	foreach ($jumlah as $value) {
		$jml_pengiriman = $value['jumlah_pengiriman'];
	}

	// buat dokumen pdf
	$pdf = new FPDF();
	$pdf->AddPage("", "A4");

	$pdf->SetAuthor("PT. Multiartha Retalindo Lestari");
	$pdf->SetTitle("Laporan Tahunan");

	$pdf->SetFont("Times", "B", "18");
	$pdf->Cell(0, 20, "PT. Multiartha Retalindo Lestari", "B", 1, "C");

	$pdf->SetFont("Times", "BU", "14");
	$pdf->Cell(0, 10, "Laporan Pengiriman Tahunan", 0, 1, "C");
	$pdf->SetFont("Times", "", "12");
	$pdf->Cell(0, 0, "Periode: ".$tahun, 0, 1, "C");
	$pdf->Ln(5);

	$pdf->Cell(0, 10, "Jumlah Pengiriman: ".$jml_pengiriman." Pengiriman", 0, 1, "L");

$tot = array();
	foreach ($laporan as $value) {
		$kota = $value['kota'];
		$jml = $value['jumlah'];
		$bulan = $value['bulan'];
		$tahun = $value['tahun'];
		$date = $tahun."-".$bulan."-01";
		$tgl = date("M Y", strtotime($date));
		
	$biaya_pengiriman = $value['biaya_pengiriman'];
	array_push($tot, $biaya_pengiriman);
	
		$pdf->SetFont("Times", "B", "12");
		$pdf->Cell(0, 5, "Kota: ".$kota, 0, 1, "L");
		$pdf->Cell(40, 5, "Bulan", 1, 0, "C");
		$pdf->Cell(30, 5, "Jumlah", 1, 1, "C");
		$pdf->SetFont("Times", "", "12");
		$pdf->Cell(40, 5, $tgl, 1, 0, "R");
		$pdf->Cell(30, 5, $jml, 1, 1, "C");
		
		$pdf->Cell(0, 5, "Biaya : Rp. ".number_format($biaya_pengiriman,2,",","."), 0, 1, "L");
		$pdf->Ln(2);
	}
$total = array_sum($tot);
$total = number_format($total,2,",",".");
		$pdf->Cell(0, 5, "Biaya Pengiriman: Rp. ".$total, 0, 1, "L");

	$pdf->Output("Laporan Tahunan (Periode ".$tahun.").pdf", "I");
} else {
	echo "Terjadi kesalahan!";
}
?>
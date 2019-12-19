<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2"><?php echo heading($judul, 3); ?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		
	  </div>
	</div>
</div>
<div class="d-flex p-2 bd-highlight">
	<p>Berikut adalah data pengiriman:</p>
</div>

<div class="table-responsive">
<table class="table table-striped table-sm" id="dataTable" style="width:100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Resi</th>
				<th>No. Pengiriman</th>
				<th>Nama Pengirim</th>
				<th>Operasi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$idx = 1;
			if (count($tracking) > 0) {
				foreach ($tracking as $value) {
					echo "<tr>";
					echo "<td>".$idx."</td>";
					echo "<td>".$value['no_resi']."</td>";
					echo "<td>".$value['id_pengiriman']."</td>";
					echo "<td>".$value['nama_cust']."</td>";
					echo "<td>".anchor('tracking/page_detil/'.$value['no_resi'], 
						"<i class='icon-th-list icon-white'></i>&nbsp;Detil", 
						array('class' => ''))."</td>";
					echo "</tr>";
					$idx++;
				}
			} else {
				echo "<tr><td colspan='5'>Tidak ada data yang ditampilkan.</td></tr>";
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

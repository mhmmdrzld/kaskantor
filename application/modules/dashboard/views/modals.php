<!-- sample modal content -->
<div id="detaildokumen" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Data Dokumen</h4>
			</div>
			<div class="modal-body">
				<table id="tabeldokumen" class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Kode Dokumen</th>
							<th>Tanggal</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if( ! empty($dokumen)){
						   $no = 1;
						   foreach($dokumen as $data){
							 echo "<tr>";
							 echo "<td  style='width:5%'>".$no++."</td>";
							 echo "<td style='width:40%'>".$data['kode_dokumen']."</td>";
							 echo "<td style='width:30%'>".date_indo($data['tanggal_dokumen'])."</td>";
							 echo "</tr>";
						   }
						 }
						 ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div id="detailkwitansi" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Data Kwitansi</h4>
			</div>
			<div class="modal-body">
				<table id="tabelkwitansi" class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Kode Kwitansi</th>
							<th>Tanggal Kwitansi</th>
							<th>Status</th>
							<th>Status Kas</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if( ! empty($kwitansi)){
						   $no = 1;
						   foreach($kwitansi as $data){
							 echo "<tr>";
							 echo "<td  style='width:5%'>".$no++."</td>";
							 echo "<td style='width:20%'>".$data['kode_kwitansi']."</td>";
							 echo "<td style='width:20%'>".date_indo($data['tanggal_kwitansi'])."</td>";
							 echo "<td style='width:10%'>".$data['status']."</td>";
							 echo "<td style='width:10%'>".$data['statuskas']."</td>";
							 echo "</tr>";
						   }
						 }
						 ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div id="detailkeperluan" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Data Keperluan</h4>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table id="tabelkeperluan" class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Keperluan</th>
								<th>Qty</th>
								<th>Kredit</th>
								<th>Status Uang</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if( ! empty($keperluan)){
						   $no = 1;
						   foreach($keperluan as $data){
							 echo "<tr>";
							 echo "<td  style='width:5%'>".$no++."</td>";
							 echo "<td style='width:30%'>".$data['nama_keperluan']."</td>";
							 echo "<td style='width:10%'>".$data['qty']."</td>";
							 echo "<td style='width:10%'>".$data['kredit']."</td>";
							 echo "<td style='width:10%'>".$data['statusuang']."</td>";
							 echo "</tr>";
						   }
						 }
						 ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div id="detailuser" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Data Pengguna</h4>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table id="tabeluser" class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Username</th>
								<th>Jabatan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if( ! empty($user)){
						   $no = 1;
						   foreach($user as $data){
							 echo "<tr>";
							 echo "<td  style='width:5%'>".$no++."</td>";
							 echo "<td style='width:30%'>".$data['nama']."</td>";
							 echo "<td style='width:10%'>".$data['email']."</td>";
							 echo "<td style='width:10%'>".$data['username']."</td>";
							 echo "<td style='width:10%'>".$data['jabatan']."</td>";
							 echo "</tr>";
						   }
						 }
						 ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Tutup</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

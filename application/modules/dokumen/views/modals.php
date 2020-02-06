<div id="Modaldokumen" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Data Kwitansi Kantor</h4>
			</div>
			<div class="modal-body">
			<form data-toggle="validator" method="post" action="<?php echo base_url("dokumen/save"); ?>">
			<div class="form-group">
						<label for="inputName1" class="control-label">Kode Dokumen</label>
						<input type="text" class="form-control" id="inputName1" name="kode_dokumen" placeholder="001" required>
					</div>
					<div class="form-group">
						<label for="inputName1" class="control-label">Dilaporkan Pada Tanggal</label>
						<input type="date" class="form-control" id="inputName1" name="tanggal_dokumen" required>
				</div>
				<div class="row">
				<div class="col-xs-6">
				<div class="table-responsive">
				<h5 class="text-center">Tabel Kwitansi Kantor</h5>
					<table id="tabelkantor" class="table table-striped">
						<thead>
							<tr>
								<th style="text-align: center"><input  type="checkbox" id="checkAll" ></th>
								<th style="text-align: center">Kode kwitansi</th>
								<th style="text-align: center">Tanggal Pembelian</th>
							</tr>
						</thead>
						<tbody>
							<?php
	 if( ! empty($kantor)){
	$no = 1;
	foreach($kantor as $data){
		 ?>
							<tr>
								<td style="width:20%;text-align: center ">
									<input type="checkbox"  name="pilih[]" value="<?php echo $data['id']; ?>" required><?php //echo $data['id']; ?>
								</td>
								<td style="width:20%;text-align: center ">
									<?php echo $data['kode_kwitansi'];?>
								</td>
								<td style="width:30%;text-align: center ">
									<?php echo $data['tanggal_kwitansi'];?>
								</td>
							</tr>
							<?php	}
  }
  ?>
						</tbody>
					</table>
				</div>
				</div>
				<div class="col-xs-6">
				<div class="table-responsive">
				<h5 class="text-center">Tabel Kwitansi Mess</h5>
					<table id="tabelmess" class="table table-striped">
						<thead>
							<tr>
								<th style="text-align: center"><input  type="checkbox" id="checkAll"></th>
								<th style="text-align: center">Kode kwitansi</th>
								<th style="text-align: center">Tanggal Pembelian</th>
							</tr>
						</thead>
						<tbody>
							<?php
	 if( ! empty($mess)){
	$no = 1;
	foreach($mess as $data){
		 ?>
							<tr>
								<td style="width:20%;text-align: center ">
									<input type="checkbox"  name="pilih[]" value="<?php echo $data['id']; ?>" required><?php //echo $data['id']; ?>
								</td>
								<td style="width:20%;text-align: center ">
									<?php echo $data['kode_kwitansi'];?>
								</td>
								<td style="width:30%;text-align: center ">
									<?php echo $data['tanggal_kwitansi'];?>
								</td>
							</tr>
							<?php	}
  }
  ?>
						</tbody>
					</table>
				</div>
				</div>
				</div>
			</div>
			<div class="modal-footer">
				<br>
				<button type="button" class="btn btn-info waves-effect btn-rounded" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-info waves-effect btn-rounded">Save</button>
				</form>

			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

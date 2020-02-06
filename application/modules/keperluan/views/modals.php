<!-- sample modal content -->
<div id="Modalkantor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Data Kwitansi Kantor</h4>
			</div>
			<div class="modal-body">
				<form data-toggle="validator" method="post" action="<?php echo base_url("kwitansi/save"); ?>">
					<div class="form-group">
						<label for="inputName1" class="control-label">Kode kwitansi</label>
						<input type="text" class="form-control" id="inputName1" name="kode_kwitansi" placeholder="001" required>
					</div>
					<div class="form-group">
						<label for="inputName1" class="control-label">Tanggal Pembelian</label>
						<input type="date" class="form-control" id="tanggal" name="tanggal_kwitansi" required>
					</div>

					<button class="btn btn-info btn-rounded" type="button" id="btn-tambah-formkep">Tambah Data Form</button>
					<button class="btn btn-info btn-rounded" type="button" id="btn-reset-formkep">Reset Form</button><br><br>
					<b>Keperluan :</b>
					<table>
						<div class="form-row">
							<td>
								<div class="col">
									<label class="control-label">Nama Keperluan</label>
									<input type="text" class="form-control" placeholder="Nama Keperluan" name="nama_keperluan[]" required>
								</div>
							</td>
							<td>
								<div class="col">
									<label class="control-label">Qty</label>
									<input type="text" class="form-control" placeholder="Qty" name="qty[]" required>
								</div>
						</div>
						<td>
							<div class="col">
								<label class="control-label">Kredit</label>
								<input type="text" class="form-control" placeholder="Kredit" name="kredit[]" required>
							</div>
						</td>
			</div>
			</table>
			<br>
			<div id="insert-formkep"></div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-info waves-effect btn-rounded" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-info waves-effect btn-rounded">Simpan</button>
			</form>

		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div id="Modalmess" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Data Kwitansi Mess</h4>
			</div>
			<div class="modal-body">
				<form data-toggle="validator" method="post" action="<?php echo base_url("kwitansi/savemess"); ?>">
					<label for="inputName1" class="control-label">Kode kwitansi</label>
					<div class="input-group">
						<!-- <label for="inputName1" class="control-label">Kode kwitansi</label> -->
						<span class="input-group-addon" id="basic-addon1">m.</span>
						<input name="kode_kwitansi" type="text" class="form-control" placeholder="001" aria-describedby="basic-addon1">
						<!-- <input type="text" class="form-control" id="inputName1" name="kode_kwitansi" placeholder="001" required> -->
					</div><br>
					<div class="form-group">
						<label for="inputName1" class="control-label">Tanggal Pembelian</label>
						<input type="date" class="form-control" id="inputName1" name="tanggal_kwitansi" required>
					</div>

					<button class="btn btn-info btn-rounded" type="button" id="btn-tambah-formkepmess">Tambah Data Form</button>
					<button class="btn btn-info btn-rounded" type="button" id="btn-reset-formkepmess">Reset Form</button><br><br>
					<b>Keperluan :</b>
					<table>
						<div class="form-row">
							<td>
								<div class="col">
									<label class="control-label">Nama Keperluan</label>
									<input type="text" class="form-control" placeholder="Nama Keperluan" name="nama_keperluan[]" required>
								</div>
							</td>
							<td>
								<div class="col">
									<label class="control-label">Qty</label>
									<input type="text" class="form-control" placeholder="Qty" name="qty[]" required>
								</div>
							</td>
							<td>
								<div class="col">
									<label class="control-label">Debet</label>
									<input type="text" class="form-control" placeholder="Kredit" name="kredit[]" required>
								</div>
							</td>
							<td>
								<div class="col">
									<label class="control-label">Status Uang</label>
									<select class="form-control selectpicker" data-style="form-control" name="statusuang[]" required>
										<option value="UangKantor">Uang Kantor</option>
										<option value="UangBapak">Uang Bapak</option>
									</select>
								</div>
							</td>
						</div>
					</table>
					<br>
					<div id="insert-formkepmess"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect btn-rounded" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-info waves-effect btn-rounded">Simpan</button>
				</form>

			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div id="Modalkeperluan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Tambah Data Keperluan</h4>
				</div>
				<div class="modal-body">
					<form data-toggle="validator" method="post" action="<?php echo base_url("keperluan/save"); ?>">
	
						<button class="btn btn-info btn-rounded" type="button" id="btn-tambah-formkepmod">Tambah Data Form</button>
						<button class="btn btn-info btn-rounded" type="button" id="btn-reset-formkepmod">Reset Form</button><br><br>
						<table>
							<div class="form-row">
								<td>
									<div class="col">
										<label class="control-label">Nama Keperluan</label>
										<input type="text" class="form-control" placeholder="Nama Keperluan" name="nama_keperluan[]" required>
									</div>
								</td>
								<td>
									<div class="col">
										<label class="control-label">Qty</label>
										<input type="text" class="form-control" placeholder="Qty" name="qty[]" required>
									</div>
							</div>
							<td>
								<div class="col">
									<label class="control-label">Kredit</label>
									<input type="text" class="form-control" placeholder="Kredit" name="kredit[]" required>
								</div>
							</td>
				</div>
				</table>
				<br>
				<div id="insert-formkepmod"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect btn-rounded" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-info waves-effect btn-rounded">Simpan</button>
				</form>
	
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

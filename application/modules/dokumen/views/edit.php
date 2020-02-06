<div class="row">
	<div class="col-sm-4">
		<div class="white-box">
			<?php
				if( ! empty($dok)){
				foreach($dok as $data){ ?>
			<form data-toggle="validator" method="post" action="<?php echo base_url("dokumen/update/".$data['id']); ?>">
				<div class="form-group">
					<label for="inputName1" class="control-label">Kode Dokumen</label>
					<input type="text" class="form-control" id="inputName1" name="kode_dokumen" value="<?php echo $data['kode_dokumen'];?>"
					>
				</div>
				<div class="form-group">
					<label for="inputName1" class="control-label">Tanggal Dokumenn</label>
					<input type="date" class="form-control" id="tanggal" name="tanggal_Dokumen" value="<?php echo $data['tanggal_dokumen'];?>"
					 required>
				</div>
				<?Php }}?>
				<button style="text-align: right;" type="submit" class="btn btn-info waves-effect btn-rounded">Save</button>
				<a href="<?php echo base_url('dokumen')?>" type="button" class="btn btn-info waves-effect btn-rounded">Kembali</a>
			</form>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<button style="text-align: right;" data-toggle="modal" data-target="#Modalkeperluan" type="submit" class="btn btn-info waves-effect btn-rounded">Tambah</button></div>
			<div class="panel-wrapper collapse in table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Kode Kwitansi</th>
							<th>Tanggal Kwitansi</th>
							<th>Status kas</th>
							<!-- <th>Total Kredit</th> -->
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if( ! empty($kwi)){
									$no = 1;
									$totalkep = 0;
									foreach($kwi as $data){
							echo'<tr>	 
									<td style="text-align: center;">'.$no++.'</td>
									<td style="padding-left: 5px;">'.$data['kode_kwitansi'].'</td>	
									<td style="padding-left: 5px;">'.$data['tanggal_kwitansi'].'</td>
									<td style="padding-left: 5px;">'.$data['statuskas'].'</td>
									<td style="padding-left: 5px;">
										<a href="'.base_url("kwitansi/edit/".$data['id']).'" type="button" class="btn btn-info btn-circle"><i class="fa  fa-pencil-square-o"></i> </a>
										<a href="'.base_url("kwitansi/delete/".$data['id']).'" type="button" class="btn btn-info btn-circle"><i class="fa  fa-trash-o"></i> </a>
									</td>
								</tr> ';
							}
							
						}
								?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

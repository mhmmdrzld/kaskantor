<div class="row">
	<div class="col-sm-4">
		<div class="white-box">
			<?php
				if( ! empty($kwitansi)){
				foreach($kwitansi as $data){ ?>
			
				<div class="form-group">
					<label for="inputName1" class="control-label">Kode kwitansi</label>
					<input type="text" class="form-control" id="inputName1" name="kode_kwitansi" value="<?php echo $data['kode_kwitansi'];?>"
					readonly>
				</div>
				<div class="form-group">
					<label for="inputName1" class="control-label">Tanggal Pembelian</label>
					<input type="date" class="form-control" id="tanggal" name="tanggal_kwitansi" value="<?php echo $data['tanggal_kwitansi'];?>"
					 required readonly>
				</div>
				<?Php }}?>
			
				<a href="<?php echo base_url('kwitansi')?>" type="button" class="btn btn-info waves-effect btn-rounded">Kembali</a>
			
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
                    Data Keperluan
            </div>
			<div class="panel-wrapper collapse in table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Nama Keperluan</th>
							<th>Qty</th>
							<th>Kredit (Rp)</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if( ! empty($kep)){
									$no = 1;
									$totalkep = 0;
									foreach($kep as $data){
							echo'<tr>	 
									<td style="text-align: center;">'.$no++.'</td>
									<td style="padding-left: 5px;">'.$data['nama_keperluan'].'</td>	
									<td style="padding-left: 5px;">'.$data['qty'].'</td>
									<td style="padding-left: 5px;">'.rupiah($data['kredit']).'</td>
								</tr> ';
							$totalkep += $data['kredit'];
							}
							echo '<tr>
									<td style="text-align:center;" colspan="3">Total</td>
									<td>Rp. '.rupiah($totalkep).',-</td>
								</tr>';
						}
								?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

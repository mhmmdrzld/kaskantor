<div class="row">
	<div class="col-sm-4">
		<div class="white-box">
			<?php
				if( ! empty($kwitansi)){
				foreach($kwitansi as $data){
					$statuskas= $data['statuskas']; ?>
			<form data-toggle="validator" method="post" action="<?php echo base_url("kwitansi/update/".$data['id']); ?>">
				<div class="form-group">
					<label for="inputName1" class="control-label">Kode kwitansi</label>
					<input type="text" class="form-control" id="inputName1" name="kode_kwitansi" value="<?php echo $data['kode_kwitansi'];?>"
					>
				</div>
				<div class="form-group">
					<label for="inputName1" class="control-label">Tanggal Pembelian</label>
					<input type="date" class="form-control" id="tanggal" name="tanggal_kwitansi" value="<?php echo $data['tanggal_kwitansi'];?>"
					 required>
				</div>
				<div  class="form-group">
				<label class="control-label">Status Kas</label>
									<select class="form-control selectpicker" data-style="form-control" name="statuskas" required>
									<?php if($data['statuskas']=="Kantor"){?>
										<option value="Kantor">Kantor</option>
										<option value="Mess">Mess</option>
									<?php }else {?>
										<option value="Mess">Mess</option>
										<option value="Kantor">Kantor</option>
									<?php }?>
										
									</select>
				</div>
				<?Php }}?>
				<button style="text-align: right;" type="submit" class="btn btn-info waves-effect btn-rounded">Ubah</button>
				<a href="<?php echo base_url('kwitansi')?>" type="button" class="btn btn-info waves-effect btn-rounded">Kembali</a>
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
							<th>Nama Keperluan</th>
							<th>Qty</th>
							<th>Kredit (Rp)</th>
							<?php if($data['statuskas']=="Mess"){?>
								<th>Status Uang</th>
							<?php } ?>
							<th>Kelola</th>
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
									<td style="padding-left: 5px;">'.rupiah($data['kredit']).'</td>';
								if($statuskas=="Mess"){
									echo '<td style="padding-left: 5px;">'.$data['statusuang'].'</td>';
								}
							echo '<td style="padding-left: 5px;">
										<a href="'.base_url("keperluan/edit/".$data['id']).'" type="button" class="btn btn-info btn-circle"><i class="fa  fa-pencil-square-o"></i> </a>
										<a href="'.base_url("keperluan/delete/".$data['id']).'" type="button" class="btn btn-info btn-circle"><i class="fa  fa-trash-o"></i> </a>
									</td>
								</tr> ';
							$totalkep += $data['kredit'];
							}
							if ($statuskas=="Mess"){
								$colspan = "4";
							}else{
								$colspan ="3";
							}
							echo '<tr>
									<td style="text-align:center;" colspan="'.$colspan.'">Total</td>
									<td>Rp. '.rupiah($totalkep).',-</td>
									<td></td>
								</tr>';
						}
								?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

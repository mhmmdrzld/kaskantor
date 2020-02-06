<div class="row">
    <div class ="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="white-box">
                <?php
                if( ! empty($kep)){
               foreach($kep as $data){ ?> 
        <form data-toggle="validator" method="post" action="<?php echo base_url("keperluan/update"); ?>">
					<div class="form-group">
                        <label class="control-label">Nama Keperluan</label>
                        <input type="hidden" class="form-control" id="inputName" name="kode_keperluan" value="<?php echo $data['id']; ?>" required>
						<input type="text" class="form-control" name="nama_keperluan" placeholder="Nama keperluan" value="<?php echo $data['nama_keperluan']; ?>" required>
					</div>
					<div class="form-group">
						<label class="control-label">Qty</label>
						<input type="text" class="form-control" name="qty" placeholder="Qty" value="<?php echo $data['qty']; ?>"  required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label class="control-label">Kredit	<?php echo $data['statusuang'];?></label>
						<input type="text" class="form-control" name="kredit" placeholder="kredit" value="<?php echo $data['kredit']; ?>"  required>
					</div>
					<?php if($data['statuskas']=="Mess"){?>
						<td>
						<div class="col">
							<label class="control-label">Status Uang</label>
							<select class="form-control selectpicker" data-style="form-control" name="statusuang" required>
							<?php if($data['statusuang']=="UangKantor"){?>
								<option value="UangKantor">Uang Kantor</option>
								<option value="UangBapak">Uang Bapak</option>
							<?php }else{ ?>
								<option value="UangBapak">Uang Bapak</option>
								<option value="UangKantor">Uang Kantor</option>
							<?php } ?>
							</select>
						</div>
					</td>
					<br>
					<?php } ?>
					
					
			<div class="form-group">
				<button type="submit" class="btn btn-info waves-effect btn-rounded">Simpan</button>
				<a href="<?php echo base_url('kwitansi')?>" type="button" class="btn btn-info waves-effect btn-rounded">Kembali</a>
            </div>
				</form>
                <?php	}
            }
            ?>
        </div>
        <div class ="col-sm-3"></div>
	</div>
</div>

<div class="row">
    <div class ="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="white-box">
                <?php
                if( ! empty($office)){
               foreach($office as $data){ ?> 
        <form data-toggle="validator" id="submit">
					<div class="form-group">
						<label class="control-label">Nama Perusahaan</label>
						<input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $data['id']; ?>" required>
						<input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama perusahaan" value="<?php echo $data['nama_perusahaan']; ?>" required>
					</div>
					<div class="form-group">
                   		 <input type="file" name="logo">
 					</div>
					
			<div class="form-group">
				<button type="submit" class="btn btn-info waves-effect btn-rounded">Simpan</button>
				<a href="<?php echo base_url('dashboard')?>" type="button" class="btn btn-info waves-effect btn-rounded">Kembali</a>
            </div>
				</form>
                <?php	}
            }
            ?>
        </div>
        <div class ="col-sm-3"></div>
</div>

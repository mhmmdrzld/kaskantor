<div class="row">
    <div class ="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="white-box">
                <?php
                if( ! empty($pengguna)){
               foreach($pengguna as $data){ ?> 
        <form data-toggle="validator" method="post" action="<?php echo base_url("user/update"); ?>">
					<div class="form-group">
                        <label class="control-label">Nama Lengkap</label>
                        <input type="hidden" class="form-control" id="inputName" name="id" value="<?php echo $data['id']; ?>" required>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>" required>
					</div>
					<div class="form-group">
						<label class="control-label">E-mail</label>
						<input type="email" class="form-control" name="email" placeholder="E-mail"data-error="Maaf, Alamat E-mail Tidak Valid" value="<?php echo $data['email']; ?>"  required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label class="control-label">Jabatan</label>
						<input type="text" class="form-control" name="jabatan" placeholder="jabatan" value="<?php echo $data['jabatan']; ?>"  required>
					</div>
					<div class="form-group">
						<label class="control-label">Nama Pengguna</label>
						<input type="text" class="form-control" name="username" placeholder="Nama Pengguna" value="<?php echo $data['username']; ?>"  required>
					</div>
					<div class="form-group">
						<label class="control-label">Kata Sandi</label>
						<div class="row">
                                      <div class="col-sm-6">
                                          <input type="password" data-toggle="validator" data-minlength="5" class="form-control" id="inputPassword" placeholder="Kata Sandi" name="password" required> <span class="help-block">Minimal 5 karakter</span> 
                                        </div>
                                      <div class="col-sm-6">
                                          <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword" data-match-error="Whoops, kata sandi tidak cocok" placeholder="Konfirmasi" data-error="Silahkan Isi Bagian Ini"   required>
                                          <div class="help-block with-errors"></div>
                                      </div>
                         </div>
					</div>
					<div class="form-group" style="margin-top:-10px">
						<label class="control-label">Hak Akses</label>
						<select name="level"  class="selectpicker" data-style="form-control" require>
                            <?php if($data['level']==1){ echo '<option value="1">Administrator</option><option value="2">Akuntan</option>';}else{ echo '<option value="2">Akuntan</option><option value="1">Administrator</option>';};?>



						</select> 
					</div>
			<div class="form-group">
                <button type="submit" class="btn btn-info waves-effect btn-rounded">Ubah</button>
            </div>
				</form>
                <?php	}
            }
            ?>
        </div>
        <div class ="col-sm-3"></div>
	</div>
</div>

<div id="Modaldokumen" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Data Pengguna</h4>
			</div>
			<div class="modal-body">

				<form data-toggle="validator" method="post" action="<?php echo base_url("user/save"); ?>">
					<div class="form-group">
						<label class="control-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-group">
						<label class="control-label">E-mail</label>
						<input type="email" class="form-control" name="email" placeholder="E-mail"data-error="Maaf, Alamat E-mail Tidak Valid"  required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label class="control-label">Jabatan</label>
						<input type="text" class="form-control" name="jabatan" placeholder="jabatan"  required>
					</div>
					<div class="form-group">
						<label class="control-label">Nama Pengguna</label>
						<input type="text" class="form-control" name="username" placeholder="Nama Pengguna"  required>
					</div>
					<div class="form-group">
						<label class="control-label">Kata Sandi</label>
						<div class="row">
                                      <div class="col-sm-6">
                                          <input type="text" data-toggle="validator" data-minlength="5" class="form-control" id="inputPassword" placeholder="Kata Sandi" name="password" required> <span class="help-block">Minimal 5 karakter</span> 
                                        </div>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword" data-match-error="Whoops, kata sandi tidak cocok" placeholder="Konfirmasi" data-error="Silahkan Isi Bagian Ini"   required>
                                          <div class="help-block with-errors"></div>
                                      </div>
                         </div>
					</div>
					<div class="form-group" style="margin-top:-10px">
						<label class="control-label">Hak Akses</label>
						<select name="level"  class="selectpicker" data-style="form-control" require>
							<option value="2">Akuntan</option>
							<option value="3">Manager</option>
							<option value="1">Administrator</option>
						</select> 
					</div>
				
			</div>
			<div class="modal-footer">
				<br>
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

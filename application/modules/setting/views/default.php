 <div class="row">
       <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <img width="200%" alt="user" src="<?= base_url('asset/plugins/images/heading-bg/slide3.jpg');?>">
                                <div class="overlay-box" style="background:#2cabe3">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?= base_url('asset/plugins/images/users/user.png');?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $this->session->userdata("nama"); ?></h4>
                                        <h5 class="text-white"><?php echo $this->session->userdata("email"); ?></h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1> -->
                                 </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1>  -->
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                      <div class="white-box">
                      <?php
						 if( ! empty($user)){
						foreach($user as $data){ ?> 
                          <form data-toggle="validator" action="<?php echo base_url("setting/update"); ?>" method="post">
                         <div class="form-group">
                            
                              <!-- <input type="text" name="id" value="<?php //echo $data->id ?>"> -->
                                  <label for="inputName" class="control-label">Name</label>
                                  <input type="hidden" class="form-control" id="inputName" name="id" value="<?php echo $data['id']; ?>" required>
                                  <input type="text" class="form-control" id="inputName" name="nama" value="<?php echo $data['nama']; ?>" required>
                             </div>
                           
                              <div class="form-group">
                                  <label for="inputEmail2" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail2" placeholder="Email" data-error="Maaf, Alamat E-mail Tidak Valid" name="email" value="<?php echo $data['email']; ?>" required>
                                  <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group">
                                  <label for="inputjabatan" class="control-label">Jabatan</label>
                                  <input type="text" class="form-control" id="inputjabatan" name="jabatan"  value="<?php echo $data['jabatan']; ?>" required>
                            </div>
                              <div class="form-group">
                                  <label for="inputUsername" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="inputName" name="username"  value="<?php echo $data['username']; ?>" required>
                            </div>
                              <div class="form-group">
                                  <label for="inputPassword2" class="control-label">Password</label>
                                  <div class="row">
                                      <div class="form-group col-sm-6">
                                          <input type="password" data-toggle="validator" data-minlength="5" class="form-control" id="inputPassword" placeholder="Password" name="password" required> <span class="help-block">Minimal 5 karakter</span> 
                                    </div>
                                      <div class="form-group col-sm-6">
                                          <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword"  data-match-error="Whoops, kata sandi tidak cocok" placeholder="Konfirmasi" data-error="Silahkan Isi Bagian Ini" required>
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>
                            
                              <div class="form-group">
                                  <button type="submit" class="btn btn-success">Update Profile</button>
                              </div>
                          </form>
                          <?php	}
					  }
					  ?>
                      </div>
                    </div>
 </div>
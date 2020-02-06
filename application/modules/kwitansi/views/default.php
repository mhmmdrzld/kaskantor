<div class="row">

	<div class="col-sm-12">
		<div class="white-box">

			

			<section class="m-t-40">
				<div class="sttabs tabs-style-iconbox">
					<nav>
						<ul>
							<li><a href="#section-kaskantor" class="sticon  ti-bag"><span>KAS KANTOR</span></a></li>
							<li><a href="#section-kasmess" class="sticon ti-home"><span>KAS MESS</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap text-center">
						<section id="section-kaskantor">
						<?php if($this->session->userdata('level')==='2'){ ?>
							<div class="row">
								<button data-toggle="modal" data-target="#Modalkantor" class="btn btn-info btn-rounded" type="button" id="btn-tambah-form">Tambah
									Data</button>
								<br>
							</div>
							<div class="table-responsive">
								<table id="myTables" class="table table-striped">
									<thead>
										<tr>
											<th style="text-align: center">No</th>
											<th style="text-align: center">Kode kwitansi</th>
											<th style="text-align: center">Tanggal Pembelian</th>
											<th style="text-align: center">Status</th>
											<th style="text-align: center">Kelola</th>
										</tr>
									</thead>
									<tbody>
										<?php
						 if( ! empty($kwitansi)){
						$no = 1;
						foreach($kwitansi as $data){
							 ?>
						   <tr> 
								<td  style= "width:5% "><?php echo $no++ ?></td> 
								<td style= "width:20% "><?php echo $data['kode_kwitansi'];?></td> 
								<td style= "width:30% "><?php echo shortdate_indo($data['tanggal_kwitansi']);?></td> 
								<td style= "width:25% "><span class="label label-rouded  <?php if($data['status'] == "Aktif"){ echo "label-info";}else{ echo "label-danger";} ?>"><?php echo $data['status'];?></span></td> 
								<td style= "width:20%; text-align:center; "> 
								<?php if($data['status']=="Aktif"){?>
											<a href= "<?php echo base_url("kwitansi/edit/".$data['id']);?>" type= "button" data-toggle= "tooltip" data-original-title= "edit" class= "btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-pencil-alt "></i></a>
											<a href= "<?php echo base_url( "kwitansi/delete/".$data['id']);?> " id="sa-params"  data-toggle= "tooltip" data-original-title= "delete" class="ini_alert btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-trash "></i></a>
									<?php }else {?>
										<a href= "<?php echo base_url( "kwitansi/detail/".$data['id']);?> "   data-toggle= "tooltip" data-original-title= "Lihat" class="btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-eye"></i></a>
									<?php }?>
							</td> 
						   </tr> 
					<?php	}
					  }
					  ?>
									</tbody>
								</table>
							</div>
					<?php }elseif($this->session->userdata('level')==='3'){ ?>
						<div class="row">
								
								<br>
							</div>
							<div class="table-responsive">
								<table id="myTables" class="table table-striped">
									<thead>
										<tr>
											<th style="text-align: center">No</th>
											<th style="text-align: center">Kode kwitansi</th>
											<th style="text-align: center">Tanggal Pembelian</th>
											<th style="text-align: center">Status</th>
											<th style="text-align: center">Kelola</th>
										</tr>
									</thead>
									<tbody>
										<?php
						 if( ! empty($kwitansi)){
						$no = 1;
						foreach($kwitansi as $data){
							 ?>
						   <tr> 
								<td  style= "width:5% "><?php echo $no++ ?></td> 
								<td style= "width:20% "><?php echo $data['kode_kwitansi'];?></td> 
								<td style= "width:30% "><?php echo shortdate_indo($data['tanggal_kwitansi']);?></td> 
								<td style= "width:25% "><span class="label label-rouded  <?php if($data['status'] == "Aktif"){ echo "label-info";}else{ echo "label-danger";} ?>"><?php echo $data['status'];?></span></td> 
								<td style= "width:20%; text-align:center; ">
										<a href= "<?php echo base_url( "kwitansi/detail/".$data['id']);?> "   data-toggle= "tooltip" data-original-title= "Lihat" class="btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-eye"></i></a>
							
							</td> 
						   </tr> 
					<?php	}
					  }
					  ?>
									</tbody>
								</table>
							</div>
					<?php } ?>
						</section>


						<section id="section-kasmess">

						<?php if($this->session->userdata('level')==='2'){ ?>
							<div class="row">
								<button data-toggle="modal" data-target="#Modalmess" class="btn btn-info btn-rounded" type="button" id="btn-tambah-form">Tambah
									Data</button>
								<br>
							</div>
							<div class="table-responsive">
									<table id="myTable" class="table table-striped">
										<thead>
											<tr>
												<th style="text-align: center">No</th>
												<th style="text-align: center">Kode kwitansi</th>
												<th style="text-align: center">Tanggal Pembelian</th>
												<th style="text-align: center">Status</th>
												<th style="text-align: center">Kelola</th>
											</tr>
										</thead>
										<tbody>
											<?php
							 if( ! empty($kwitansim)){
							$no = 1;
							foreach($kwitansim as $data){
								 ?>
							   <tr> 
							   <td  style= "width:5% "><?php echo $no++ ?></td> 
							   <td style= "width:20% "><?php echo $data['kode_kwitansi'];?></td> 
							   <td style= "width:30% "><?php echo shortdate_indo($data['tanggal_kwitansi']);?></td> 
							   <td style= "width:25% "><span class="label label-rouded  <?php if($data['status'] == "Aktif"){ echo "label-info";}else{ echo "label-danger";} ?>"><?php echo $data['status'];?></span></td> 
							   <td style= "width:20%; text-align:center; "> 
							   <?php if($data['status']=="Aktif"){?>
											<a href= "<?php echo base_url("kwitansi/edit/".$data['id']);?>" type= "button" data-toggle= "tooltip" data-original-title= "edit" class= "btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-pencil-alt "></i></a>
											<a href= "<?php echo base_url( "kwitansi/delete/".$data['id']);?> " id="sa-params"  data-toggle= "tooltip" data-original-title= "delete" class="ini_alert btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-trash "></i></a>
									<?php }else {?>
										<a href= "<?php echo base_url( "kwitansi/detail/".$data['id']);?> "   data-toggle= "tooltip" data-original-title= "Lihat" class="btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-eye"></i></a>
									<?php }?>
									</td> 
							   </tr> 
						<?php	}
						  }
						  ?>
										</tbody>
									</table>
								</div>
						<?php }elseif($this->session->userdata('level')==='3'){ ?>
							<div class="row">
								
								<br>
							</div>
							<div class="table-responsive">
									<table id="myTable" class="table table-striped">
										<thead>
											<tr>
												<th style="text-align: center">No</th>
												<th style="text-align: center">Kode kwitansi</th>
												<th style="text-align: center">Tanggal Pembelian</th>
												<th style="text-align: center">Status</th>
												<th style="text-align: center">Kelola</th>
											</tr>
										</thead>
										<tbody>
											<?php
							 if( ! empty($kwitansim)){
							$no = 1;
							foreach($kwitansim as $data){
								 ?>
							   <tr> 
							   <td  style= "width:5% "><?php echo $no++ ?></td> 
							   <td style= "width:20% "><?php echo $data['kode_kwitansi'];?></td> 
							   <td style= "width:30% "><?php echo shortdate_indo($data['tanggal_kwitansi']);?></td> 
							   <td style= "width:25% "><span class="label label-rouded  <?php if($data['status'] == "Aktif"){ echo "label-info";}else{ echo "label-danger";} ?>"><?php echo $data['status'];?></span></td> 
							   <td style= "width:20%; text-align:center; "> 
										<a href= "<?php echo base_url( "kwitansi/detail/".$data['id']);?> "   data-toggle= "tooltip" data-original-title= "Lihat" class="btn btn-info btn-outline btn-circle btn-lg m-r-5 "><i class= "ti-eye"></i></a>
									
									</td> 
							   </tr> 
						<?php	}
						  }
						  ?>
										</tbody>
									</table>
								</div>
							<?php } ?>	
						</section>
					</div>
					<!-- /content -->
				</div>
				<!-- /tabs -->
			</section>
		</div>
	</div>
</div>

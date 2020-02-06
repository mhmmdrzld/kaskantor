<!-- <div class="row">
    <div class="col-sm-12">
            <div class="white-box p-l-20 p-r-20">
           
        </div>
    </div>
 </div> -->
<?php if($this->session->userdata('level')==='2'){?>
<div class="row">
	<div class="col-sm-12">
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detaildokumen">
				<h3 class="box-title">DOKUMEN</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-danger"><i class="ti-book"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
								if( ! empty($dokumen)){
								$jumdok = 0;
								foreach($dokumen as $data){
									$jumdok++;
								}
								echo $jumdok;
								}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detailkwitansi">
				<h3 class="box-title">KWITANSI</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-warning"><i class="ti-receipt"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
												if( ! empty($kwitansi)){
													$jumkwi = 0;
												foreach($kwitansi as $data){
												 $jumkwi++;
												}
											echo $jumkwi;
											}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detailkeperluan">
				<h3 class="box-title">KEPERLUAN</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-success"><i class="ti-briefcase"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
												if( ! empty($keperluan)){
													$jumkep = 0;
												foreach($keperluan as $data){
												 $jumkep++;
												}
											echo $jumkep;
											}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" style="padding-bottom: 25px;">
				<h3 class="box-title">SISA KAS (Rp)</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-info"><i class="ti-wallet"></i></span>
					</li>
					<li class="text-right">
						<span class="counte" style="font-size:20pt;">
					
							<?php
												  
												 if( ! empty($sisakas)){
												 foreach($sisakas as $data){
												 $data['sisakasreal'];
												 $data['saldo'];
													}
													if($data['sisakasreal'] == NULL){
														echo $data['saldo'];
													}else{
														echo $data['sisakasreal'];
													}
												}
												?>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php }elseif($this->session->userdata('level')==='3'){?>
	<div class="row">
	<div class="col-sm-12">
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detaildokumen">
				<h3 class="box-title">DOKUMEN</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-danger"><i class="ti-book"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
								if( ! empty($dokumen)){
								$jumdok = 0;
								foreach($dokumen as $data){
									$jumdok++;
								}
								echo $jumdok;
								}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detailkwitansi">
				<h3 class="box-title">KWITANSI</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-warning"><i class="ti-receipt"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
												if( ! empty($kwitansi)){
													$jumkwi = 0;
												foreach($kwitansi as $data){
												 $jumkwi++;
												}
											echo $jumkwi;
											}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detailkeperluan">
				<h3 class="box-title">KEPERLUAN</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-success"><i class="ti-briefcase"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
												if( ! empty($keperluan)){
													$jumkep = 0;
												foreach($keperluan as $data){
												 $jumkep++;
												}
											echo $jumkep;
											}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" style="padding-bottom: 25px;">
				<h3 class="box-title">SISA KAS (Rp)</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-info"><i class="ti-wallet"></i></span>
					</li>
					<li class="text-right">
						<span class="counte" style="font-size:20pt;">
					
							<?php
												  
												 if( ! empty($sisakas)){
												 foreach($sisakas as $data){
												 $data['sisakasreal'];
												 $data['saldo'];
													}
													if($data['sisakasreal'] == NULL){
														echo $data['saldo'];
													}else{
														echo $data['sisakasreal'];
													}
												}
												?>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php }else { ?>
<div class="row">
	<div class="col-sm-12">
		<div class="col-lg-3 col-sm-6 col-xs-12">
			<div class="white-box" data-toggle="modal" data-target="#detailuser">
				<h3 class="box-title">PENGGUNA</h3>
				<ul class="col-in">
					<li>
						<span class="circle circle-lg bg-info"><i class="ti-user"></i></span>
					</li>
					<li class="text-right">
						<span class="counter" style="font-size:20pt;">
							<?php
												if( ! empty($user)){
													$jumuser = 0;
												foreach($user as $data){
												  $jumuser++;
												}
											echo $jumuser;
											}?>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php } ?>

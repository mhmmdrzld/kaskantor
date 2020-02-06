<html>

<head>
	<title>
		<?php echo $head;?> | PT. Geoinfo Teknologi
	</title>
	<link href="<?= base_url('asset/bootstrap/4.1.3/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<style>
		/* @font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: normal;
			src: url(http://themes.googleusercontent.com/static/fonts/opensans/v8/cJZKeOuBrn4kERxqtaUH3aCWcynf_cDxXwCLxiixG1c.ttf) format('truetype');
		} */

		/** Define the margins of your page **/
		@page {
			margin: 100px 25px;
		}

		main {
			font-size: 10pt;
		}

		header {
			position: fixed;
			top: -60px;
			left: 0px;
			right: 0px;
			height: 50px;
			/* border-color: red; */
			/* line-height: 35px; */
			text-align: right;
			font-size: 10pt;
			/** Extra personal styles **/
			/* background-color: #03a9f4; */


		}

		footer {
			position: fixed;
			bottom: -60px;
			left: 0px;
			right: 0px;
			height: 50px;
			text-align: right;
			font-size: 9pt;
		}

	</style>
</head>

<body>
	<!-- Define header and footer blocks before your content -->


	<header>
		<div class="row">
			<div class="col-md-2" style="text-align:left;">
				<img src="C:\xampp\htdocs\ci\asset\plugins\images\geo.png" width="120px" />
			</div>
			<div class="col-md-10">
				<h3 style="font-weight: bold;">Laporan Kas Kantor PT Geoinfo Teknologi |
					<?php
						if( ! empty($cetak)){
					   foreach($cetak as $data){
						$date = $data['tanggal_dokumen'];
						$nama_akuntan =$data['nama_akuntan'];
						$waktu = substr($data['waktu'],0,-3);
						 }
						 $tanggal = substr($date,0,-6);
						 echo $tanggal;}?>
				</h3>
				<hr style="border-color:black; top: 1px;">
			</div>
		</div>


	</header>

	<footer>
		<hr style="border-color:black; top: 1px;">
		<?php
		if( ! empty($cetak)){
	   $no = 1;
	   foreach($cetak as $data){
		$kode = $data['kode_dokumen'];
		   $tanggal = date_indo($data['tanggal_dokumen']);
		echo 'Laporan Kas Kantor -'.$tanggal; }}?>
	</footer>

	<!-- Wrap the content of your PDF inside a main tag -->
	<main>
		<div style="page-break-after: always;">
			<div style="margin-top:30px;">
				<table style="border:1px solid #51d87c; width: 720px;">
					<thead>
						<tr>
							<td colspan="3" style="border-bottom: 1px solid #51d87c; font-style: italic;text-align: center; font-weight: bold;background-color:#51d87c;">
								INFORMASI KAS Kantor SEBELUMNYA
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="font-weight: bold; padding-left: 5px;background-color:#91ee83;">TANGGAL PERMINTAAN KAS</td>
							<td style="background-color:#91ee83;">:</td>
							<td style="text-align: left;background-color:#91ee83;">
								<?php
										if( ! empty($sisa)){
										foreach($sisa as $data){
										$sisakas = rupiah($data['sisakas']);
										$tanggalseb = $data['tanggalsebelum'];
										if (isset($tanggalseb)){
											$tanggalseb =date_indo($tanggalseb);
											echo $tanggalseb;
										}else{
											$tanggalseb = "tidak ada data sebelumnya";
											echo $tanggalseb;
										}
										 }}
									?>
							</td>

						</tr>
						<tr>
							<td style="padding-right: 5px;padding-left: 5px;font-weight:bold;">SISA KAS</td>
							<td>:</td>
							<td style="text-align: left;">Rp.
								<?php echo $sisakas;?>,-</td>

						</tr>
						<tr>
							<td style="font-weight: bold;padding-right: 5px;padding-left: 5px;background-color:#91ee83;">PERMINTAAN KAS SEBESAR</td>
							<td width="10px" style="background-color:#91ee83;">:</td>
							<?php 	if( ! empty($tf)){
											foreach($tf as $data){
											$totaltf = $data['totaltf'];
											
										}
											
											}?>
							<td style="text-align: left;font-weight: bold;background-color:#91ee83;">Rp.
								<?php echo rupiah($totaltf);?>,-</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div>
				<hr style="border-color:black; top: 1px; border-top-style: dashed;">
			</div>
			<div>

				<table style="margin-left: 50px; width:100%;">
					<tbody>
						<tr>
							<td style=" text-align:
				 left;width:40%;font-weight: bold;">DOKUMEN</th>
							<td style="width:5%;">:</td>
							<td style="width:40%;">
								<font style="font-size:10pt;">LAPORAN KAS KANTOR PT GEOINFO TEKNOLOGI</font>
							</td>
						</tr>
						<tr>
							<td style="text-align: left; width:40%;font-weight: bold;">DILAPORKAN PADA TANGGAL</td>
							<td style="width:5%;">:</td>
							<td style="width:40%;font-size:10pt;">
								<?php echo $tanggal;?>
							</td>
						</tr>
						<tr>
							<td style="text-align: left; width:40%;font-weight: bold;">KODE DOK KAS</td>
							<td style="width:5%;">:</td>
							<td style="width:50%; font-size:10pt;font-weight: bold;">
								<?php echo $kode;?>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
			<div style="margin-top:35px;">
				<font style="font-size:10pt;">Berikut ini saya laporkan KAS KANTOR sampai tanggal
					<?php echo $tanggal;?> :</font>
			</div>
			<div style="text-decoration: underline; font-weight: bold;font-size:10pt; margin-top: 5px;">TABEL KAS KANTOR</div>
			<div style="margin-top:5px;">
				<table style="border:1px solid black; width:100%;border-collapse: collapse;">
					<thead>
						<tr>
							<th style="border:1px solid black;text-align: center;width: 20px;">No</th>
							<th style="border:1px solid black;text-align: center;width: 30px;">Kode Kwitansi</th>
							<th style="border:1px solid black;text-align: center;width: 30px;">Tanggal Pembelian Barang</th>
							<th style="border:1px solid black;text-align: center;width: 200px;">Keprluan</th>
							<th style="border:1px solid black;text-align: center;width: 20px;">Qty</th>
							<th style="border:1px solid black;text-align: center;width: 30px;">Kredit(Rp)</th>
							<th style="border:1px solid black;text-align: center;width: 30px;">Debet(Rp)</th>
						</tr>
						<tr>
							<th colspan="
							 7" style="border:1px solid black;text-align:center;font-style: italic;">
								Pada tanggal sebelumnya Uang Kas Kembali full 2,0000,000
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if( ! empty($kantor)){
							    $no = 1;
								$total = 0;
								$debet = 2000000;
								foreach($kantor as $data){
									$debet-=$data['kredit'];
							echo'<tr>	 
								<td style="border:1px solid black;text-align: center;">'.$no++.'.</td>
								<td style="border:1px solid black;padding-left: 5px;">'.$data['kode_kwitansi'].'</td>	
								<td style="border:1px solid black;padding-left: 5px;">'.shortdate_indo($data['tanggal_kwitansi']).'</td>
								<td style="border:1px solid black;padding-left: 5px;">'.$data['nama_keperluan'].'</td>
								<td style="border:1px solid black;text-align: center;padding-left: 5px;">'.$data['qty'].'</td>
								<td style="border:1px solid black;padding-left: 5px;">'.rupiah($data['kredit']).'</td>
								<td style="border:1px solid black;padding-left: 5px;">'.rupiah($debet).'</td>
								</tr>';
								
								if(!empty($data['kredit'])){$total += $data['kredit'];}
								}
							echo' <tr>
								<td colspan="5" style="border:1px solid black;text-align: center;">Total</td>
								<td style="border:1px solid black;padding-left: 5px;">'.rupiah($total).'</td>
								<td></td>
							</tr> ';
							}
								?>
					</tbody>
				</table>
			</div>
		</div>
		<div style="page-break-after: never;">
			<div style="text-decoration: underline; font-weight: bold;font-size:10pt; margin-top: 5px;">TABEL KAS MESS</div>
			<div style="margin-top:5px;">
				<table style="border:1px solid black; width: 720px;border-collapse: collapse;">
					<thead>
						<tr>
							<th style="border:1px solid black;text-align: center;width: 20px;">No</th>
							<th style="border:1px solid black;text-align: center;width: 25px;">Kode Kwitansi</th>
							<th style="border:1px solid black;text-align: center;width: 25px;">Tanggal Pembelian Barang</th>
							<th style="border:1px solid black;text-align: center;width: 150px;">Keprluan</th>
							<th style="border:1px solid black;text-align: center;width: 10px;">Qty</th>
							<th style="border:1px solid black;text-align: center;width: 2px;">Kredit(Rp)</th>
							<th style="border:1px solid black;text-align: center;width: 20px;">Debet(Rp)</th>
						</tr>
					</thead>
					<tbody>
						<?php
								if( ! empty($mess)){
							    $no = 1;
								$totalmess = 0;
								foreach($mess as $data){
							echo'<tr>	 
								<td style="border:1px solid black;text-align: center;">'.$no++.'</td>
								<td style="border:1px solid black;padding-left: 5px;">'.$data['kode_kwitansi'].'</td>	
								<td style="border:1px solid black;padding-left: 5px;">'.shortdate_indo($data['tanggal_kwitansi']).'</td>
								<td style="border:1px solid black;padding-left: 5px;">'.$data['nama_keperluan'].'</td>
								<td style="border:1px solid black;text-align: center;padding-left: 5px;">'.$data['qty'].'</td>
								<td style="border:1px solid black;padding-left: 5px;"></td>';
								if($data['statusuang']=='UangBapak'){
									$red = "background:red;";
								}else{
									$red = "background:white;";
								}
								echo'<td style="border:1px solid black;padding-left: 5px; '.$red.'">'.rupiah($data['kredit']).'</td>
								</tr>';
								
								$totalmess += $data['kredit'];
								}
							echo' <tr>
								<td colspan="6" style="border:1px solid black;text-align: center;">Total</td>
								<td style="border:1px solid black;padding-left: 5px;">'.rupiah($totalmess).'</td>
							</tr> ';
							}
								?>
					</tbody>
				</table>
			</div>
			<div style="font-weight:bold;margin-top:10px">Detail Perhitungan</div>
			<div style="margin-top:5px;">

				<table style="border:1px #7cabd6 solid; width: 100%;">
					<tr>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;background-color: #7cabd6;color:white;font-weight:bold;">Sisa Uang Kas Sampai Tanggal <?php echo $tanggal;?></td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;background-color: #7cabd6;color:white;font-weight:bold;">:</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;background-color: #7cabd6;font-weight:bold;">
						<?php if( ! empty($mess1)){
	  								foreach($mess1 as $data){
									$totalmesskantor = $data['mess1'];
									$totaltf = $totalmess+ $total;
									if($totaltf>2085407){
										$jebol = 'color : red;font-weight: bold;';
									}else{
										$jebol = 'color : black;font-weight: bold';
									}
									$sisakas = 2085407 - ($totalmesskantor + $total);
									echo 'Rp. '.rupiah($sisakas).',-'; }}?>
						</td>
					</tr>
					<tr>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;font-weight:bold;">PaK Ilham transfer untuk keperluan
							Kantor</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">:</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">Rp.
								<?php echo rupiah($total);?>,-</td>
					</tr>
					<tr>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;font-weight:bold;">PaK Ilham transfer untuk keperluan
							Mess</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">:</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">Rp.
								<?php echo rupiah($totalmess);?>,-</td>
					</tr>
					<tr>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;font-weight:bold;">Total Transfer Semuanya</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">:</td>
						<td style="border-bottom: 1px solid #7cabd6;text-align: left;padding-left: 5px;">Rp.
								<?php echo rupiah($total).",- + Rp. ".rupiah($totalmess).",- = Rp. <font style='".$jebol."'>".rupiah($totaltf).",-";?>
								</font></td>
					</tr>
					<tr>
						<td colspan="3" style="background-color:#51d87c;border: 1px solid #51d87c;text-align: left;padding-left: 5px;">Banjarmasin, <?php echo $tanggal.' | '.$waktu.' Wita';?></td>
					</tr>
				</table>

			</div>
			<div style="margin-top:10px;">
				Demikian Laporan Kas PT Geoinfo Teknologi terhitung mulai tanggal
				<?php echo $tanggalseb;?> s.d
				<?php echo $tanggal;?>.
			</div>
			<div style="font-style:italic;">Terima kasih</div>
			<div style="margin-top:10px;">
				<table>
					<tr>
						<td>Tertanda</td>
					</tr>
					<tr>
						<td style="padding-top:50px;"><?php echo $nama_akuntan;?></td>
					</tr>
				</table>

			</div>
		</div>
	</main>
</body>

</html>
<script src="<?= base_url('asset/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?= base_url('asset/bootstrap/dist/js/bootstrap.min.js');?>"></script>

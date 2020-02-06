<div class="row">
	<div class="col-sm-12">
		<div class="white-box">

			<div class="row">
				<div class="col-md-2">
					<button data-toggle="modal" data-target="#Modaldokumen" class="btn btn-info btn-rounded" type="button" id="btn-tambah-form">Tambah
						Data</button>
					<br>
				</div>
			</div>

			<div class="row">
				<div style="padding-top: 20px;">
					<div class="table-responsive">
						<table id="myTable" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>E-mail</th>
									<th>Jabatan</th>
									<th>Nama Pengguna</th>
									<th>Hak Akses</th>
									<th style="text-align: center">Kelola</th>
								</tr>
							</thead>
							<tbody>
								<?php
               if( ! empty($user)){
              $no = 1;
              foreach($user as $data){
                echo "<tr>";
                echo "<td  style='width:5%'>".$no++."</td>";
                echo "<td style='width:20%'>".$data['nama']."</td>";
                echo "<td style='width:20%'>".$data['email']."</td>";
                echo "<td style='width:10%'>".$data['jabatan']."</td>";
                echo "<td style='width:10%'>".$data['username']."</td>";
				if($data['level']==1){
					echo "<td style='width:20%'>Administrator</td>"; }
				elseif($data['level']==3){
					echo "<td style='width:20%'>Manager</td>";	}
				else
				{ echo "<td style='width:20%'>Akuntan</td>"; }
                echo "<td style='width:30%; text-align:center;'> 
                          <a href='".base_url('user/edit/'.$data['id'])."' type='button' data-toggle='tooltip' data-original-title='Ubah' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-pencil-alt'></i></a>
                          <a href='".base_url('user/delete/'.$data['id'])."'  type='button'  data-toggle='tooltip' data-original-title='Hapus' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-trash'></i></a>
          
                      </td>";
                echo "</tr>";
                $no++;
              }
            }
            ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

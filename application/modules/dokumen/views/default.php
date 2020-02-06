<?php if($this->session->userdata('level')==='2'){ ?>
<div class="row">
    <div class="col-sm-12">
      <div class="white-box">
        
        <div class="row">
        <button data-toggle="modal" data-target="#Modaldokumen" class="btn btn-info btn-rounded" type="button" id="btn-tambah-form">Tambah
									Data</button>
            <br>
          </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
              <thead>
                 <tr>
                    <th>No</th>
                    <th>Kode Dokumen</th>
                    <th>Tanggal</th>
                    <th style="text-align: center">Manage</th>
                </tr>
               </thead>
               <tbody>
                <?php
     if( ! empty($dokumen)){
    $no = 1;
    foreach($dokumen as $data){
      echo "<tr>";
      echo "<td  style='width:5%'>".$no."</td>";
      echo "<td style='width:40%'>".$data['kode_dokumen']."</td>";
      echo "<td style='width:30%'>".date_indo($data['tanggal_dokumen'])."</td>";
      echo "<td style='width:20%; text-align:center;'> 
                <a href='".base_url('cetak/pdf/'.$data['id'])."' target='_blank' type='button' data-toggle='tooltip' data-original-title='print' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-printer'></i></a>               
                <a href='".base_url('dokumen/edit/'.$data['id'])."'type='button' data-toggle='tooltip' data-original-title='edit' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-pencil-alt'></i></a>
                <a href='".base_url('dokumen/delete/'.$data['id'])."'  type='button'  data-toggle='tooltip' data-original-title='delete' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-trash'></i></a>

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
 <?php }elseif($this->session->userdata('level')==='3'){ ?>
  <div class="row">
      <div class="col-sm-12">
        <div class="white-box">
          
          <div class="row">
          
              <br>
            </div>
          </div>
          <div class="table-responsive">
              <table id="myTable" class="table table-striped">
                <thead>
                   <tr>
                      <th>No</th>
                      <th>Kode Dokumen</th>
                      <th>Tanggal</th>
                      <th style="text-align: center">Manage</th>
                  </tr>
                 </thead>
                 <tbody>
                  <?php
       if( ! empty($dokumen)){
      $no = 1;
      foreach($dokumen as $data){
        echo "<tr>";
        echo "<td  style='width:5%'>".$no."</td>";
        echo "<td style='width:40%'>".$data['kode_dokumen']."</td>";
        echo "<td style='width:30%'>".date_indo($data['tanggal_dokumen'])."</td>";
        echo "<td style='width:20%; text-align:center;'> 
                  <a href='".base_url('cetak/pdf/'.$data['id'])."' target='_blank' type='button' data-toggle='tooltip' data-original-title='print' class='btn btn-info btn-outline btn-circle btn-lg m-r-5'><i class='ti-printer'></i></a>               
  
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
  <?php } ?>
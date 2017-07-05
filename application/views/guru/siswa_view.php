<!DOCTYPE html>
<html lang="en">
  <?php $this->view('guru/head'); ?>

  <body>

     <?php $this->view('guru/navigation'); ?>

    <div class="container-fluid">
      <div class="row">
        <?php $this->view('guru/sidebar'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="well">
            Mata Pelajaran Guru
          </div>
           <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Nama Mapel</th>
                <th>Jenjang</th>
                <th>Nama Siswa</th>
                <th>Tarif</th>
                <th>Tanggal Request</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            foreach ($mapel as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->nama_mapel ?></td>
                <td><?=$row->jenjang ?></td>
                <td><?=$row->nama_awal_siswa." ".$row->nama_akhir_siswa ?></td>
                <td><?=$row->tarif ?></td>
                <td><?=$row->tanggal_kontrak ?></td>
                <td><?=$row->status ?></td>
                <td><?php if($row->status=="request"){ ?>
                <a href="<?=base_url('guru/siswa/approve/'.$row->id_kontrak) ?>"><button type="button" name="button" class="btn btn-warning tombol" >Approve</button></a>
                    <a href="<?=base_url('guru/siswa/decline/'.$row->id_kontrak) ?>"><button type="button" name="button" class="btn btn-warning tombol" >Decline</button></td></a>
                    <?php } ?>
              </tr>
            <?php } ?>
             
            </tbody>
          </table>   

        </div>
      </div>
    </div>
    
    <?php $this->view('guru/plugin'); ?>
  </body>
</html>

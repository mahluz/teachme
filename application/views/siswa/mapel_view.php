
    <?php $this->view('siswa/head'); ?>
<body>
    
    <div id="wrapper">

        <!-- Navigation -->
       <?php $this->view('siswa/navigation'); ?>
  <!-- Page Content -->
        <div id="page-wrapper">
          <div class="container-fluid">
          <hr>
          <div class="well">
            Daftar Course yang dipilih
          </div>
          <hr>
            <div class="row">
             <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Nama Mapel</th>
                <th>Jenjang</th>
                <th>Nama Mentor</th>
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
                <td><?=$row->nama_awal." ".$row->nama_akhir ?></td>
                <td><?=$row->tarif ?></td>
                <td><?=$row->tanggal_kontrak ?></td>
                <td><?=$row->status ?></td>
                <td>
                  <?php if($row->status=="approved"){ ?>
                  <a href="<?=base_url('siswa/pertemuan/pilih/'.$row->id_guru.'/'.$row->id_mapel) ?>"><button type="button" name="button" class="btn btn-warning tombol" >Pilih Pertemuan</button></a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
             
            </tbody>
          </table>   
          </div>       
          </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->view('siswa/plugin'); ?>
</body>

</html>

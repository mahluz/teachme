
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
           Pilih Jadwal Pertemuan
          </div>
          <hr>
            <div class="row">
             <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            foreach ($jadwal as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->hari ?></td>
                <td><?=$row->jam ?></td>
                <td><?=$row->deskripsi ?></td>
                <td>
                  <?php if(!isset($row->status)){ ?>
                  <a href="<?=base_url('siswa/pertemuan/pilih_jadwal/'.$row->id_jadwal.'/'.$id_mapel) ?>"><button type="button" name="button" class="btn btn-warning tombol" >Pilih</button></a>
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

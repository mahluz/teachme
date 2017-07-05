
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
            Materi <?=$mapel ?>
          </div>
          <hr>
            <div class="row">
             <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Deskripsi</th>
                <th>File Materi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            foreach ($materi as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->nama_materi ?></td>
                <td><a href="<?=base_url('uploads/materi/'.$row->url_materi) ?>"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a></td>
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

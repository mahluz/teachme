
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
            Tagihan
          </div>
          <hr>
            <div class="row">
            <h2>Jumlah Saldo anda : <?php if (isset($saldo)) { echo($saldo); }  ?></h2> <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">Isi Saldo</button>
             <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Mapel</th>
                <th>Jatuh Tempo</th>
                <th>Total Tagihan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            if (isset($tagihan)) {
            foreach ($tagihan as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->id_mapel ?></td>
                <td><?=$row->jatuh_tempo ?></td>
                <td><?=$row->total_tagihan ?></td>
                <td><?=$row->status ?></td>
                <td>
                  <?php if($row->status!="payed"){ ?>
                  <a href="<?=base_url('siswa/pertemuan/pilih/'.$row->id_tagihan) ?>"><button type="button" name="button" class="btn btn-warning tombol" >Bayar</button></a>
                  <?php } ?>
                </td>
              </tr>
            <?php } } ?>
             
            </tbody>
          </table>   
          </div>       
          </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
     <!-- Modal -->
    <div id="myAddModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Saldo</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('siswa/saldo/add'); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_mapel">Nominal Transfer </label>
                <input type="text" name="jumlah_saldo" id="jumlah_saldo" value="" class="form-control" >
              </div>
              <div class="form-group">
                <label for="tarif">Bukti Transfer</label>
                <input type="file" name="bukti_transfer" id="bukti_transfer" value="" class="form-control" >
                <p>*file harus berformat pdf </p>
              </div>
              <button type="submit" name="button" class="btn btn-success btn-block">Konfirmasi</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <?php $this->view('siswa/plugin'); ?>
</body>

</html>

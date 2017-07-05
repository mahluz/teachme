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
            Saldo
          </div>
          <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">Isi Saldo</button>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Tanggal</th>
                <th>Saldo Masuk</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            if (isset($saldo)) {
            foreach ($saldo as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->tanggal ?></td>
                <td><?=$row->saldo ?></td>
              </tr>
            <?php } } ?>
             
            </tbody>
          </table>

        </div>
      </div>
    </div>
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
            <form action="<?=base_url('guru/saldo/add'); ?>" method="post" enctype="multipart/form-data">
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
    <?php $this->view('guru/plugin'); ?>
   <script type="text/javascript">
     $(document).on("click", '.tombol', function(e){
     var id = $(this).data('id');
     var nama = $(this).data('nama');
     var tarif = $(this).data('tarif');
     var alokasi = $(this).data('alokasi');
     var jenjang = $(this).data('jenjang');

     $(".id_mapel").val(id);
     $(".nama_mapel").val(alokasi);
     $(".tarif").val(tarif);
     $(".alokasi_waktu").val(alokasi);
     $(".jenjang").val(jenjang);
     });
   </script>
  </body>
</html>

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
            Materi Mapel <?=$mapel ?> 

          </div>
          <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">Add Materi</button>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Materi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            if(isset($materi)){
            foreach ($materi as $key => $row) { 
              $i++;
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->nama_materi ?></td>
                <td><?=$row->url_materi ?></td>
                <td>
                <a href="<?=base_url('guru/pertemuan/delete_materi/'.$row->id_materi.'/'.$row->id_pertemuan.'/'.$mapel) ?>"><button type="button" name="delete" class="btn btn-warning">Delete</button></a>
          
                </td>
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
            <h4 class="modal-title">Add Materi</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('guru/pertemuan/add_materi/'.$id_pertemuan.'/'.$mapel); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_mapel">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" value="" class="form-control" >
              </div>
              <div class="form-group">
                <label for="tarif">File Materi</label>
                <input type="file" name="file_materi" id="file_materi" value="" class="form-control" >
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
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
   <script type="text/javascript">
     $(document).on("click", '.tombol', function(e){
     var id = $(this).data('id');
     var tanggal = $(this).data('tgl');
     var pertemuan = $(this).data('pt');

     $(".pertemuan").val(pertemuan);
     $(".id_kontrak").val(id);
     });
   </script>
  </body>
</html>

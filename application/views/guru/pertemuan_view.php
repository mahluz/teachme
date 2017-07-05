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
            Pertemuan 

          </div>
          <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">Add Pertemuan</button>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Nama Siswa</th>
                <th>Mapel</th>
                <th>Jenjang</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $i = 0;
            if(isset($pertemuan)){
            foreach ($pertemuan as $key => $row) { 
              $i++;
              $res = explode("-", $row->tanggal_pertemuan);
                $changeDate = $res[1]."/".$res[2]."/".$res[0];
              ?>
               <tr>
                <td><?=$i ?></td>
                <td><?=$row->nama_awal_siswa." ".$row->nama_akhir_siswa ?></td>
                <td><?=$row->nama_mapel ?></td>
                <td><?=$row->jenjang_mapel ?></td>
                <td><?=$row->tanggal_pertemuan ?></td>
                <td><?=$row->status_pertemuan ?></td>
                <td><button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#myModal" data-id="<?=$row->kontrak_id ?>" data-pt="<?=$row->id_pertemuan ?>" data-nama="<?=$row->nama_awal_siswa." ".$row->nama_akhir_siswa ?>" data-tgl="<?=$changeDate ?>" >Edit</button>
                <a href="<?=base_url('guru/pertemuan/delete/'.$row->id_pertemuan) ?>"><button type="button" name="delete" class="btn btn-warning">Delete</button></a>
                <a href="<?=base_url('guru/pertemuan/materi/'.$row->id_pertemuan.'/'.$row->nama_mapel) ?>"><button type="button" name="upload_materi" class="btn btn-warning">Upload materi</button></a>
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
            <h4 class="modal-title">Add Pertemuan</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('guru/pertemuan/add'); ?>" method="post">
              <div class="form-group">
                <label for="nama_mapel">Nama Siswa</label>
                <select class="form-control" name="nama_siswa">
                <?php if (isset($siswa)) { foreach ($siswa as $key => $value) { ?>
                  <option value="<?=$value->id_kontrak ?>"><?=$value->nama_awal." ".$value->nama_akhir."(".$value->nama_mapel.")" ?></option>
                  <?php }} ?>
                </select>
              </div>
              <div class="form-group">
                <label for="tarif">Tanggal Pertemuan</label>
                <input type="text" data-provide="datepicker" name="tanggal_pertemuan" id="tanggal_pertemuan" value="" class="datepicker form-control" >
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

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Pertemuan</h4>
          </div>
          <div class="modal-body">
           <form action="<?=base_url('guru/pertemuan/edit'); ?>" method="post">
              <div class="form-group">
                <label for="nama_mapel">Nama Siswa</label>
                <select class="form-control id_kontrak" name="nama_siswa">
                <?php if (isset($siswa)) { foreach ($siswa as $key => $value) { ?>
                  <option value="<?=$value->id_kontrak ?>"><?=$value->nama_awal." ".$value->nama_akhir."(".$value->nama_mapel.")" ?></option>
                  <?php }} ?>
                </select>
              </div>
              <div class="form-group">
                <label for="tarif">Tanggal Pertemuan</label>
                <input type="text" data-provide="datepicker" name="tanggal_pertemuan" id="tanggal_pertemuan" value="" class="datepicker form-control" >
              </div>
              <input type="hidden" name="pertemuan" id="pertemuan" value="" class="pertemuan form-control" >
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
      $('.datepicker').datepicker();
    </script>
   <script type="text/javascript">
     $(document).on("click", '.tombol', function(e){
     var id = $(this).data('id');
     var tanggal = $(this).data('tgl');
     var pertemuan = $(this).data('pt');

     $(".pertemuan").val(pertemuan);
     $(".id_kontrak").val(id);
     $(".datepicker").val(tanggal);
     });
   </script>
  </body>
</html>

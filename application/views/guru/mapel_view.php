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

            <div id="infoMessage" class="pull-right"><?php echo $message;?></div>
          </div>
          <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myAddModal">Add Mapel</button>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>no</th>
                <th>Nama Mapel</th>
                <th>Tarif</th>
                <th>Alokasi Waktu</th>
                <th>Jenjang</th>
                <th>Edit</th>
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
                <td><?=$row->tarif ?></td>
                <td><?=$row->alokasi_waktu ?></td>
                <td><?=$row->jenjang ?></td>
                <td><button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#myModal" data-id="<?=$row->id_mapel ?>" data-nama="<?=$row->nama_mapel ?>" data-tarif="<?=$row->tarif ?>" data-alokasi="<?=$row->alokasi_waktu ?>" data-jenjang="<?=$row->jenjang ?>">Edit</button></td>
              </tr>
            <?php } ?>
             
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
            <h4 class="modal-title">Add Mapel</h4>
          </div>
          <div class="modal-body">
            <form action="<?=base_url('guru/mapel/add'); ?>" method="post">
              <div class="form-group">
                <label for="nama_mapel">Nama Mapel</label>
                <input type="text" name="nama_mapel" id="nama_mapel" value="" class="form-control" placeholder="enter nama mapel">
              </div>
              <div class="form-group">
                <label for="tarif">Tarif Perjam</label>
                <input type="text" name="tarif" id="tarif" value="" class="form-control" placeholder="Enter Tarif">
              </div>
              <div class="form-group">
                <label for="">Alokasi Waktu</label>
                <select class="form-control" name="alokasi_waktu">
                  <option value="bulan">1 Bulan</option>
                  <option value="semester">1 Semester</option>
                  <option value="tahun">1 Tahun</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Jenjang</label>
                <select class="form-control" name="jenjang">
                  <option value="sd">SD</option>
                  <option value="smp">SMP</option>
                  <option value="sma">SMA</option>
                  <option value="smk">SMK</option>
                  <option value="ma">MA</option>
                </select>
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
            <h4 class="modal-title">Edit Mapel</h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?=base_url('guru/mapel/edit') ?>" method="post">
              <div class="form-group">
                <label for="">Nama Mapel</label>
                <input type="text" name="nama_mapel"  class="form-control nama_mapel" placeholder="enter mapel">
              </div>
              <input type="hidden" name="id_mapel" class="form-control id_mapel" placeholder="enter mapel">
              <div class="form-group">
                <label for="">Tarif</label>
                <input type="text" name="tarif"  class="form-control tarif" placeholder="Enter Tarif">
              </div>
              <div class="form-group">
                <label for="">Alokasi Waktu</label>
                <select class="form-control alokasi_waktu" name="alokasi_waktu">
                  <option value="bulan">1 Bulan</option>
                  <option value="semester">1 Semester</option>
                  <option value="tahun">1 Tahun</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Jenjang</label>
                <select class="form-control jenjang" name="jenjang">
                  <option value="sd">SD</option>
                  <option value="smp">SMP</option>
                  <option value="sma">SMA</option>
                  <option value="smk">SMK</option>
                  <option value="ma">MA</option>
                </select>
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

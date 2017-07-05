<!DOCTYPE html>
<html lang="en">
  <?php $this->view('guru/head'); ?>

  <body>

     <?php $this->view('guru/navigation'); ?>

    <div class="container-fluid">
      <div class="row">
        <?php $this->view('guru/sidebar'); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <hr>

          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      Schedule Management
                  </h1>
                  <ol class="breadcrumb">
                      <li class="active">
                          <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}"> Schedule's Form</a>
                      </li>
                  </ol>
              </div>
          </div>
              <div class="row">

            <div class="col-lg-12">

              <ul class="nav nav-tabs">
              <?php if (isset($senin)) { ?>
                <li class="active"><a data-toggle="tab" href="#senin">Senin</a></li>
              <?php } ?>
              <?php if (isset($selasa)) { ?>
                <li><a data-toggle="tab" href="#selasa">Selasa</a></li>
              <?php } ?>
              <?php if (isset($rabu)) { ?>
                <li><a data-toggle="tab" href="#rabu">Rabu</a></li>
              <?php } ?>
              <?php if (isset($kamis)) { ?>
                <li><a data-toggle="tab" href="#kamis">Kamis</a></li>
              <?php } ?>
              <?php if (isset($jumat)) { ?>
                <li><a data-toggle="tab" href="#jumat">Jumat</a></li>
              <?php } ?>
              <?php if (isset($sabtu)) { ?>
                <li><a data-toggle="tab" href="#sabtu">Sabtu</a></li>
              <?php } ?>
              <?php if (isset($minggu)) { ?>
                <li><a data-toggle="tab" href="#minggu">Minggu</a></li>
              <?php } ?>
                
              </ul>

              <div class="tab-content">
                <div id="senin" class="tab-pane fade in active">
                  <h3>Senin</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Jadwal</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; if (isset($senin)) { 
                      foreach ($senin as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="selasa" class="tab-pane fade">
                  <h3>Selasa</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($selasa)) { 
                      foreach ($selasa as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="rabu" class="tab-pane fade">
                  <h3>Rabu</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($rabu)) { 
                      foreach ($rabu as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="kamis" class="tab-pane fade">
                  <h3>Kamis</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($kamis)) { 
                      foreach ($kamis as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="jumat" class="tab-pane fade">
                  <h3>Jumat</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($jumat)) { 
                      foreach ($jumat as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button> 
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="sabtu" class="tab-pane fade">
                  <h3>Sabtu</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($sabtu)) { 
                      foreach ($sabtu as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                        <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                        <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
                <div id="minggu" class="tab-pane fade">
                  <h3>Minggu</h3>
                  <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#myModal">Add Item</button>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>At Time</th>
                        <th>Status</th>
                        <th>Student</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if (isset($minggu)) { 
                      foreach ($minggu as $key => $value) { $i++; ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?=$value->deskripsi ?></td>
                        <td><?=$value->jam ?></td>
                        <td><?=$value->status ?></td>
                        <td><?=$value->murid ?></td>
                        <td>
                          <button type="button" name="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#editModal" data-id="<?=$value->id_jadwal ?>" data-hari="<?=$value->hari ?>" data-deskripsi="<?=$value->deskripsi ?>" data-jam="<?=$value->jam ?>">Edit</button>
                          <a href="<?=base_url('guru/jadwal/delete/'.$value->id_jadwal) ?>"><button type="button" class="btn btn-danger" name="button">Delete</button></a>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

          </div>
          <!-- end row -->

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Jadwal</h4>
                  <h5>Masukkan Jadwal Free anda untuk mengajar</h5>
                </div>
                <div class="modal-body">
                  <form class="" action="<?=base_url('guru/jadwal/add') ?>" method="post">
                    <div class="form-group">
                      <label for="">Hari</label>
                      <select class="form-control" name="hari">
                        <option value="senin">senin</option>
                        <option value="selasa">selasa</option>
                        <option value="rabu">rabu</option>
                        <option value="kamis">kamis</option>
                        <option value="jumat">jumat</option>
                        <option value="sabtu">sabtu</option>
                        <option value="minggu">minggu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Description</label>
                      <input type="text" class="form-control" name="deskripsi" value="">
                    </div>
                    <div class="form-group">
                      <label for="jam">At Time</label>
                      <input type="text" class="form-control" name="jam" value="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="button">Submit</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- EDIT Modal -->
          <div id="editModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Jadwal</h4>
                  <h5>Masukkan Jadwal Free anda untuk mengajar</h5>
                </div>
                <div class="modal-body">
                  <form class="" action="<?=base_url('guru/jadwal/edit') ?>" method="post">
                  <input type="hidden" name="id_jadwal" class="form-control id_jadwal" >
                    <div class="form-group">
                      <label for="">Hari</label>
                      <select class="form-control" name="hari" id="hari">
                        <option value="senin">senin</option>
                        <option value="selasa">selasa</option>
                        <option value="rabu">rabu</option>
                        <option value="kamis">kamis</option>
                        <option value="jumat">jumat</option>
                        <option value="sabtu">sabtu</option>
                        <option value="minggu">minggu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Description</label>
                      <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="">
                    </div>
                    <div class="form-group">
                      <label for="jam">At Time</label>
                      <input type="text" class="form-control" name="jam" id="jam" value="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="button">Submit</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

      </div>
    </div>
    </div>
    <?php $this->view('guru/plugin'); ?>
    <script type="text/javascript">
     $(document).on("click", '.tombol', function(e){
     var id = $(this).data('id');
     var deskripsi = $(this).data('deskripsi');
     var hari = $(this).data('hari');
     var jam = $(this).data('jam');

     $(".id_jadwal").val(id);
     $("#deskripsi").val(deskripsi);
     $("#hari").val(hari);
     $("#jam").val(jam);
     });
   </script>
  </body>
</html>

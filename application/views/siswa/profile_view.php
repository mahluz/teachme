
    <?php $this->view('siswa/head'); ?>
<body>
    
    <div id="wrapper">

        <!-- Navigation -->
       <?php $this->view('siswa/navigation'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit <small>Profile</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> <a href="{{url('admin/charts')}}">Profile</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <form role="form"  method="post" action="<?=base_url('siswa/profile/simpan'); ?>" enctype="multipart/form-data" >
                      <div class="col-lg-6">
                        <div class="form-group">
                         <label class="control-label" for="firstName">
                           First Name:
                         </label>
                           <input type="text" class="form-control" name="firstName" value="<?=$nama_awal ?>" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                         <label class="control-label" for="lastName">Last Name:</label>
                           <input type="text" class="form-control" name="lastName" value="<?=$nama_akhir ?>" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                         <label class="control-label" for="email">email :</label>
                           <input type="email" class="form-control" name="email" value="<?=$email ?>" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                         <label class="control-label" for="tempat">Tempat:</label>
                           <input type="text" class="form-control" name="tempat" value="<?=$tempat ?>" placeholder="Enter Tempat">
                        </div>
                        <div class="form-group">
                         <label class="control-label" for="tgl">Tanggal Lahir:</label>
                           <input data-provide="datepicker" name="tanggal_lahir" value="<?=$tanggal_lahir ?>"  class="datepicker form-control">
                        </div>
                        <div class="form-group">
                         <label class="control-label" for="jenjangSekolah">Jenjang sekolah:</label>
                           <input type="text" class="form-control" value="<?=$jenjang ?>"  name="jenjangSekolah" placeholder="Enter Jenjang sekolah">
                        </div>
                        <div class="form-group">
                       <label class="control-label" for="agama">Agama</label>
                         <input type="text" class="form-control" name="agama" value="<?=$agama ?>"  placeholder="Enter Agama">
                      </div>
                      
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                       <label class="control-label" for="gender">Gender :</label>
                       <?php if($gender=='lk'){
                            $lk = "selected";
                            $pr = " ";
                        }else{
                            $pr = "selected";
                            $lk = " ";
                            } ?>
                          <select class="form-control" name="gender"  id="gender">
                            <option value='lk'<?=$lk ?>>Laki-laki</option>
                            <option value='pr' <?=$pr ?>>Perempuan</option>
                         </select>
                      </div>
                      <div class="form-group">
                       <label class="control-label" for="alamatLengkap">Alamat Lengkap:</label>
                         <textarea type="text" class="form-control" name="alamatLengkap" value="<?=$alamat_lengkap ?>"  placeholder="Enter Alamat Lengkap"></textarea>
                      </div>
                      <div class="form-group">
                       <label class="control-label" for="provinsi">Provinsi:</label>
                         <select class="form-control" onchange="loadKabupaten()" name="propinsi"  id="propinsi">
                            <?php
                            foreach ($propinsi->result() as $p) {
                                echo "<option value='$p->id'>$p->nama</option>";
                            }
                            ?>
                         </select>
                      </div>
                      <p><div id="kabupatenArea"></div></p>
                      <p><div id="kecamatanArea"></div></p>
                      <p><div id="desaArea"></div></p>
                      <!--div class="form-group">
                       <label class="control-label" for="kabupaten">Kota:</label>
                         <select class="form-control" name="kabupaten" id="kabupaten">
                           <option value="">Denpasar</option>
                         </select>
                      </div>
                      <div class="form-group">
                       <label class="control-label" for="kecamatan">Kecamatan:</label>
                         <select class="form-control" name="kecamatan" id="kecamatan">
                           <option value="">Denpasar Selatan</option>
                         </select>
                      </div-->
                      <div class="form-group">
                       <label class="control-label" for="photo">Photo :</label>
                         <input type="file" name="photo" class="form-control" placeholder="Pilih Photo">
                      </div>
                    </div>
                    <!-- col-lg-12 -->
                    <button type="submit" name="button" class="btn btn-primary btn-block">SIMPAN</button>
                  </form>
                </div><hr>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->view('siswa/plugin'); ?>
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js" charset="utf-8"></script>

    <script type="text/javascript">
      $('.datepicker').datepicker();
    </script>

    <script type="text/javascript">
            $( document ).ready(function() {

                $("#propinsi").val(<?= $provinsi ?>);

                loadKabupaten();
               
                loadKecamatan();
                
                loadDesa();
                
            });
            function loadKabupaten()
            {
                var propinsi = <?= $provinsi ?>;
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>Propinsi/kabupaten",
                    data:"id=" + propinsi,
                    success: function(html)
                    { 
                       $("#kabupatenArea").html(html);
                       $("#kabupaten").val(<?= $kota ?>);
                    }
                }); 
                 
            }
            function loadKecamatan()
            {
                var kabupaten = <?= $kota ?>;
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>Propinsi/kecamatan",
                    data:"id=" + kabupaten,
                    success: function(html)
                    { 
                        $("#kecamatanArea").html(html);
                        $("#kecamatan").val(<?= $kecamatan ?>);
                    }
                }); 

            }
            function loadDesa()
            {
                var kecamatan = <?= $kecamatan ?>;
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>Propinsi/desa",
                    data:"id=" + kecamatan,
                    success: function(html)
                    { 
                        $("#desaArea").html(html);
                        $("#desa").val(<?= $desa ?>);
                    }
                }); 
            }
        </script>

</body>

</html>

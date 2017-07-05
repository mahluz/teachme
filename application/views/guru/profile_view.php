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
            Profile
            <div id="infoMessage"><?php echo $message;?></div>
          </div>
          <div class="row">
                    <form role="form"  method="post" action="<?=base_url('guru/profile/simpan'); ?>" enctype="multipart/form-data" >
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
                       <label class="control-label" for="alamat_lengkap">Alamat Lengkap:</label>
                         <textarea type="text" class="form-control" name="alamat_lengkap" value="<?=$alamat_lengkap ?>"  placeholder="<?=$alamat_lengkap ?>"></textarea>
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
                     
                      <div class="form-group">
                       <label class="control-label" for="photo">Photo :</label>
                         <input type="file" name="photo" class="form-control" placeholder="Pilih Photo">
                      </div>
                    </div>
                    <!-- col-lg-12 -->
                    <button type="submit" name="button" class="btn btn-primary btn-block">SIMPAN</button>
                  </form>
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
            $(document).ready(function(){

                <?php if(isset($provinsi)){ 
                  echo "$('#propinsi').val(".$provinsi.");"; 
                echo("loadKabupaten();");
                echo("loadKecamatan();");
                echo("loadDesa();"); } ?>
            });
            function loadKabupaten()
            {
                <?php if(isset($provinsi)){ echo("var propinsi =".$provinsi.";"); }else{ echo "var propinsi = $('#propinsi').val();"; } ?>
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>Propinsi/kabupaten",
                    data:"id=" + propinsi,
                    success: function(html)
                    { 
                       $("#kabupatenArea").html(html);
                       <?php if(isset($kota)){ echo("$('#kabupaten').val(".$kota.");"); }?> 
                       
                    }
                }); 
                 
            }
            function loadKecamatan()
            {
                <?php if(isset($kota)){ echo("var kabupaten=".$kota.";"); }else{ echo "var kabupaten = $('#kabupaten').val();"; } ?>;
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
                <?php if(isset($kecamatan)){ echo("var kecamatan=".$kecamatan.";"); }else{ echo "var kecamatan =  $('#kecamatan').val();"; } ?>
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

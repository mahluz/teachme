<?php $this->view('siswa/head'); ?>
  <body>
    <div id="wrapper">

        <!-- Navigation -->
       <?php $this->view('siswa/navigation'); ?>

<!-- Page Content -->
        <div id="page-wrapper">
      <hr>
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9" >
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="well">Pencarian Guru</div>
          <div class="row" id="search">
          <?php foreach ($mapel as $key => $value) { ?>
            
            <div class="col-xs-6 col-lg-4">
              <div class="well text-center">
                <img src="<?=base_url()?>uploads/<?=$value->photo ?>" alt="" class="img-rounded"  height="200" width="200">
                <h3><?=$value->nama_awal." ".$value->nama_akhir ?></h3>
                Mapel : <?=$value->nama_mapel ?><br/>
                Jenjang : <?=$value->jenjang ?><br/>
                Kota : <?=$value->nama ?><br/>
                Tarif : <?=$value->tarif ?><br/>
                <p><a class="btn btn-info" href="<?=base_url('siswa/dashboard/pilih_guru?q='.$value->id_mapel) ?>" role="button">Pilih &raquo;</a></p>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <?php } ?>
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">Filter Pencarian</div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Lokasi</h4>
                <form class="" action="index.html" method="post">
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
                </form>
              </div>
              <hr>
              <div class="panel-body">
                <h4>Kisaran Tarif</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="tarif_min" id="tarif_min" value="" placeholder="Min">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="tarif_max" id="tarif_max" value="" placeholder="Max">      
                    </div>
                  </div>
                  <br>
                  <button name="button" onclick="byTarif()" class="btn btn-success btn-block">Tampilkan</button>
              </div>
              <hr>
              <div class="panel-body">
                <h4>Jenjang</h4>
                <form class="" action="" method="post">
                  <div class="form-group">
                    <select class="form-control" onchange="byjenjang()" name="jenjang"  id="jenjang">
                      <option value="tk">TK</option>
                      <option value="sd">SD</option>
                      <option value="smp">SMP</option>
                      <option value="sma">SMA</option>
                      <option value="smk">SMK</option>
                      <option value="ma">MA</option>
                    </select>
                  </div>
                </form>
              </div>
              <hr>
              <div class="panel-body">
                <h3>Anda kesulitan mencari guru ? Hubungi konsultan pendidikan kami sekarang!</h3>
                <a href="#">Pesan Guru Instant</a>
              </div>
            </div>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url()?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?=base_url()?>assets/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?=base_url()?>assets/js/offcanvas.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {

                loadKabupaten();
                
            });
            var getUrlParameter = function getUrlParameter(sParam) {
                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            };
            function loadKabupaten()
            {
                var propinsi = $('#propinsi').val();
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>Propinsi/kabupaten_search",
                    data:"id=" + propinsi,
                    success: function(html)
                    { 
                       $("#kabupatenArea").html(html);
                    }
                }); 
                
                 
            }
            function searchKabupaten()
            {
              var kabupaten = $('#kabupaten').val();
              $.ajax({
                    type:'GET',
                    url:"<?php echo base_url('siswa/dashboard/bykabupaten'); ?>",
                    data:"id=" + kabupaten +"&q=" + getUrlParameter('q'),
                    success: function(html)
                    { 
                       $("#search").html(html);
                    }
                }); 
            }

            function byTarif() {
              var min = $('#tarif_min').val();
              var max = $('#tarif_max').val();
              var kabupaten = $('#kabupaten').val();
              $.ajax({
                    type:'GET',
                    url:"<?php echo base_url('siswa/dashboard/bytarif'); ?>",
                    data:"id=" + kabupaten +"&q=" + getUrlParameter('q') + "&min="+min+"&max="+max,
                    success: function(html)
                    { 
                       $("#search").html(html);
                    }
                }); 
            }

            function byjenjang() {
              var jenjang = $('#jenjang').val();
              var kabupaten = $('#kabupaten').val();
              $.ajax({
                    type:'GET',
                    url:"<?php echo base_url('siswa/dashboard/byjenjang'); ?>",
                    data:"id=" + kabupaten +"&q=" + getUrlParameter('q') + "&jjg=" + jenjang,
                    success: function(html)
                    { 
                       $("#search").html(html);
                    }
                }); 
            }
    </script>
  </body>
</html>

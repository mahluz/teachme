
    <?php $this->view('siswa/head'); ?>
<body>
    
    <div id="wrapper">

        <!-- Navigation -->
       <?php $this->view('siswa/navigation'); ?>
  <!-- Page Content -->
        <div id="page-wrapper">
          <div class="container-fluid">
            <hr>
            <div class="row">
                <div class="col-lg-3">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6">
                          <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                          <p class="announcement-heading"><?=$mapel ?></p>
                          <p class="announcement-text">Mapel</p>
                        </div>
                      </div>
                    </div>
                    <a href="#">
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-6">
                            Expand
                          </div>
                          <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="panel panel-warning">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6">
                          <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                          <p class="announcement-heading"><?=$guru ?></p>
                          <p class="announcement-text"> Guru</p>
                        </div>
                      </div>
                    </div>
                    <a href="#">
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-6">
                            Expand
                          </div>
                          <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6">
                          <i class="fa fa-calendar fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                          <p class="announcement-heading"><?=$pertemuan ?></p>
                          <p class="announcement-text">Pertemuan</p>
                        </div>
                      </div>
                    </div>
                    <a href="#">
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-6">
                            Expand
                          </div>
                          <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="panel panel-success">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6">
                          <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                          <p class="announcement-heading"><?=$tagihan ?></p>
                          <p class="announcement-text"> Tagihan</p>
                        </div>
                      </div>
                    </div>
                    <a href="#">
                      <div class="panel-footer announcement-bottom">
                        <div class="row">
                          <div class="col-xs-6">
                            Expand
                          </div>
                          <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div><!-- /.row -->
              </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">How to</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <div class="container-fluid" id="tabs">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        LENGKAPI</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                          <div class="panel panel-danger text-center">
                            <div class="panel-heading">Step 1</div>
                            <div class="panel-body">Lengkapi Biodata Profile anda dengan jelas.</div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        VALIDASI</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                          <div class="panel panel-danger text-center">
                            <div class="panel-heading">Step 2</div>
                            <div class="panel-body">Validasi setiap pertemuan sesuai jadwal yang anda sepakati dengan guru anda.</div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        TEPAT WAKTU</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                          <div class="panel panel-danger text-center">
                          <div class="panel-heading">Step 3</div>
                          <div class="panel-body">Bayarlah setiap kursus yang dilaksanakan sesuai tagihan</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                     
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->view('siswa/plugin'); ?>
</body>

</html>

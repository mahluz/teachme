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
              <div class="col-lg-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-book fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p class="announcement-heading">1</p>
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
                        <p class="announcement-heading">12</p>
                        <p class="announcement-text"> Siswa</p>
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
                        <p class="announcement-heading">18</p>
                        <p class="announcement-text">Jadwal</p>
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
                        <p class="announcement-heading">9000</p>
                        <p class="announcement-text"> Income!</p>
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

            <div class="row">
              <div class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li id="step1Active"><a href="#step-1" onclick="step1()">
                                <h4 class="list-group-item-heading">Step 1</h4>
                                <p class="list-group-item-text">First step description</p>
                            </a></li>
                            <li id="step2Active"><a href="#step-2" onclick="step2()">
                                <h4 class="list-group-item-heading">Step 2</h4>
                                <p class="list-group-item-text">Second step description</p>
                            </a></li>
                            <li id="step3Active"><a href="#step-3" onclick="step3()">
                                <h4 class="list-group-item-heading">Step 3</h4>
                                <p class="list-group-item-text">Third step description</p>
                            </a></li>
                        </ul>
                    </div>
              </div>
                <div class="row" id="step1">
                    <div class="col-xs-12">
                        <div class="col-md-12 well setup-content text-center">
                          <div class="panel panel-danger">
                            <div class="panel-heading">Step 1</div>
                            <div class="panel-body">Lengkapi Biodata Profile anda dengan jelas dan masukkan mapel yang anda ampu.</div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="step2">
                    <div class="col-xs-12">
                        <div class="col-md-12 well setup-content text-center">
                          <div class="panel panel-danger">
                            <div class="panel-heading">Step 2</div>
                            <div class="panel-body">Validasi setiap pertemuan sesuai jadwal yang anda sepakati dengan guru anda.</div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="step3">
                    <div class="col-xs-12">
                      <div class="col-md-12 well setup-content text-center">
                        <div class="panel panel-danger">
                          <div class="panel-heading">Step 3</div>
                          <div class="panel-body">Bayarlah setiap kursus yang dilaksanakan sesuai tagihan</div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- row -->

        </div>
      </div>
    </div>

    <?php $this->view('guru/plugin'); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#step1').show();
        $('#step2').hide();
        $('#step3').hide();
      });
      function step1(){
        $('#step1').show();
        $('#step2').hide();
        $('#step3').hide();
        $('#step1Active').addClass('active');
        $('#step2Active').removeClass();
        $('#step3Active').removeClass();
      }
      function step2(){
        $('#step1').hide();
        $('#step2').show();
        $('#step3').hide();
        $('#step1Active').removeClass();
        $('#step2Active').addClass('active');
        $('#step3Active').removeClass();
      }
      function step3(){
        $('#step1').hide();
        $('#step2').hide();
        $('#step3').show();
        $('#step1Active').removeClass();
        $('#step2Active').removeClass();
        $('#step3Active').addClass("active");
      }
    </script>
  </body>
</html>

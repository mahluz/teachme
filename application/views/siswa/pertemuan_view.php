
    <?php $this->view('siswa/head'); ?>
        <style media="screen">

    img { border: 0; max-width: 100%; }

    .page-header h1 {
      font-size: 3.26em;
      text-align: center;
      color: #e30e86;
      text-shadow: 1px 1px 0 #000;
    }

    /** timeline box structure **/
    .timeline {
      list-style: none;
      padding: 20px 0 20px;
      position: relative;
    }

    .timeline:before {
      top: 0;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 3px;
      background-color: #eee;
      left: 50%;
      margin-left: -1.5px;
    }

    .tldate {
      display: block;
      width: 200px;
      background: #e30e86;
      border: 3px solid #212121;
      color: #ededed;
      margin: 0 auto;
      padding: 3px 0;
      font-weight: bold;
      text-align: center;
      -webkit-box-shadow: 0 0 11px rgba(0,0,0,0.35);
    }

    .timeline li {
      margin-bottom: 25px;
      position: relative;
    }

    .timeline li:before, .timeline li:after {
      content: " ";
      display: table;
    }
    .timeline li:after {
      clear: both;
    }
    .timeline li:before, .timeline li:after {
      content: " ";
      display: table;
    }

    /** timeline panels **/
    .timeline li .timeline-panel {
      width: 46%;
      float: left;
      background: #fdf2f6;
      border: 1px solid #d4d4d4;
      padding: 20px;
      position: relative;
      -webkit-border-radius: 8px;
      -moz-border-radius: 8px;
      border-radius: 8px;
      -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
    }

    /** panel arrows **/
    .timeline li .timeline-panel:before {
      position: absolute;
      top: 26px;
      right: -15px;
      display: inline-block;
      border-top: 15px solid transparent;
      border-left: 15px solid #ccc;
      border-right: 0 solid #ccc;
      border-bottom: 15px solid transparent;
      content: " ";
    }

    .timeline li .timeline-panel:after {
      position: absolute;
      top: 27px;
      right: -14px;
      display: inline-block;
      border-top: 14px solid transparent;
      border-left: 14px solid #fff;
      border-right: 0 solid #fff;
      border-bottom: 14px solid transparent;
      content: " ";
    }
    .timeline li .timeline-panel.noarrow:before, .timeline li .timeline-panel.noarrow:after {
      top:0;
      right:0;
      display: none;
      border: 0;
    }

    .timeline li.timeline-inverted .timeline-panel {
      float: right;
    }

    .timeline li.timeline-inverted .timeline-panel:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }

    .timeline li.timeline-inverted .timeline-panel:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }


    /** timeline circle icons **/
    .timeline li .tl-circ {
      position: absolute;
      top: 23px;
      left: 50%;
      text-align: center;
      background: #e30e86;
      color: #fff;
      width: 35px;
      height: 35px;
      line-height: 35px;
      margin-left: -16px;
      border: 3px solid #757575;
      border-top-right-radius: 50%;
      border-top-left-radius: 50%;
      border-bottom-right-radius: 50%;
      border-bottom-left-radius: 50%;
      z-index: 99999;
    }


    /** timeline content **/

    .tl-heading h4 {
      margin: 0;
      color: #c25b4e;
    }

    .tl-body p, .tl-body ul {
      margin-bottom: 0;
    }

    .tl-body > p + p {
      margin-top: 5px;
    }

    /** media queries **/
    @media (max-width: 991px) {
      .timeline li .timeline-panel {
        width: 44%;
      }
    }

    @media (max-width: 700px) {
      .page-header h1 { font-size: 1.8em; }

      ul.timeline:before {
        left: 40px;
      }

      .tldate { width: 140px; }

      ul.timeline li .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
      }

      ul.timeline li .tl-circ {
        top: 22px;
        left: 22px;
        margin-left: 0;

      }
      ul.timeline > li > .tldate {
        margin: 0;
      }

      ul.timeline > li > .timeline-panel {
        float: right;
      }

      ul.timeline > li > .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
      }

      ul.timeline > li > .timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
      }
    }
    .pagination>li>a, .pagination>li>span {
      border-radius: 50% !important;margin: 0 5px;
    }

    </style>
<body>
    
    <div id="wrapper">

        <!-- Navigation -->
       <?php $this->view('siswa/navigation'); ?>
  
        <!-- Page Content -->
        <div id="page-wrapper">
<!-- 
          <div class="container-fluid text-center">
            <ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div> -->

          <div class="container-fluid">
            <header class="page-header">
              <h1>Jadwal Pertemuan</h1>
            </header>

            <ul class="timeline">
            <?php 
            $i = 0;
            if (isset($pertemuan)) {
              foreach ($pertemuan as $key => $value) { 
                $i++;
                if ($i % 2 == 1) {
                  $timeline = " ";
                }else{
                  $timeline = "timeline-inverted";
                }
                ?>
                
              <li><div class="tldate"><?=$value->tanggal_pertemuan ?></div></li>

              <li class="<?=$timeline ?>">
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <div class="tl-heading">
                    <h4><?=$value->nama_mapel ?></h4>
                    <small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10am to 6.30pm</small><br>
                    <small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?=$value->nama_awal_guru." ".$value->nama_akhir_guru ?></small><br><br>
                  </div>
                  <div class="tl-body">
                  <?php if ($value->status_pertemuan=="done") { ?>
                    <h3>Terlaksana</h3> | <a href="<?=base_url('siswa/pertemuan/materi/'.$value->id_pertemuan.'/'.$value->nama_mapel) ?>">Materi</a>
                  <?php }else{ ?>
                    <a href="<?=base_url('siswa/pertemuan/validasi/'.$value->id_pertemuan) ?>" class="cd-read-more">Validasi</a> | <a href="<?=base_url('siswa/pertemuan/materi/'.$value->id_pertemuan.'/'.$value->nama_mapel) ?>">Materi</a>
                  <?php } ?>
                  </div>
                </div>
              </li>
              <?php }} ?>
             
            </ul>
            </div>
            <!-- container fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->view('siswa/plugin'); ?>
</body>

</html>

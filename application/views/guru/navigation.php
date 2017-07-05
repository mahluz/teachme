<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard Guru</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=base_url('guru/siswa') ?>"><?php
      $this->load->model('Notifikasi_model');
      $i = 0;
      if($this->Notifikasi_model->get_request()) {
        $i++;
      }  echo "<b style='color: red;'>".$i."</b>"; ?> Request</a></li>
            <li><a href="<?=base_url('siswa/profile') ?>">Profile</a></li>
            <li><a href="<?=base_url('auth/logout') ?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
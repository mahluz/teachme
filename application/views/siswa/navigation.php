 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url() ?>">Dashboard Murid</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?=base_url('siswa/profile'); ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url('auth/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        <form class="navbar-form" action="<?=base_url('siswa/dashboard/search'); ?>" method="get" role="search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" name="q" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                            </form>
                        </li>
                        <li>
                            <a href="<?=base_url() ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('siswa/profile') ?>"><i class="fa fa-edit fa-fw"></i> Profile</a>
                        </li>
                        <li><a href="<?= base_url('siswa/mapel') ?>"><i class="fa fa-envelope fa-fw"></i> Course</a></li>
                        <!--li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Materi dan Quiz<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Materi</a>
                                </li>
                                <li>
                                    <a href="morris.html">Quiz</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level >
                        </li-->
                        <li>
                            <a href="<?=base_url('siswa/pertemuan') ?>"><i class="fa fa-table fa-fw"></i> Pertemuan</a>
                        </li>
                        <li>
                            <a href="<?=base_url('siswa/saldo/tagihan') ?>"><i class="fa fa-edit fa-fw"></i> Tagihan</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
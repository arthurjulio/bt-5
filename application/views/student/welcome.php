<body class="bg-white">
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="pt-lg-5 pt-4" href="#" style="margin: auto">
                <h1 class="display-3 mb-0"><strong><?= date("l, d M Y") ?></strong></h1>
                <h3 class="mt--1">Welcome Back <?= substr($session['nama'], 0, 17) ?>.</h3>
                <!-- <img src="<?= base_url() ?>/assets/img/brand/logo.png" style="z-index: 0; height: 4rem;" class="img-fluid"> -->
            </a>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-white py-7 py-lg-7 pt-lg-9">
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <!-- <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon> -->
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--7 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-11">
                    <div class="card border-0 mb-0" style="box-shadow: 0 0 0rem 0 rgba(4, 6, 8, 0.18);">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted py-4 mb-4">
                                <img src="<?= base_url() ?>/assets/img/illustration/run.svg" class="img-fluid" alt="">
                            </div>
                            <div class="card" style="box-shadow: 0 0 3rem 0 rgba(4, 6, 8, 0.14);">
                                <div class="card-header py-2" style="background: #5f5d7e;">
                                    <h3 class="text-center text-white mb-0">Today Absent</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>Masuk</h5>
                                                    <h4><strong><?= date("H:i A") ?></strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>Keluar</h5>
                                                    <button type="button" class="btn btn-sm btn-icon text-white" style="background-color: #ec7580;">
                                                        <span class="btn-inner--text">Absent</span>
                                                        <span class="btn-inner--icon"><i class="ni ni-time-alarm"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <h5 class="text-default">Logout</h5>
                                <a href="<?= base_url('Student/logout') ?>" class="btn btn-default btn-icon-only rounded-circle mb-2 mr-0" style="box-shadow: 0 0 2rem 0 rgba(4, 6, 8, 0.14);"><span class="btn-inner--icon"><i class="ni ni-bold-down"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="text-light"><small>Create new account</small></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

</body>
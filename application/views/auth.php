<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/argon.min5438.css?v=1.2.0" type="text/css">
</head>

<body class="bg-white">
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="pt-lg-5 pt-4 text-center" href="#" style="margin: auto">
                <h1 class="display-2 mb-0"><strong>My Absent Apps.</strong></h1>
                <h3 class="mt--1">Hello, Please Login.</h3>
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
                <div class="col-lg-5 col-md-12 col-11">
                    <div class="card border-0 mb-0" style="box-shadow: 0 0 0rem 0 rgba(4, 6, 8, 0.18);">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted py-4 mb-4">
                                <img src="<?= base_url() ?>/assets/img/illustration/exam.svg" class="img-fluid" alt="">
                            </div>
                            <form method="POST" action="<?= base_url() ?>/Auth" role="form">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative" style="box-shadow: 0 0 2rem 0 rgba(4, 6, 8, 0.14);">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="text" name="username" value="<?= set_value('username') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative" style="box-shadow: 0 0 2rem 0 rgba(4, 6, 8, 0.14);">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="mt--4 pl-1">
                                    <small class="text-danger text-center"><?= $this->session->flashdata('message') ?></small>
                                </div>
                                <div class="text-right">
                                    <label class="mr-2">Sign In</label><button type="submit" class="btn btn-default btn-icon-only rounded-circle my-4" style="box-shadow: 0 0 2rem 0 rgba(4, 6, 8, 0.14);"><span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span></button>
                                </div>
                            </form>
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
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                    <!-- <div class="copyright text-center text-muted">
                        &copy; 2020 <a href="https://www.solusiciptamedia.com/" class="font-weight-bold ml-1" target="_blank">Solusi Cipta Media</a>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url() ?>/assets/js/argon.min5438.js?v=1.2.0"></script>

    <script>
        // function login() {
        //     var username = $("#username").val();
        //     var password = $("#password").val();
        //     $.ajax({
        //         url: "<?= base_url() ?>/Auth/login",
        //         data: {
        //             username: username,
        //             password: password
        //         },
        //         type: "POST",
        //         dataType: "json",
        //         success: function(result) {
        //             if (result == "200") {

        //             } else {

        //             }
        //         }
        //     })
        // }
    </script>
</body>

</html>
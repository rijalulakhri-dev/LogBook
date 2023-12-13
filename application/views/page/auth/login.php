<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
		<link rel="shortcut icon" href="<?= base_url('public/') ?>images/logo-pim.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="<?= base_url('public/') ?>css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?= base_url('public/') ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url('public/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url('public/') ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="<?= base_url('public/') ?>images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Log Book</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Welcome Back !</h5>
                                            <p class="text-muted mt-2">Login untuk lanjut ke Log Book</p>
                                        </div>
                                        <form class="mt-4 pt-2" method="POST" action="<?= base_url($action); ?>" enctype="multipart/form-data">
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text" class="form-control" name="nomor_pengguna">
                                                <label for="input-username">NIP/No badge</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5" name="password">
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Log Book</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8 col-md-6">
							<img src="<?= base_url('public/') ?>images/bg-new.jpg" class="img-fluid" alt="">
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>

        


        <!-- JAVASCRIPT -->
        <script src="<?= base_url('public/') ?>libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/node-waves/waves.min.js"></script>
        <script src="<?= base_url('public/') ?>libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?= base_url('public/') ?>libs/pace-js/pace.min.js"></script>

        <script src="<?= base_url('public/') ?>js/pages/pass-addon.init.js"></script>

        <script src="<?= base_url('public/') ?>js/pages/feather-icon.init.js"></script>

    </body>

</html>

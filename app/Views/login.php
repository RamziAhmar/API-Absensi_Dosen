<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('template/template/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('template/template/') ?>vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('template/template/') ?>css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('template/template/') ?>images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="<?= base_url('template/template/') ?>images/logo.svg" alt="logo">
                                </div>
                                <h4>Silahkan Login! </h4>
                                <form class="pt-3" method="post" action="/login">
                                    <div class="form-group">
                                        <input name="username" type="text" class="form-control form-control-lg"
                                            id="exampleInputEmail1" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url('template/template/') ?>vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url('template/template/') ?>js/template.js"></script>
    <!-- endinject -->
</body>

</html>
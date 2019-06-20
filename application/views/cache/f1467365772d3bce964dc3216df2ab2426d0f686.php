
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo e($title); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/font-awesome/css/font-awesome.min.css">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/fontastic.css">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <!-- jQuery Circle-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/grasp_mobile_progress_circle-1.0.0.min.css">
        <!-- Custom Scrollbar-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?=base_url('assets/')?>img/favicon.ico">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <div class="page login-page">
            <div class="container">
                <div class="form-outer text-center d-flex align-items-center">
                    <div class="form-inner">
                        <div class="logo text-uppercase"><span>MANAJEMEN</span><strong class="text-primary">KEUANGAN</strong></div>
                        <p>Selamat datang di aplikasi manajemen keuangan harian By <a href="https://www.serbangoding.com" class="external">Serba Ngoding Dev</a> Silahkan login untuk mengakses!</p>
                        <form method="post" action="<?= site_url('auth/login')?>" class="text-left form-validate">
                            <div class="form-group-material <?=get_flashdata('error')? "has-error" : null?>" >
                                <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material <?=get_flashdata('error')? "is-invalid" : null?>" <?php if(get_flashdata('error')): ?> autofocus <?php endif; ?>>
                                <label for="login-username" class="label-material"><?php if(get_flashdata('error')): ?> <?php echo e(get_flashdata('error')); ?> <?php else: ?> Username <?php endif; ?></label>
                            </div>
                            <div class="form-group-material <?=get_flashdata('error_pass')? "has-error" : null?>">
                                <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material  <?=get_flashdata('error_pass')? "is-invalid" : null?>" <?php if(get_flashdata('error_pass')): ?> autofocus <?php endif; ?>>
                                <label for="login-password" class="label-material"><?php if(get_flashdata('error_pass')): ?> <?php echo e(get_flashdata('error_pass')); ?> <?php else: ?> Password <?php endif; ?></label>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="copyrights text-center">
                        <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
        <script src="<?=base_url('assets/')?>vendor/popper.js/umd/popper.min.js"> </script>
        <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url('assets/')?>js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
        <script src="<?=base_url('assets/')?>vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="<?=base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
        <script src="<?=base_url('assets/')?>vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?=base_url('assets/')?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Main File-->
        <script src="<?=base_url('assets/')?>js/front.js"></script>
    </body>
</html>
<?php /* E:\Coding\Web\ci-catatan\application\views/auth.blade.php */ ?>
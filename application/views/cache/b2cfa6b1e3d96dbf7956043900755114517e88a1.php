<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
    <meta name="description" content="">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/')); ?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo e(base_url('assets/')); ?>img/favicon.ico">
    
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/sweetalert2.min.css')); ?>">
</head>
<body>
    
    <?php echo $__env->make('template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
    <div class="page">
        
        <?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>
    
    <!-- JavaScript files-->
    <script src="<?php echo e(base_url('assets/')); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(base_url('assets/')); ?>vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo e(base_url('assets/')); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(base_url('assets/')); ?>js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo e(base_url('assets/')); ?>vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo e(base_url('assets/')); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo e(base_url('assets/')); ?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo e(base_url('assets/')); ?>js/front.js"></script>
    
    <script src="<?php echo e(base_url('assets/js/sweetalert2.all.min.js')); ?>"></script>
    
    <script src="<?php echo e(base_url('assets/js/myscript.js')); ?>"></script>
</body>
</html>
<?php /* E:\Coding\Web\ci-catatan\application\views/template/layout.blade.php */ ?>
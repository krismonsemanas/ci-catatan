<?php $__env->startSection('content'); ?>  
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(site_url()); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <header>
                <h1 class="h3 display"><?php echo e($title); ?></h1>
            </header>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <?php echo e($title); ?> Bulan Ini
                        </div>
                        <div class="card-body">
                        <a href="<?php echo e(site_url('laporan/pdf')); ?>" title="Cetak" target="_blank" class="btn btn-primary btn-block"> <i class="fa fa-print"></i></a>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <?php echo e($title); ?> Tahunan
                        </div>
                        <div class="card-body">
                            <a href="<?php echo e(site_url('laporan/tahunan')); ?>" title="Cetak"  target="_blank" class="btn btn-primary btn-block"> <i class="fa fa-print"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\Coding\Web\ci-catatan\application\views/catatan/laporan.blade.php */ ?>
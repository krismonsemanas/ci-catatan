<section>
        <div class="container-fluid">
            <header>
                <h1 class="h3 display"><?php echo e($title); ?></h1>
            </header>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <?php echo e($title); ?> Bulan Ini
                        </div>
                        <div class="card-body">
                            <table class="table table-striped text-center">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Keterangan</th>
                                            <th>Deskirpsi</th>
                                            <th>Nominal</th>
                                            <th>No Hp/Token</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->index+1); ?></td>
                                            <td><?php echo e($data->keterangan); ?></td>
                                            <td><?php echo e($data->deskripsi); ?></td>
                                            <td><?php echo e(rupiah($data->nominal)); ?></td>
                                            <td><?php if($data->no_hp != null): ?> <?php echo e($data->no_hp); ?> <?php else: ?> - <?php endif; ?></td>
                                            <td><?php echo e($data->status); ?></td>
                                            <td><?php echo e(tglInd($data->created_at)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <a href="<?php echo e(site_url('laporan/generatepdf')); ?>" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create PDF File</a> 
                        <a href="<?php echo e(site_url('laporan')); ?>" class="pull-right btn btn-info btn-xs" style="margin: 2px;"><i class="fa fa-mail-reply"></i> Back To Laporan</a>  
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
<?php /* E:\Coding\Web\ci-catatan\application\views/laporan/pdf.blade.php */ ?>
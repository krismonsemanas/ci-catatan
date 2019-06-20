<?php $__env->startSection('content'); ?>  
<?php if($title == "Edit Pemasukan"): ?>
    <?php
        $url = "masuk";
        $text = "Masuk";
    ?>
<?php elseif($title = "Edit Pengeluaran"): ?> 
    <?php
        $url = "keluar";
        $text = "Keluar";
    ?>
<?php endif; ?>  
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(site_url()); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(site_url('catatan/'.$url)); ?>"><?php echo e($text); ?></a></li>
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
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4><?php echo e($title); ?></h4>
                                <?php if(get_flashdata('error')): ?>
                                    <div class="error" data-message="<?=get_flashdata('error')?>"></div>
                                <?php endif; ?>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(site_url('catatan/'.$url)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(site_url('catatan/edit/'.$catatan->catatan_id)); ?>" method="post">
                                <div class="form-group">
                                    <label for="desc">Deskripsi</label>
                                    <input type="text" name="desc" id="desc" value="<?php echo e($catatan->deskripsi); ?>" class="form-control <?php if(form_error('desc')): ?> is-invalid <?php endif; ?> )">
                                    <?php echo e(form_error('desc','<div class="invalid-feedback">','</div>')); ?>

                                </div>
                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <input type="number" name="nominal" id="nominal" value="<?php echo e($catatan->nominal); ?>" class="form-control <?php if(form_error('nominal')): ?> is-invalid <?php endif; ?> )">
                                    <?php echo e(form_error('nominal','<div class="invalid-feedback">','</div>')); ?>

                                </div>
                                <div class="form-group ">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control <?php if(form_error('status')): ?> is-invalid <?php endif; ?> )">
                                        <option value="">-- pilih salah satu --</option>
                                        <option value="Ok">Ok</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                    <?=form_error('status','<div class="invalid-feedback">','</div>')?>
                                </div>
                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <select name="ket" id="ket" class="form-control <?php if(form_error('ket')): ?> is-invalid <?php endif; ?> )">
                                        <option value="">-- pilih salah satu --</option>
                                        <?php $__currentLoopData = $ket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php if($catatan->keterangan_id == $item->id ): ?> selected <?php else: ?> null <?php endif; ?>><?php echo e($item->keterangan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?=form_error('ket','<div class="invalid-feedback">','</div>')?>
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger">Batal</button>
                                    <button type="submit" name="<?php echo e($url); ?>" class="btn btn-info">Save</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\Coding\Web\ci-catatan\application\views/catatan/edit.blade.php */ ?>
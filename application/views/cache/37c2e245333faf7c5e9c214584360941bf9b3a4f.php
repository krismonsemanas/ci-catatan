<?php $__env->startSection('content'); ?>
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(site_url()); ?>">Home</a></li>
            <li class="breadcrumb-item active">Pemasukan</li>
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
                            <h4>Data <?php echo e($title); ?></h4>
                        </div>
                        <div class="pull-right">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Keterangan</th>
                                        <th>Deskirpsi</th>
                                        <th>Nominal</th>
                                        <th>No Hp/Token</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th><i class="fa fa-cogs"></i></th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                           <td>1</td>
                                           <td>Pemasukan</td>
                                           <td>Saldo</td>
                                           <td>Rp. 2.000.000</td>
                                           <td></td>
                                           <td><div class="badge badge-info">Ok</td>
                                           <td>29 March 2019</td>
                                           <td>
                                               <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                               <a href="#" class="btn btn-danger btn-xs btn-hapus"><i class="fa fa-trash-o"></i> Hapus</a>
                                           </td>
                                        </tr>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Tambah <?php echo e($title); ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="" method="post" class="text-left form-validate">
                <div class="modal-body">
                    <div class="form-group-material">
                        <input id="desc" type="text" name="desc" required class="input-material">
                        <label for="desc" class="label-material">Deskirpsi</label>
                    </div>        
                    <div class="form-group-material">
                        <input id="nominal" type="number" name="nominal" required  class="input-material">
                        <label for="nominal" class="label-material">Nominal</label>
                    </div>        
                    <div class="form-group-material">
                        <input id="hp" type="text" name="hp" class="input-material">
                        <label for="hp" class="label-material">No Hp</label>
                    </div>        
                    <div class="form-group-material">
                        <input type="checkbox" checked="checked" name="status" id="status">
                        <label for="status" >Ok?</label>
                    </div>        
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\Coding\Web\ci-catatan\application\views/catatan/masuk.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="name"><strong class="text-uppercase">Masuk</strong><span>Bulan Ini</span>
                        <div class="nomor"><b><?php echo e(rupiah($catatan->pemasukan)); ?></b></div>
                    </div>
                </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-sign-out"></i></div>
                    <div class="name"><strong class="text-uppercase">keluar</strong><span>Bulan Ini</span>
                        <div class="nomor"><b><?php echo e(rupiah($catatan->pengeluaran)); ?></b></div>
                    </div>
                </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-list-alt"></i></div>
                    <div class="name"><strong class="text-uppercase">Saldo</strong><span>Bulan Ini</span>
                        <div class="nomor"><b><?php echo e(rupiah($catatan->selisih)); ?></b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dashboard-header section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-lg-12">
                <div id="myChart"></div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo e(base_url('assets/js/highcharts.js')); ?>"></script>
<script>
    Highcharts.chart('myChart', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Pencatatan Keuangan Harian'
    },
    subtitle: {
        text: 'Source: http://www.serbangoding.com'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Rupiah (Rp)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Pemasukan',
        data: [
            <?php if(showHistories(1,01) > 0) echo showHistories(1,01) ?>,
            <?php if(showHistories(1,02) > 0) echo showHistories(1,02) ?>,
            <?php if(showHistories(1,03) > 0) echo showHistories(1,03) ?>,
            <?php if(showHistories(1,04) > 0) echo showHistories(1,04) ?>,
            <?php if(showHistories(1,05) > 0) echo showHistories(1,05) ?>,
            <?php if(showHistories(1,06) > 0) echo showHistories(1,06) ?>,
            <?php if(showHistories(1,07) > 0) echo showHistories(1,07) ?>,
            <?php if(showHistories(1,8) > 0) echo showHistories(1,8) ?>,
            <?php if(showHistories(1,9) > 0) echo showHistories(1,9) ?>,
            <?php if(showHistories(1,10) > 0) echo showHistories(1,10) ?>,
            <?php if(showHistories(1,11) > 0) echo showHistories(1,11) ?>,
            <?php if(showHistories(1,12) > 0) echo showHistories(1,12) ?>
        ]
    }, {
        name: 'Pengeluaran',
        data: [
            <?php if(showHistories(2,01) > 0) echo showHistories(2,01) ?>,
            <?php if(showHistories(2,02) > 0) echo showHistories(2,02) ?>,
            <?php if(showHistories(2,03) > 0) echo showHistories(2,03) ?>,
            <?php if(showHistories(2,04) > 0) echo showHistories(2,04) ?>,
            <?php if(showHistories(2,05) > 0) echo showHistories(2,05) ?>,
            <?php if(showHistories(2,06) > 0) echo showHistories(2,06) ?>,
            <?php if(showHistories(2,07) > 0) echo showHistories(2,07) ?>,
            <?php if(showHistories(2,8) > 0) echo showHistories(2,8) ?>,
            <?php if(showHistories(2,9) > 0) echo showHistories(2,9) ?>,
            <?php if(showHistories(2,10) > 0) echo showHistories(2,10) ?>,
            <?php if(showHistories(2,11) > 0) echo showHistories(2,11) ?>,
            <?php if(showHistories(2,12) > 0) echo showHistories(2,12) ?>
        ]
    }, {
        name: 'Selisih',
        data: [
            <?php if(showHistories(3,01) > 0) echo showHistories(3,01) ?>,
            <?php if(showHistories(3,02) > 0) echo showHistories(3,02) ?>,
            <?php if(showHistories(3,03) > 0) echo showHistories(3,03) ?>,
            <?php if(showHistories(3,04) > 0) echo showHistories(3,04) ?>,
            <?php if(showHistories(3,05) > 0) echo showHistories(3,05) ?>,
            <?php if(showHistories(3,06) > 0) echo showHistories(3,06) ?>,
            <?php if(showHistories(3,07) > 0) echo showHistories(3,07) ?>,
            <?php if(showHistories(3,8) > 0) echo showHistories(3,8) ?>,
            <?php if(showHistories(3,9) > 0) echo showHistories(3,9) ?>,
            <?php if(showHistories(3,10) > 0) echo showHistories(3,10) ?>,
            <?php if(showHistories(3,11) > 0) echo showHistories(3,11) ?>,
            <?php if(showHistories(3,12) > 0) echo showHistories(3,12) ?>
        ]
    }
]
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\Coding\Web\ci-catatan\application\views/home/index.blade.php */ ?>
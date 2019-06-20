@extends('template.layout')
@section('content')  
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{site_url()}}">Home</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <header>
                <h1 class="h3 display">{{$title}}</h1>
            </header>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            {{$title}} Bulan Ini
                        </div>
                        <div class="card-body">
                        <a href="{{site_url('laporan/pdf')}}" title="Cetak" target="_blank" class="btn btn-primary btn-block"> <i class="fa fa-print"></i></a>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            {{$title}} Tahunan
                        </div>
                        <div class="card-body">
                            <a href="{{site_url('laporan/tahunan')}}" title="Cetak"  target="_blank" class="btn btn-primary btn-block"> <i class="fa fa-print"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('template.layout')
@section('content')  
@if ($title == "Edit Pemasukan")
    @php
        $url = "masuk";
        $text = "Masuk";
    @endphp
@elseif($title = "Edit Pengeluaran") 
    @php
        $url = "keluar";
        $text = "Keluar";
    @endphp
@endif  
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{site_url()}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{site_url('catatan/'.$url)}}">{{$text}}</a></li>
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
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4>{{$title}}</h4>
                                @if (get_flashdata('error'))
                                    <div class="error" data-message="<?=get_flashdata('error')?>"></div>
                                @endif
                            </div>
                            <div class="pull-right">
                                <a href="{{site_url('catatan/'.$url)}}" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{site_url('catatan/edit/'.$catatan->catatan_id)}}" method="post">
                                <div class="form-group">
                                    <label for="desc">Deskripsi</label>
                                    <input type="text" name="desc" id="desc" value="{{$catatan->deskripsi}}" class="form-control @if(form_error('desc')) is-invalid @endif )">
                                    {{form_error('desc','<div class="invalid-feedback">','</div>')}}
                                </div>
                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <input type="number" name="nominal" id="nominal" value="{{$catatan->nominal}}" class="form-control @if(form_error('nominal')) is-invalid @endif )">
                                    {{form_error('nominal','<div class="invalid-feedback">','</div>')}}
                                </div>
                                <div class="form-group ">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control @if(form_error('status')) is-invalid @endif )">
                                        <option value="">-- pilih salah satu --</option>
                                        <option value="Ok">Ok</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                    <?=form_error('status','<div class="invalid-feedback">','</div>')?>
                                </div>
                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <select name="ket" id="ket" class="form-control @if(form_error('ket')) is-invalid @endif )">
                                        <option value="">-- pilih salah satu --</option>
                                        @foreach ($ket as $item)
                                            <option value="{{$item->id}}" @if ($catatan->keterangan_id == $item->id ) selected @else null @endif>{{$item->keterangan}}</option>
                                        @endforeach
                                    </select>
                                    <?=form_error('ket','<div class="invalid-feedback">','</div>')?>
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger">Batal</button>
                                    <button type="submit" name="{{$url}}" class="btn btn-info">Save</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection
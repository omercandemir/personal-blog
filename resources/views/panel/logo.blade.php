@extends('panel.layouts.master')

@section('title')
    Site Ayarları
@endsection

@section('siteadi')
    {{$ayar->site_adi}}
@endsection

@section('content')
    
</div><!-- Left Sidebar -->
<div class="page-content">
    <div class="container-fluid">
        @if (session('basarili'))
            <div class="text-center">
                <div class="alert alert-success">
                    <b>{{session('basarili')}}</b>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Site Ayarları</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Logo değiştirirken lütfen dikkatli olun, eski logoya tekrar dönmek için, tekrar yüklemelisiniz.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Mevcut Beyaz Logo</h5><br>
                        <img style="background-color: black;" src="{{asset($ayar->logo)}}" alt="" class="img-fluid"><br><hr>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Beyaz Logo (arka plan koyu)</h5>
                        <form action="{{ url('admin/logo/update') }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input name="logo" type="file" class="form-control" placeholder="Enter site name" enctype="multipart/form-data">
                            </div>
                            <button name="guncel1" type="submit" class="btn btn-primary">Logoyu Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->



@endsection
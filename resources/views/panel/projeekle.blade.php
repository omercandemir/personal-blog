@extends('panel.layouts.master')

@section('title')
    Site Ayarları | Yeni Yazı
@endsection

@section('js')
    @trixassets
@endsection

@section('siteadi')
    {{$ayar->site_adi}}
@endsection

@section('content')
    
</div><!-- Left Sidebar -->
<div class="page-content">
    <div class="container-fluid">
            @if (session('basarili'))
            <div class="alert alert-success" role="alert">
                <b>{{session('basarili')}}</b>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Yeni Proje Yayınlama Sayfası</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Yeni proje yayınlamak için aşağıdaki tüm alanları doldurmalısınız!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yeni Proje</h5>
                        <form action="{{ route('projeler.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="baslik">Proje Başlığı</label>
                                        <input name="baslik" id="baslik" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input name="resim" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="acik" type="hidden" name="aciklama" value="" />
                                <trix-editor input="acik"></trix-editor>
                            </div>
                            <hr>
                            <h5 class="card-title text-center"><b>Proje İçeriği</b></h5>
                            <div class="form-group">
                                <input id="content" type="hidden" name="yazi" value="" />
                                <trix-editor input="content"></trix-editor>
                            </div>
                            <button type="submit" class="btn btn-primary">Projeyi Paylaş</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->
@endsection
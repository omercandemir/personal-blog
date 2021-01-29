@extends('panel.layouts.master')

@section('title')
    Site Ayarları | Proje Güncelle
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
                <h2 class="page-title">Proje Düzenleme Sayfası</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Projeyi güncellemek için için aşağıdaki tüm alanları doldurmalısınız!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Proje Düzenle</h5>
                        <form action="{{ route('projeler.update', $proje->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="baslik">{{$proje->proje_adi}}</label>
                                        <input name="yenibaslik" id="baslik" type="text" class="form-control" placeholder="{{$proje->proje_adi}}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input name="resim" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="yazar">{{$proje->proje_aciklama}}</label>
                                        <input name="yazar" id="yazar" type="text" class="form-control" placeholder="{{$proje->proje_aciklama}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="card-title text-center"><b>Yazı İçeriği</b></h5>
                            <div class="form-group">
                                <input id="content" type="hidden" name="yazi" value="{{$proje->proje_yazi}}" required/>
                                <trix-editor input="content"></trix-editor>
                            </div>
                            <button type="submit" class="btn btn-primary">Projeyi Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->
@endsection
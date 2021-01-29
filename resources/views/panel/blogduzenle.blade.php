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
                <h2 class="page-title">Yazı Düzenleme Sayfası</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Yazıyı güncellemek için tüm alanları doldurmalısınız!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yeni Yazı</h5>
                        <form action="{{ route('bloglar.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="baslik">{{$blog->baslik}}</label>
                                        <input name="yenibaslik" id="baslik" type="text" class="form-control" placeholder="{{$blog->baslik}}" required>
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
                                        <label for="yazar">{{$blog->yazar}}</label>
                                        <input name="yazar" id="yazar" type="text" class="form-control" placeholder="{{$blog->yazar}}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select name="kategori" class="form-control">
                                            <option value="{{$blog->kategori_id}}" selected disabled>Makale Kategorisi</option>
                                            @foreach ($kategoriler as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->adi}}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="card-title text-center"><b>Yazı İçeriği</b></h5>
                            <div class="form-group">
                                <input id="content" type="hidden" name="yazi" value="{{$blog->yazi}}" required/>
                                <trix-editor input="content"></trix-editor>
                            </div>
                            <button type="submit" class="btn btn-primary">Yazıyı Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->
@endsection
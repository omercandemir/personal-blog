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
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Site Ayarları</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Aşağıdaki kutuları doldurarak site bilgilerini güncelleyebilirsiniz.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site Ayarları</h5>
                        <form action="{{ url('admin/ayar/update') }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Site İsmi</label>
                                <input name="site_adi" type="text" class="form-control" placeholder="Enter site name" value="{{ $ayar->site_adi }}">
                            </div>
                            <div class="form-group">
                                <label>Site Açıklaması (description)</label>
                                <input name="site_aciklama" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->site_aciklama}}">
                            </div>
                            <div class="form-group">
                                <label>Site Özel Söz</label>
                                <input name="ozel_soz" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->ozel_soz}}">
                            </div>
                            <div class="form-group">
                                <label>İletişim E-Posta Adresi</label>
                                <input name="mail" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->mail}}">
                            </div>
                            <div class="form-group">
                                <label>Twitter Link</label>
                                <input name="twitter" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->twitter}}">
                            </div>
                            <div class="form-group">
                                <label>Facebook Link</label>
                                <input name="facebook" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->facebook}}">
                            </div>
                            <div class="form-group">
                                <label>İnstagram Link</label>
                                <input name="instagram" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->instagram}}">
                            </div>
                            <div class="form-group">
                                <label>Linkedin Link</label>
                                <input name="linkedin" type="text" class="form-control" placeholder="Site Açıklaması" value="{{$ayar->linkedin}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Site Bilgilerini Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->



@endsection
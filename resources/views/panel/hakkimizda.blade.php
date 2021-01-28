<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
@extends('panel.layouts.master')

@section('title')
    Site Ayarları | Hakkımızda Sayfası
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
                <h2 class="page-title">Hakkımızda Sayfası</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Aşağıdaki editör ile hakkımızda sayfasını güncelleyebilirsiniz.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hakkımızda Yazısı</h5>
                        <form action="{{ url('admin/hakkimizda/update') }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <textarea name="hakkimizda" class="form-control" rows="3">{{$ayar->hakkimizda}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Hakkımızda Sayfasını Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>


@endsection
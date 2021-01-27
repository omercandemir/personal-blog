@extends('panel.layouts.master')
@section('content')


@section('siteadi')
 {{$ayar->site_adi}}
@endsection

@section('title')
    Yönetici Kontrol Paneli | Anasayfa
@endsection

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Yönetici Kontrol Paneli</h2>
                <div class="text-center">
                    @if (session('basarili'))
                        <div class="alert alert-success" role="alert">
                            <b>{{session('basarili')}}</b>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card">
                            <div class="card-body">
                                <h5 class="card-title">Blog Sayısı</h5>
                                <div class="info-card-text">
                                    <h3>{{$bsay}}</h3>
                                    <span class="info-card-helper">Tüm Zamanlar</span>
                                </div>
                                <div class="info-card-icon">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card info-info">
                            <div class="card-body">
                                <h5 class="card-title">Proje Sayısı</h5>
                                <div class="info-card-text">
                                    <h3>{{$psay}}</h3>
                                    <span class="info-card-helper">Tüm Zamanlar</span>
                                </div>
                                <div class="info-card-icon">
                                    <i class="material-icons-outlined">remove_red_eye</i>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card info-warning">
                            <div class="card-body">
                                <h5 class="card-title">Yönetici Hesabı</h5>
                                <div class="info-card-text">
                                    <h3>{{$usay}}</h3>
                                    <span class="info-card-helper">Aktif Liste</span>
                                </div>
                                <div class="info-card-icon">
                                    <i class="material-icons">attach_money</i>
                                </div>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card info-warning">
                            <div class="card-body">
                                <h5 class="card-title">Son Güncelleme</h5>
                                <div class="info-card-text">
                                    <h3>{{now()}}</h3>
                                    <span class="info-card-helper">Tüm Zamanlar</span>
                                </div>
                                <div class="info-card-icon">
                                    <i class="material-icons">attach_money</i>
                                </div>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Son 5 Blog</h5>
                        <ul class="report-list list-unstyled">
                            @foreach ($bloglar as $blog)
                                <li class="report-item report-info">
                                    <div class="report-icon"><i class="material-icons">tab</i></div>
                                    <div class="report-text"><a href="{{url('blog/'.$blog->slug.'')}}" target="_blank" style="color:black">{{$blog->baslik}}</a>
                                        <span>{{Str::substr($blog->yazi, 0, 42)}}...</span>
                                    </div>
                                    <div class="report-helper">{{ $blog->created_at }}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Son 5 Proje</h5>
                        <ul class="report-list list-unstyled">
                            @foreach ($projeler as $proje)
                                <li class="report-item report-danger">
                                    <div class="report-icon"><i class="material-icons">language</i></div>
                                    <div class="report-text"><a href="{{url('projeler/'.$proje->slug.'')}}" target="_blank" style="color:black">{{$proje->proje_adi}}</a>
                                        <span>{{Str::substr($proje->proje_aciklama, 0, 42)}}...</span>
                                    </div>
                                    <div class="report-helper">{{$proje->created_at}}</div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div><!-- Page Content -->
@endsection
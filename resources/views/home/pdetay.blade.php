@extends('home.layouts.master')
@section('title')
   Ömer Can | Projeler
@endsection

@section('content')

@section('logo')
{{ asset($ayar->logo) }}
@endsection
@section('logo_dark')
{{ asset($ayar->logo_dark) }}
@endsection
@section('siteadi')
{{$ayar->site_adi}}
@endsection

<div class="small-header bg-img">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Our works</h3>
        </div>
        <div class="col-md-6 text-right">
          <h6 class="breadcrumb"><a href="{{ url('/') }}">Anasayfa</a> / <a href="{{ url('projeler/') }}">Projeler</a> / {{$proje->proje_adi}}
          </h6>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container">
      <div class="row wow fadeIn">
        <div class="col-md-7"><div class="embed-responsive embed-responsive-16by9">
            <div class="item"><img class="img-responsive" src="{{asset($proje->proje_resim)}}" alt=""></div>
        </div>
          <hr>
            
        </div>
        <div class="col-md-5">
          <h3>{{$proje->proje_adi}}</h3>
            {{ $proje->proje_yazi }}
          <hr>
          <h6><i class="fa fa-user fa-fw"></i> Yayınlayan: Ömer Can
          </h6>
          <h6><i class="fa fa-calendar fa-fw"></i> Tarih: {{$proje->created_at}}
        </div>
      </div>
    </div>
  </section>
  <section class="section-small bg-white">
    <div class="container grid-pad">
      <h3>Diğer Projeler</h3>
      <div class="row">
        @foreach ($projeler as $pd)
            <div class="col-sm-6 col-md-3"><a href="{{ url('projeler/'.$pd->slug.'') }}"><img class="img-responsive center-block" src="{{ asset($pd->proje_resim) }}" alt=""/>
                <h5>{{ $pd->proje_adi }}</h5></a>
            <p>{{$pd->proje_aciklama}}</p>
            </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection
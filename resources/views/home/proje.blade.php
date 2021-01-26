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
          <h3>Çalışmalarım</h3>
        </div>
        <div class="col-md-6 text-right">
          <h6 class="breadcrumb"><a href="{{ url('/') }}">Anasayfa</a> / <a href="{{url('/projeler')}}">Projeler</a>
          </h6>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio-->
  <section class="section-small portfolio-wide" id="portfolio">
    <div class="container">
      <div class="row portfolio-items" id="grid">
          @foreach ($projeler as $proje)
            <div class="col-sm-4" data-groups="[&quot;branding&quot;]">
                <div class="portfolio-item"><a href="{{ url('projeler/'.$proje->slug.'') }}"><img src="{{asset($proje->proje_resim)}}" alt="">
                    <div class="portfolio-overlay">
                        <div class="caption">
                        <h5>{{$proje->proje_adi}}</h5><span>{{$proje->proje_aciklama}}</span>
                        </div>
                    </div></a>
                </div>
            </div>
        @endforeach
        
        <!-- sizerli.span3.m-span3.shuffle_sizer
        -->
      </div>
      <div class="text-center">
        {{$projeler->links()}}
      </div>
    </div>
  </section>

@endsection
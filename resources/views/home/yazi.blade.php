@extends('home.layouts.master')
@section('title')
   Ömer Can | {{ $yazi->baslik }}
@endsection

@section('content')
@section('logo')
{{ '../'.$ayar->logo }}
@endsection
@section('logo_dark')
{{'../'.$ayar->logo_dark}}
@endsection
@section('siteadi')
{{'../'.$ayar->site_adi}}
@endsection

<header class="intro introhalf" data-background="{{ '../'.$yazi->resim }}">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h5>{{ $yazi->yazar}} tarafından {{ $yazi->created_at }} tarihinde yayınlandı</h4>
            <h2>{{ $yazi->baslik }}</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section-small" id="news-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              {{ $yazi->yazi }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
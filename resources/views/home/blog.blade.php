@extends('home.layouts.master')
@section('title')
   Ömer Can | Bloglar
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
          <h3>Blog Yazıları</h3>
        </div>
        <div class="col-md-6 text-right">
          <h6 class="breadcrumb"><a href="{{ url('/') }}">Anasayfa</a> / <a href="{{ url('/bloglar') }}">Blog</a>
          </h6>
        </div>
      </div>
    </div>
  </div>
  <!-- News Block-->
  <section class="section-small" id="news">
    <div class="container">
      <div class="row grid-pad">
        <div class="col-md-8">
          <div class="row">
            @foreach ($bloglar as $blog)
              <div class="col-sm-6"><a href="{{url('blog/'.$blog->slug.'')}}"><img class="img-responsive center-block" src="{{asset($blog->resim)}}" alt="">
                  <h5>{{Str::substr($blog->baslik, 0, 45)}}</h5></a>
                <p>{{Str::substr($blog->yazi, 0,125)}}</p><a class="btn btn-gray btn-xs" href="{{ url('blog/'.$blog->slug.'') }}">Devamını Oku</a>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <form class="form-inline subscribe-form" action="#" method="post">
            <div class="input-group input-group-lg">
              <input class="form-control" type="search" name="search" placeholder="Blog içinde ara..."><span class="input-group-btn">
                <button class="btn btn-dark" type="submit" name="search"><i class="fa fa-search fa-lg"></i></button></span>
            </div>
          </form>
          <hr>
          <h4>Kategoriler</h4>
          <ul class="list-unstyled">
            @foreach ($kategoriler as $kategori)
                <li><a href="{{ url('/kategori/'.$kategori->slug.'') }}">{{ $kategori->adi }}</a></li>
            @endforeach
          </ul>
          <hr>
          <h4>İlginizi Çekebilir</h4>
          <div class="row no-pad">
            @foreach ($icekebilir as $cek)
                <div class="col-md-6 col-sm-3">
                <p><a href="{{ url('yazi/'.$cek->slug.'') }}"><img class="img-responsive" src="{{ asset($cek->resim) }}" alt=""></a></p>
                </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-8 text-center">
          {{ $bloglar->links() }}
      </div>
    </div>
  </section>
@endsection
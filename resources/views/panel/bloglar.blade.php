@extends('panel.layouts.master')
@section('content')


@section('siteadi')
 {{$ayar->site_adi}}
@endsection

@section('title')
    Yönetici Kontrol Paneli | Tüm Yazılar
@endsection


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Tüm Yazılar</h2>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Aşağıda paylaşılmış tüm yazıları görüyorsunuz.
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tüm Yazılar</h5>
                        <div><a href="{{url('admin/bloglar/yeni')}}" class="btn btn-success waves-effect waves-light"><span class="material-icons">add</span> Yeni Yazı</a></div><br>
                        <div class="table-container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Başlık</th>
                                            <th scope="col">Yazar</th>
                                            <th scope="col">Tarih</th>
                                            <th scope="col">İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bloglar as $blog)
                                            <tr>
                                                <th scope="row">{{$blog->id}}</th>
                                                <td>{{$blog->baslik}}</td>
                                                <td>{{$blog->yazar}}</td>
                                                <td>{{$blog->created_at}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-info waves-effect waves-light"><span class="material-icons">edit</span></a>
                                                    <a href="#" class="btn btn-danger waves-effect waves-light"><span class="material-icons">delete</span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                {{$bloglar->links()}}
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
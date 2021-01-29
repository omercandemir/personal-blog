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
                        @if (session('basarili'))
                            <div class="alert alert-success" role="alert">
                                <b>{{session('basarili')}}</b>
                            </div>
                        @endif
                        <h5 class="card-title">Tüm Projeler</h5>
                        <div><a href="{{url('admin/projeler/yeni')}}" class="btn btn-success waves-effect waves-light"><span class="material-icons">add</span> Yeni Proje</a></div><br>
                        <div class="table-container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Başlık</th>
                                            <th scope="col">Tarih</th>
                                            <th scope="col">İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projeler as $proje)
                                            <tr>
                                                <th scope="row">{{$proje->id}}</th>
                                                <td>{{$proje->proje_adi}}</td>
                                                <td>{{$proje->created_at}}</td>
                                                <td>
                                                    <a href="{{ route('projeler.edit', $proje->id) }}" class="btn btn-info waves-effect waves-light"><span class="material-icons">edit</span></a>
                                                    <a href="{{ route('projeler.destroy', $proje->id) }}" class="btn btn-danger waves-effect waves-light"><span class="material-icons">delete</span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                {{$projeler->links()}}
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
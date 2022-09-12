@extends('layouts.adminbase')

@section('title', 'Kategori Listesi')

@section('content')
<div class="container-fluid pt-1 px-4">
    <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kategori Listesi</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Ana Sayfa</a></li>
                <li class="breadcrumb-item" aria-current="page">Kategori Ekle</li>
            </ol>
        </nav>
    </div>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Category Table</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">Anahtar Kelime</th>
                    <th scope="col">Resim</th>
                    <th scope="col">Statü</th>
                    <th scope="col">Düzenle</th>
                    <th scope="col">Sil</th>
                    <th scope="col">Göster</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $rs)
                <tr>
                    <th scope="row">{{$rs->id}}</th>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>
                        @if($rs->image)
                        <img src="{{Storage::url($rs->image)}}" style='height: 45px;'>
                        @endif
                    </td>
                    <td>{{$rs->status}}</td>
                    <td> <a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Düzenle</a></td>
                    <td> <a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Silincek!!! Eminmisiniz')">Sil</a></td>
                    <td> <a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Göster</a></td>
                    

                </tr>
                @endforeach
            </tbody>

        </table>

        <a href="{{route('admin.category.create')}}"> <button type="button" class="btn btn-lg btn-primary m-2">Kategori Ekle</button>
        </a>
    </div>
</div>
@endsection
</div>
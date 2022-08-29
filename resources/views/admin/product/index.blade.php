@extends('layouts.adminbase')

@section('title', 'Ürün Listesi')

@section('content')
>
<div class="container-fluid pt-1 px-4">
    <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ürün Listesi</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Ürün Ekle</li>
            </ol>
        </nav>
    </div>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Ürün Tablosu</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kullanıcı_Id</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">Anahtar Kelime</th>
                    <th scope="col">Açıklama</th>
                    <th scope="col">Resim</th>
                    <th scope="col">Detay</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Miktarı</th>
                    <th scope="col">Minimum Miktar</th>
                    <th scope="col">Vergi</th>
                    <th scope="col">Statü</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $rs)
                <tr>
                    <th scope="row">{{$rs->id}}</th>
                    <th scope="row">{{$rs->category_id}}</th>
                    <th scope="row">{{$rs->user_id}}</th>
                    <td>{{\app\Http\Controllers\AdminPanel\AdminProductController::getParentsTree($rs,$rs->title) }}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>
                        @if($rs->image)
                           <img src="{{Storage::url($rs->image)}}" style='height: 45px;'>
                        @endif
                    </td>
                    <td>{{$rs->status}}</td>
                    <td> <a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td> <a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Silincek!!! Eminmisiniz')">Delete</a></td>
                    <td> <a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <a href="{{route('admin.product.create')}}"> <button type="button" class="btn btn-lg btn-primary m-2">Ürün Ekle</button>
        </a>
    </div>
</div>
</div>
@endsection
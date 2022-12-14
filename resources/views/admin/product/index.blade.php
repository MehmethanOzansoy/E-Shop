@extends('layouts.adminbase')

@section('title', 'Ürün Listesi')

@section('content')
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
    <a href="{{route('admin.product.create')}}"> <button type="button" class="btn btn-lg btn-primary m-2">Ürün Ekle</button></a>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Ürün Tablosu</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Marka</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Miktarı</th>
                    <th scope="col">Statü</th>
                    <th scope="col">Resim</th>
                    <th scope="col">Galeri</th>
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
                    <td>{{$rs->price}}</td>
                    <td>{{$rs->quantity}}</td>
                    <td>{{$rs->status}}</td>
                    <td>
                        @if($rs->image)
                        <img src="{{Storage::url($rs->image)}}" style='height: 50px;'>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.image.index',['pid'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                            <img src="{{asset('assets')}}/admin/img/223117.png" style='height: 50px;'>
                        </a>
                    </td>
                    <td> <a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td> <a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Silincek!!! Eminmisiniz')">Delete</a></td>
                    <td> <a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection
</div>
@extends('layouts.adminbase')

@section('title', 'Ürünü Göster: ' .$data->title)

@section('content')

<div class="contnet">
    <div class="container-fluid pt-4 px-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Düzenle: {{$data->title}}</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Show Category</li>
                </ol>
            </nav>
        </div>
        <a href="{{route('admin.product.edit',['id'=>$data->id])}}" style="color:aqua">
            <button type="button" class="btn btn-square btn-info m-2"><i class="fa fa-tools"></i></button>
            Düzenle</a>

        <a href="{{route('admin.product.destroy',['id'=>$data->id])}}">
            <button type="button" class="btn btn-square btn-primary m-2" onclick="return confirm('Eminmisiniz!!! Silinecek')"><i class="fa fa-exclamation-triangle"></i></button>
            Sil</a>
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">{{$data->title}}</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 50px;">ID:</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 50px;">Kategori:</th>
                            <td>{{$data->category_id}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 50px;">Kullanıcı_id:</th>
                            <td>{{$data->user_id}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 50px;">Başlık:</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Anahtar Kelime:</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Fiyat:</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Miktar:</th>
                            <td>{{$data->quantity}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Min Miktar:</th>
                            <td>{{$data->minquantity}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Vergi%:</th>
                            <td>{{$data->tax}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Detay:</th>
                            <td>{{$data->detail}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50px">Açıklama:</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Images:</th>
                            <td>
                                @if($data->image)
                                <img src="{{Storage::url($data->image)}}" style='height: 150px; width: 150px;'>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50;">Status:</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50px;">Created Date:</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width:50px;">Update Date:</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    @endsection

</div>
@extends('layouts.adminwindow')

@section('title', 'Ürün Galerisi')

@section('content')
<div class="container-fluid pt-1 px-4">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>{{$product->title}}</h1>
        </div>
    </div>
    <hr>
    <div class="bg-secondary rounded h-100 p-4">
        <form action="{{route('admin.image.store',['pid'=>$product->id ])}}" method="post" enctype="multipart/form-data">
            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <label for="floatingInput">Başlık</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Resim Seçin</label>
                            <input class="form-control bg-dark" type="file" name="image" multiple="">
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Resim Ekleyin</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Resim Galerisi</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Başlık</th>
                    <th>Resim</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $rs)
                <tr>
                    <th scope="row">{{$rs->id}}</th>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if($rs->image)
                        <img src="{{Storage::url($rs->image)}}" style='height: 175px; width: 175px'>
                        @endif
                    </td>
                    <td> <a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" onclick="return confirm('Silincek!!! Eminmisiniz')" type="button" class="btn btn-danger m-2">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </a>
    </div>
</div>
@endsection
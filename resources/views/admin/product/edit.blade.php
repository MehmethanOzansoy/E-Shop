@extends('layouts.adminbase')

@section('title', 'Ürünü Düzenle: ' .$data->title)

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1>Düzenle: {{$data->title}}</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Edit Category</li>
            </ol>
        </nav>
    </div>

    <form action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    @csrf
                    <h6 class="mb-4">Düzenle</h6>
                    <h6>Select Parent Category</h6>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="category_id">
                        <option value="0" selected="selected">Ana Kategori</option>
                        @foreach($datalist as $rs)
                        <option value="{{ $rs->id }}" @if ($rs->id ==$data->category_id) selected="selected" @endif>
                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                        </option>
                        @endforeach
                    </select>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        <label for="floatingInput">Başlık</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        <label for="floatingPassword">Anahtar Kelime</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="description" value="{{$data->description}}">
                        <label for="floatingPassword">Açıklama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                        <label for="floatingPassword">Fiyatı</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                        <label for="floatingPassword">Miktar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="minquantity" value="{{$data->minquantity}}">
                        <label for="floatingPassword">Minimum Miktarı</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                        <label for="floatingPassword">Vergi %</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="detail" name="detail" style="height: 150px;">{!!$data->detail!!}</textarea>
                        <script>
                                ClassicEditor
                                    .create(document.querySelector('#detail'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        <label for="floatingTextarea">Detay</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Choose Image File</label>
                        <input class="form-control bg-dark" type="file" name="image" multiple="">
                    </div>

                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="status">
                        <option selected="">{{$data->status}}</option>
                        <option>True</option>
                        <option>False</option>
                    </select>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection

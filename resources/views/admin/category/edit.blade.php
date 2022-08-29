@extends('layouts.adminbase')

@section('title', 'Edit Category:' .$data->title)

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Düzenle: {{$data->title}}</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Ürünü Düzenle</li>
            </ol>
        </nav>
    </div>

    <form action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    @csrf
                    <h6 class="mb-4">Düzenle</h6>
                    <h6>Select Parent Category</h6>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="parent_id">
                        <option value="0" selected="selected">Ana Kategori</option>
                        @foreach($datalist as $rs)
                        <option value="{{ $rs->id }}" @if ($rs->id ==$data->parent_id) selected="selected" @endif>
                            {{\app\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}
                        </option>
                        @endforeach

                    </select>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        <label for="floatingPassword">Keywords</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        <label for="floatingPassword">Description</label>
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



<div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
</div>

@endsection
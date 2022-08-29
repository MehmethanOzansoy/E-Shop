@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Category</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Add Category</li>
            </ol>
        </nav>
    </div>

    <form action="/admin/category/store" method="post" enctype="multipart/form-data">
        <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    @csrf
                    <h5 class="mb-4">Kategori Ekle</h5>
                    <label for="formFileMultiple" class="form-label">Ana Kategoriyi Seçin</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="parent_id">
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                        <option value="{{ $rs->id }}">{{\app\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach

                    </select>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        <label for="floatingPassword">keywords</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Description" name="description" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Resim Seçin</label>
                        <input class="form-control bg-dark" type="file" name="image" multiple="">
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" aria-label="Floating label select example" name="status">
                            <option selected="">Status</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Add Category</button>
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
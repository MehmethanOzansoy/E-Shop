@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kategori Ekle</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="/admin">Ana Sayfa</a></li>
                <li class="breadcrumb-item" aria-current="page">Kategori Ekle</li>
            </ol>
        </nav>
    </div>

    <form action="/admin/category/store" method="post" enctype="multipart/form-data">
        <div class="container-fluid pt-4 px-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    @csrf
                    <h5 class="mb-4">Kategori Ekle</h5>
                    <label for="formFileMultiple" class="form-label">Ana Kategoriyi Seçin</label>
              
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                        <label for="floatingInput">Başlık</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        <label for="floatingPassword">Anahtar Kelime</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Description" name="description" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Açıklama</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Resim Seçin</label>
                        <input class="form-control bg-dark" type="file" name="image" multiple="">
                    </div>


                    <div class="form-floating mb-3">
                        <select class="form-select" aria-label="Floating label select example" name="status">
                            <option selected="">Statü</option>
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
@endsection
</div>
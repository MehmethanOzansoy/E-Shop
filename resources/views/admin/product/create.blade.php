@extends('layouts.adminbase')

@section('title', 'Ürün Ekle')

@section('head')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
@endsection

@section('content')
<div class="contnet">
    <div class="container-fluid pt-4 px-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ürün Ekleme Sayfası</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Ürün Ekle</li>
                </ol>
            </nav>
        </div>
        <button type="submit" class="btn btn-primary">Ürünü Ekle</button>
        <form action="/admin/product/store" method="post" enctype="multipart/form-data">
            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        @csrf
                        <h5 class="mb-4">Ürün Ekle</h5>
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="category_id">
                                <option value="0" selected="selected">Ana ürün</option>
                                @foreach($data as $rs)
                                <option value="{{ $rs->id }}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <label for="floatingInput">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            <label for="floatingPassword">Marka</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price" value="0">
                            <label for="floatingPassword">Fiyatı</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="quantity" value="0">
                            <label for="floatingPassword">Miktar</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="minquantity" value="0">
                            <label for="floatingPassword">Minimum Miktarı</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tax" value="0">
                            <label for="floatingPassword">Vergi %</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Description" id="detail" style="height: 150px;">
                        <script>
                            CKEDITOR.replace( '#detail' );
                         </script>
                    </textarea>
                            <label for="floatingTextarea">Detay</label>
                        </div>
                        <hr>
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
                                <option selected="">Status</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    @endsection
</div>
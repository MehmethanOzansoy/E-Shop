@extends('layouts.adminbase')

@section('title', 'Category List')

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
            <h1>Category List</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Add Category</li>
            </ol>
        </nav>
    </div>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Category Table</h6>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Parent</th>
                    <th scope="col">Title</th>
                    <th scope="col">Keywords</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $rs)
                <tr>
                    <th scope="row">{{$rs->id}}</th>
                    <td>{{\app\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>
                        @if($rs->image)
                           <img src="{{Storage::url($rs->image)}}" style='height: 45px;'>
                        @endif
                    </td>
                    <td>{{$rs->status}}</td>
                    <td> <a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td> <a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Silincek!!! Eminmisiniz')">Delete</a></td>
                    <td> <a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <a href="{{route('admin.category.create')}}"> <button type="button" class="btn btn-lg btn-primary m-2">Kategori Ekle</button>
        </a>
    </div>
</div>
</div>
@endsection
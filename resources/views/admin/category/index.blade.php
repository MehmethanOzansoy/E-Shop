@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<div class="container-fluid pt-4 px-4">

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
                <li class="breadcrumb-item ml-auto"><a href="/admin">Home</a></li>
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
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
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
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->image}}</td>
                    <td>{{$rs->status}}</td>
                    <td> <a href="/admin/category/edit/{{$rs->id}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td> <a href="/admin/category/delete/{{$rs->id}}" class="btn btn-block btn-danger btn-sm">Delete</a></td>
                    <td> <a href="/admin/category/show/{{$rs->id}}" class="btn btn-block btn-success btn-sm">Show</a></td>                    
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
< @endsection

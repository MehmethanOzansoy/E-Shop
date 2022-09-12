@extends('layouts.adminbase')

@section('title', 'Show Category: '.$data->title)


@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Show Category</li>
                    </ol>

                </div>

                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>

                                <tr>
                                    <th>Keyword</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>
                <div class="row">

                    <div class="col-sm-1">
                        <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-block btn-info" style="width: 100px">Edit</a>
                    </div>
                    <div class="col-sm-1">
                        <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleted !!! Are u sure ')" class="btn btn-block btn-danger" style="width: 100px">Delete</a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
<p>This is my body foot area.</p>

<div class="card-footer">Footer</div>

@endsection
@extends('layouts.adminbase')

@section('title', 'Edit faq: '.$data->title)

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection()

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="text-left">Edit faq: {{$data->title}}</h1>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">faq</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit faq</li>
                        </ol>

                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Question</label>
                                <input type="text" class="form-control" name="question" value="{{$data->question}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Answer</label>
                                <textarea class="form-control" id="answer" name="answer">
                                    {!! $data->answer !!}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>
                            <div class="form-check">
                                <div class="col-xl-0 col-lg-0 col-md-0 col-sm-6 col-0">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('foot')

@endsection
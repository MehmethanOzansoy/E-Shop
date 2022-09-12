@extends('layouts.adminbase')

@section('title', 'Add Faq')


@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection()


@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="text-center">Add FAQ</h1>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add Faq</li>
                    </ol>

                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">faq Element</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->


                    <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Question</label>
                                <input type="text" class="form-control" name="question" placeholder="Question">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Answer</label>
                                <textarea class="form-control" id="answer" name="answer">
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

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="card-footer">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>Enable</option>
                                                    <option>Disable</option>
                                            </div>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                             </div>
                        </div>
                           
                </form>
                <!-- /.card-body -->
               
                

            </div>


        </div>

    </div>
</div>
@endsection

@section('foot')

@endsection
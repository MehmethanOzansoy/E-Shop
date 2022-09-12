@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')

 <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

@endsection()

@section('content')
<div class="dashboard-wrapper">
    <!-- Content Header (Page header) -->
    <section class="dashboard-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div>

    <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="section-block">
                    <h5 class="section-title">Basic Tabs</h5>
                    <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
                </div>
                <div class="tab-regular">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Smtp Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="aboutus-tab" data-toggle="tab" href="#aboutus" role="tab" aria-controls="aboutus" aria-selected="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="references-tab" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false">References</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Description</label>
                                    <input type="text" name="Description" value="{{$data->description}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select-2" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="icon">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Icon file</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <label>Smtp Server</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Smtppassword</label>
                                    <input type="password" name="Smtppassword" value="{{$data->smtppassword}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label>Smtpport</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                </form>      
                        </div>
                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <label for="inputUserName">Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label for="inputEmail">Facebook</label>
                                    <input type="text" name="Facebook" value="{{$data->Facebook}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label for="inputEmail">Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label for="inputEmail">Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                    <label for="inputEmail">Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}" data-parsley-trigger="change" required=""autocomplete="off" class="form-control">
                        </div>

                        <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                <label>About Us</label>
                                <textarea id="editor" name="aboutus"  >{{ $data->aboutus }}</textarea>
                                <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                                </script>
                            
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                <label> Contact Us </label>
                                <textarea class="form-control" id="detail" name="contact">{{ $data->contact }}</textarea>
                                <script >
                                    ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                                </script>

                               
                            </div>
                        </div>
                        <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="contact-tab">

                            <div class="form-group">
                                <label>References</label>
                                <textarea class="form-control" id="test" name="references">{{$data->references}}</textarea>     
                                <script >
                                    ClassicEditor
                                            .create( document.querySelector( '#test' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                                </script>       
                            </div>
                        </div>
                               

                        <div class="card-footer">

                                <button type="submit" class="btn btn-primary">Update Settings</button>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>

    </form>

@endsection




@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')
    <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
            <div class="col-md-6 text-center">
                <h3>This is blank page</h3>
            </div>
        </div>
    </div>


</div>

@endsection
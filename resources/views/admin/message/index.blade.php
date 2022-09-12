@extends('layouts.adminbase')

@section('title', ' Mesaj Listesi')

@section('content')

<div class="container-fluid pt-1 px-4">
  <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Mesaj Listesi</h1>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item ml-auto"><a href="{{route('admin.index')}}">Ana Sayfa</a></li>
        <li class="breadcrumb-item" aria-current="page">Mesaj Listesi</li>
      </ol>
    </nav>
  </div>
  <div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Mesaj Tablosu  </h6>
    <table class="table table-dark">
      <thead>
        <tr>
          <th style="width: 10px">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Status</th>
          <th style="width: 40px">Delete</th>
          <th style="width: 40px">Show</th>
        </tr>
      </thead>
      <tbody>
            @foreach( $data as $rs)
            <tr>
              <th scope="row">{{$rs->id}}</th>
              <td>{{$rs->name}}</td>
              <td>{{$rs->phone}}</td>
              <td>{{$rs->email}}</td>
              <td>{{$rs->subject}}</td>
              <td>{{$rs->status}}</td>
              <td>
                <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" onclick="return !window.open(this.href,' ','top=50 left=100 width=1100,height=700')">
                  Show
                </a>


              </td>

              <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>

            </tr>
            @endforeach

            </tr>

          </tbody>

    </table>
  </div>
</div>
@endsection
</div>
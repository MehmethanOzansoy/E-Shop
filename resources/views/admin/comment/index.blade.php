@extends('layouts.adminbase')

@section('title', ' Comment & Review List')

@section('content')
<div class="table-responsive">
  <div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-6">
        </div>
        <div class="col-sm-12">
          <ol class="breadcrumb float">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Comment List</li>
          </ol>

        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
                <th>İd</th>
                <th>Car</th>
                <th>Name</th>
                <th>Subject</th>
                <th>review</th>
                <th>Rate</th>
                <th>Status</th>
                <th style="width: 40px">Delete</th>
                <th style="width: 40px">Show</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $data as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td><a href="{{route('admin.car.show',['id'=>$rs->car_id])}}"><div class="link".link
                      {
                        color:aqua;
                        text-decoration: none; 
                        background-color: none;
                      }>{{$rs->product->title}}</div>
              </a></td>
                <td>{{$rs->user->name}}</td>
                <td>{{$rs->subject}}</td>
                <td>{{$rs->review}}</td>
                <td>{{$rs->rate}}</td>
                <td>{{$rs->status}}</td>
                <td>
                  <a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" onclick="return !window.open(this.href,' ','top=50 left=100 width=1100,height=700')">
                    Show
                  </a>


                </td>

                <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>

            </tr>
            @endforeach
           
          </tbody>
        </table>


        <!-- /.Commentd-body -->

      </div>
    </div>
    </table>


    <div class="bg-info clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>

    @endsection


    @section('foot')

    @endsection
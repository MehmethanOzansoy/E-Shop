@extends('layouts.adminwindow')

@section('title', 'Show Message: '.$data->title)


@section('content')


<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <section class="content">
                <div class="Messaged">
                    <div class="Messaged-header">
                        <h3 class="Messaged-title">Detail Message Data</h3>
                    </div>
                    <!-- /.Messaged-header -->
                    <div class="Messaged-body p-0">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 150px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>
                                <th>Car</th>
                                <td>{{$data->car->title}}</td>
                            </tr>

                            <tr>
                                <th>Name & Surname</th>
                                <td>{{$data->user->name}}</td>
                            </tr>

                    
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Rate</th>
                                <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->review}}</td>
                            </tr>
                            <tr>
                                <th>IP Number</th>
                                <td>{{$data->IP}}</td>
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
                                <th>Admin Note :</th>
                                <td>
                                    <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="status">
                                            <option>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Comment</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>



                        </table>
                    </div>
                    <!-- /.Messaged-body -->
                </div>




        </div>
    </div>
</div>
@endsection
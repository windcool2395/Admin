@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Images Manager</h1>
            </div>
            <!--End Page Header -->
        </div>
        @if(Session::has('success'))
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>{{Session::get('success')}}</b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
        @endif
        <div class="row">
            <div class="col-lg-8">
                <div class="from-group">
                    <a href="{{url('upload/create')}}" class="btn btn-default"> Upload...</a>
                </div>
                <!--Bảng Category -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin Image
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Size</th>
                                            <th>URL</th>
                                            <th>Type</th>
                                            <th>Product</th>
                                            <th>Review</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($data)
                                            @foreach($data as $key=> $item)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->size}}</td>
                                                    <td>{{$item->url}}</td>
                                                    <td>{{$item->type}}</td>
                                                    <td>{{$item->product_id}}</td>
                                                    <td><img src="http://localhost/BT/DMDatabase/public/uploads/{{$item->name}}" alt="" width="50px"/></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->

            </div>
        </div>
    </div>
@endsection

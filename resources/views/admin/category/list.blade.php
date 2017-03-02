@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Category Manager</h1>
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
                    <!-- search section-->

                    {{Form::open([
                           'method' => 'GET',
                           'url' => ['admin/category']
                     ]) }}
                        <div class="input-group custom-search-form">
                        <input type="text" class="form-control" value="{{$keyword}}" name="keyword" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    {{Form::close()}}
                    <!--end search section-->
                <div class="from-group">
                    <a href="{{url('admin/category/create')}}" class="btn btn-default"> Thêm mới...</a>
                </div>
                <!--Bảng Category -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin thể loại sách
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if($list)
                                                @foreach($list as $key=> $item)
                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>{{$item->title}}</td>
                                                        <td>
                                                            {{Form::open([
                                                                   'method' => 'DELETE',
                                                                   'url' => ['admin/category', $item->id]
                                                            ]) }}
                                                            <a href="{{url('admin/category/'.$item->id.'/edit')}}" class="btn btn-success blue"> Edit</a>
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa ???');" class="btn btn-success red">Delete</button>

                                                            {{Form::close()}}
                                                        </td>
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

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
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello! Hồ Phụ Đồ </b>
                        <i class="fa fa-folder-open"></i><b>{{Session::get('success')}}</b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
        @endif
        <div class="row">
            <div class="col-lg-8">
                <div class="from-group">
                    <a href="{{url('upload')}}" class="btn btn-default"> Back...</a>
                </div>
                <!--Bảng Category -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Upload Image
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    {{ Form::open( ['url' => 'upload','class' => '', 'files' => true]) }}
                                    <input type="file" name="image" required="true"/>
                                    <input type="submit" name="btnUpload" value="UpLoad"/>

                                    {{ Form::close() }}
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
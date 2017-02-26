@extends('layouts.admin')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Create Category</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm mới thể loại sách
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{Form::open(['method' => 'POST','url' => 'admin/category','role' => 'form']) }}
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" name="title" id="txtTitle">
                                        <p class="help-block">Hãy nhập tên thẻ loại sách tại đây!!</p>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                    <button type="reset" class="btn btn-success"> Làm mới</button>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
    <!-- end page-wrapper -->

@endsection
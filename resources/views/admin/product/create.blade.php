@extends('layouts.admin')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Create Product</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="from-group">
                    <a href="{{url('admin/product')}}" class="btn btn-default"> Back...</a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm mới sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{Form::open(['method' => 'POST','url' => 'admin/product','role' => 'form']) }}
                                <div class="form-group">
                                    <label>Têm sách</label>
                                    <input type="text" class="form-control" name="name" required="required">
                                    <label>Đơn giá</label>
                                    <input type="text" class="form-control" name="price" required="required">
                                    <label>Ảnh</label>
                                    <input type="file" class="form-control" name="thumbnail" required="required">
                                    <label>Thể loại</label>
                                    <select name="category_id" class="form-control">
                                        @if($cate)
                                            @foreach($cate as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <label>Giảm giá</label>
                                    <input type="text" class="form-control" name="discount" required="required">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control" name="description" required="required">
                                    <label>Nội dung</label>
                                    <input type="text" class="form-control" name="contentt" required="required">
                                    <label>Tác giả</label>
                                    <input type="text" class="form-control" name="author" required="required">
                                    <label>Ngày xuất bản</label>
                                    <input type="datetime" class="form-control" name="publishing_date" required="required">
                                    <label>Nhà xuất bản</label>
                                    <input type="text" class="form-control" name="publishing_company" required="required">
                                    <label>Số trang</label>
                                    <input type="text" class="form-control" name="number_of_pages" required="required">
                                    <label>Kích thước</label>
                                    <input type="text" class="form-control" name="size" required="required">
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
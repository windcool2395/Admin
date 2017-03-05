@extends('layouts.admin')

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Category  "{{ $pro->name }}"</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="from-group">
                    <a href="{{url('admin/product')}}" class="btn btn-default"> Back...</a>
                </div>
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thay đổi thông tin thể loại sách
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{Form::open([
                                    'method' => 'PATCH',
                                    'url' => ['admin/product', $pro->id],
                                    'role' => 'form']) }}
                                <div class="form-group">
                                    <label>Têm sách</label>
                                    <input type="text" class="form-control" name="name" required="required"  value="{{ $pro->name }}"/>
                                    <label>Đơn giá</label>
                                    <input type="text" class="form-control" name="price" required="required" value="{{ $pro->price }}"/>
                                    <label>Ảnh</label>
                                    <input type="text" class="form-control" name="thumbnail" required="required" value="{{ $pro->thumbnail }}"/>
                                    <label>Thể loại</label>
                                    <select name="category_id" class="form-control">
                                        @if($cate)
                                            @foreach($cate as $item)
                                                <option {{$pro->category_id == $item->id ? 'selected="selected"':''}} value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <label>Giảm giá</label>
                                    <input type="text" class="form-control" name="discount" required="required" value="{{ $pro->discount }}"/>
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control" name="description" required="required" value="{{ $pro->description }}"/>
                                    <label>Nội dung</label>
                                    <input type="text" class="form-control" name="contentt" required="required" value="{{ $pro->content }}"/>
                                    <label>Tác giả</label>
                                    <input type="text" class="form-control" name="author" required="required" value="{{ $pro->author }}"/>
                                    <label>Ngày xuất bản</label>
                                    <input type="datetime" class="form-control" name="publishing_date" required="required" value="{{ $pro->publishing_date }}"/>
                                    <label>Nhà xuất bản</label>
                                    <input type="text" class="form-control" name="publishing_company" required="required" value="{{ $pro->publishing_company }}"/>
                                    <label>Số trang</label>
                                    <input type="text" class="form-control" name="number_of_pages" required="required" value="{{ $pro->number_of_pages }}"/>
                                    <label>Kích thước</label>
                                    <input type="text" class="form-control" name="size" required="required" value="{{ $pro->size }}"/>
                                </div>

                                <button type="submit" class="btn btn-primary">Lưu...</button>
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
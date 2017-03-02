@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Product Manager</h1>
                <li class="btn btn-default"> <a href="{{ url('cart') }}">Chi tiết giỏ hàng ({{Cart::countRows()}})</a> </li>
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
                    <a href="{{url('admin/product/create')}}" class="btn btn-default"> Thêm mới...</a>
                </div>
                <!--Bảng Category -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin sách
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sách</th>
                                            <th>Giá sách</th>
                                            <th>Hình ảnh</th>
                                            {{--<th>Thể loại</th>--}}
                                            <th>Giảm giá</th>
                                            {{--<th>Mô tả</th>--}}
                                            {{--<th>Nội dung</th>--}}
                                            {{--<th>Tác giả</th>--}}
                                            {{--<th>Ngày xuất bản</th>--}}
                                            <th>Nhà xuất bản</th>
                                            <th>Số trang</th>
                                            <th>Kích thước</th>
                                            {{--<th>Trạng thái</th>--}}
                                            <th>...</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($products)
                                            @foreach($products as $key=> $item)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td><img src="http://localhost/BT/DMDatabase/public/uploads/{{$item->thumbnail}}" alt="" width="50px"/></td>
                                                    {{--<td>{{$item->category_id}}</td>--}}
                                                    <td>{{$item->discount}}</td>
                                                    {{--<td>{{$item->description}}</td>--}}
                                                    {{--<td>{{$item->content}}</td>--}}
                                                    {{--<td>{{$item->author}}</td>--}}
                                                    {{--<td>{{$item->publishing_date}}</td>--}}
                                                    <td>{{$item->publishing_company}}</td>
                                                    <td>{{$item->number_of_pages}}</td>
                                                    <td>{{$item->size}}</td>
                                                    {{--<td>{{$item->is_deleted}}</td>--}}
                                                    <td>
                                                        {{Form::open([
                                                               'method' => 'POST',
                                                               'url' => ['cart']
                                                        ]) }}
                                                        <input type="hidden" name="id" value="{{$item->id}}"/>
                                                        <input type="hidden" name="title" value="{{$item->name}}"/>
                                                        <input type="hidden" name="price" value="{{$item->price}}"/>
                                                        <input type="hidden" name="thumbnail" value="{{$item->thumbnail}}"/>
                                                        <input type="hidden" name="discount" value="{{$item->discount}}"/>
                                                        <input type="text" name="sl" value="1"/>
                                                        <button type="submit" class="btn btn-success red">Mua hàng</button>

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

@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Product Manager</h1>
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
            <div class="col-lg-12">
                {{--Search--}}
                {{Form::open([
                       'method' => 'GET',
                       'url' => ['admin/product']
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
                {{--End Search--}}
                <div class="from-group">
                    <a href="{{url('admin/product/create')}}" class="btn btn-default"> Thêm mới...</a>
                </div>
                {{--View Sách--}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin sách
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên sách</th>
                                    <th>Giá sách</th>
                                    <th>Hình ảnh</th>
                                    <th>Thể loại</th>
                                    <th>Giảm giá</th>
                                    <th>Mô tả</th>
                                    {{--<th>Nội dung</th>--}}
                                    <th>Tác giả</th>
                                    <th>Ngày xuất bản</th>
                                    <th>Nhà xuất bản</th>
                                    <th>Số trang</th>
                                    <th>Kích thước</th>
                                    <th>Trạng thái</th>
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
                                                <td>{{$item->category_id}}</td>
                                                <td>{{$item->discount}}</td>
                                                <td>{{$item->description}}</td>
                                                {{--<td>{{$item->content}}</td>--}}
                                                <td>{{$item->author}}</td>
                                                <td>{{$item->publishing_date}}</td>
                                                <td>{{$item->publishing_company}}</td>
                                                <td>{{$item->number_of_pages}}</td>
                                                <td>{{$item->size}}</td>
                                                <td>{{ $item->is_deleted ==1 ? 'Đã xóa':'Chưa xóa'}}</td>
                                                <td>
                                                    {{Form::open([
                                                                'method' => 'DELETE',
                                                                'url' => ['admin/product', $item->id]
                                                         ]) }}
                                                    <a href="{{url('admin/product/'.$item->id.'/edit')}}" class="btn btn-success blue"> Edit</a>
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
                {{--End View Sách--}}
            </div>
        </div>
    </div>
@endsection

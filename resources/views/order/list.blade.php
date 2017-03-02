@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Order Manager</h1>
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
                    <a href="{{url('cart')}}" class="btn btn-default"> Back...</a>
                </div>
                <!--Bảng Orders -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin chung
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            @if($order)
                                                @foreach($order as $item)
                                                    <tr>
                                                        <td>Order ID</td>
                                                        <td>{{$item->id }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>User ID</td>
                                                        <td>{{ $item->user_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ngày nhận</td>
                                                        <td>{{ $item->receiver_date }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Họ tên người nhận</td>
                                                        <td>{{ $item->receiver_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số điện thoại</td>
                                                        <td>{{ $item->receiver_phone_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Địa chỉ</td>
                                                        <td>{{ $item->receiver_address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>{{ $item->receiver_email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tổng tiền</td>
                                                        <td>{{number_format($item->total_amount)}} VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trạng thái đơn hàng</td>
                                                        <td>{{ $item->status ==1 ? 'Đã giao hàng':'Chưa giao hàng'}}  </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                    </table>
                                </div>

                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--Bảng Order_Details-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin chi tiết hóa đơn
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Mã hóa đơn</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Đơn giá</th>
                                                <th>Số lượng</th>
                                                <th>Giảm giá</th>
                                                <th>Thuế</th>
                                                <th>Thành tiền</th>
                                                <th>...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($order_detail)
                                                @foreach($order_detail as $key=> $item)
                                                    <tr>
                                                        <td>{{$key + 1}}</td>
                                                        <td>{{$item->order_id}}</td>
                                                        <td>{{$item->product_id}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td>{{$item->quantity}}</td>
                                                        <td>{{$item->discount}}%</td>
                                                        <td>{{$item->tax}}</td>
                                                        <td>{{number_format($item->amount)}} VND</td>
                                                        <td>...</td>
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

@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin giỏ hàng</h1>
                <li class="btn btn-default"> <a href="{{ url('cart') }}">Chi tiết giỏ hàng ({{Cart::countRows()}})</a> </li>
            </div>
            <div  style="float: right;">
                {{Form::open([
                           'method' => 'GET',
                           'url' => ['order']
                ]) }}
                    <input type="text" value="" class="form-control" name="order_id" placeholder="Nhập mã hóa đơn..." style="width: 200px;" required="true"/>
                    <input class="btn btn-success red " type="submit" value="Xem hóa đơn" style="float: right;"/>
                {{Form::close()}}
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
                    <a href="{{url('admin/product')}}" class="btn btn-default"> Back...</a>
                </div>
                <!--Bảng Category -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thông tin chi tiết giỏ hàng
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
                                            <th>Số lượng</th>
                                            <th>Giảm giá</th>
                                            <th>Hình ảnh</th>
                                            <th>Thành tiền</th>
                                            <th>...</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(Cart::all() as  $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{number_format($item->price)}}VND</td>
                                                    <td>
                                                        {{Form::open([
                                                               'method' => 'PATCH',
                                                               'url' => ['cart',$item->id]
                                                        ]) }}
                                                            <input type="text" style="width: 80px;" name="qty" value="{{$item->qty}}"/>
                                                            <input type="submit" class="btn btn-default" value="Cập nhật"/>
                                                        {{Form::close()}}
                                                    </td>
                                                    <td>{{number_format($item->discount)}}%</td>
                                                    <td><img src="http://localhost/BT/DMDatabase/public/uploads/{{$item->thumbnail}}" alt="" width="50px"/></td>
                                                    <td>{{number_format($item->total)}}VND</td>
                                                    <td>
                                                        {{Form::open([
                                                                  'method' => 'DELETE',
                                                                  'url' => ['cart', $item->id]
                                                           ]) }}
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa ???');" class="btn btn-success blue">Delete</button>
                                                        {{Form::close()}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="8"> Total amount: {{ number_format(Cart::total()) }}VND</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <div class="from-group">
                            <p class="btn btn-success red">Thanh Toán...</p>
                            {{Form::open([
                                         'method' => 'POST',
                                         'url' => ['order']
                            ]) }}
                                <label>Tên người nhận: </label> <input type="text" name="receiver_name" required="true"/><br/>
                                <label>Ngày nhận: </label> <input type="datetime" name="receiver_date" required="true"/><br/>
                                <label>SĐT người nhận: </label> <input type="text" name="receiver_phone_number" required="true"/><br/>
                                <label>Email người nhận: </label> <input type="text" name="receiver_email" required="true"/><br/>
                                <label>Địa chỉ người nhận: </label> <input type="text" name="receiver_address" required="true"/><br/>
                                <input type="submit" class="btn btn-success blue" value="Đặt hàng..."/>
                            {{Form::close()}}
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

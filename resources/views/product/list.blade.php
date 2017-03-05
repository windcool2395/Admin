@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin sản phẩm</h1>
                <li class="btn btn-default " style="float: right"> <a href="{{ url('cart') }}"> <i class="fa fa-shopping-cart"></i> ({{Cart::countRows()}})</a> </li>
            </div>
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
        <div class="wrapper row3">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div id="cart">
                            @if($products)
                                @foreach($products as $key=> $item)
                                    <div class="item-pro">
                                        <img class="item-img" src="http://localhost/BT/DMDatabase/public/uploads/{{$item->thumbnail}}" alt="" />
                                        <a class="item-title" href="{{url('product/'.$item->id.'/show')}}">{{$item->name}}</a>
                                        <p class="item-price">{{$item->price}} VND</p>
                                        <p class="item-desc">{{$item->author}} </p>
                                        <div>
                                            {{Form::open([
                                                   'method' => 'POST',
                                                   'url' => ['cart']
                                            ]) }}
                                            <input type="hidden" name="id" value="{{$item->id}}"/>
                                            <input type="hidden" name="title" value="{{$item->name}}"/>
                                            <input type="hidden" name="price" value="{{$item->price}}"/>
                                            <input type="hidden" name="thumbnail" value="{{$item->thumbnail}}"/>
                                            <input type="hidden" name="discount" value="{{$item->discount}}"/>
                                            <input type="text" name="sl" value="1" class="form-control" style="width: 205px"/>
                                            <button type="submit" class="btn btn-success blue"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

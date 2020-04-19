@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-2">
                                <h4>CHI TIẾT ĐƠN HÀNG</h3>
                            </div>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center">ID</th>
                                <th>Sản Phẩm</th>
                                <th>Giá</th>
                                <th style="text-align:center">Số lượng</th>
                                <th>Tổng Tiền</th>
                            </thead>
                            <tbody>
                                @foreach ($orderDetail as $key)
                                    <tr>
                                        <td style="width: 160px;text-align:center">{{ $key->order_detail_id }}</td>
                                        <td>{{ $key->product_name }}</td>
                                        @if ($key->promotion_id != null) 
                                            <td>{{ $key->price - (($key->price * $key->product->promotion->discount) / 100) }} VND</td>
                                        @else
                                            <td>{{ $key->price }} VND</td>
                                        @endif
                                        <td style="text-align:center">{{ $key->quanity }}</td>
                                        <td>{{ $key->unit_price }} VND</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orderDetail->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
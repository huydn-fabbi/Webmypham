@extends('admin.layouts.master')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    </div>
@endif
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if (count($orders) > 0)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <form method="GET" action="{{ route('listOrder') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -145px;" class="col-md-2">
                                    <label for="id">Người Đặt Hàng</label>
                                    <input name="name" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Đặt Hàng</label>
                                    <input name="date_order" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Trạng Thái</label>
                                    <select style="height: 30px; width: 200px" name="status" class="form-control">
                                        <option></option>
                                        <option value="1">Chưa hoàn thành</option>
                                        <option value="2">Hoàn thành</option>
                                    </select>
                                </div>
                                <div style="margin-top: 22px" class="col-md-3">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="content table-responsive table-full-width">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center">ID</th>
                                <th>Người Đặt Hàng</th>
                                <th>Ngày Đặt Hàng</th>
                                <th>Tổng Tiền</th>
                                <th>Ghi Chú</th>
                                <th>Trạng Thái</th>
                                <th style="width: 100px;text-align:center">Hành Động</th>
                                <th style="width: 100px;text-align:center">Chi Tiết</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key)
                                    <tr>
                                        <td style="width: 160px;text-align:center">{{ $key->order_id }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->date_order }}</td>
                                        <td>{{ $key->total }}</td>
                                        <td>{{ $key->note }}</td>
                                        <td>{{ $key->status_format }}</td>
                                        <form method="POST" action="{{ 'order/edit/' . $key->order_id }}">
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            @if ($key->status == 1)
                                                <td><button type="submit" class="btn btn-primary">Cập Nhật</button></td>
                                            @else
                                                <td><button style="color: black;" disabled type="submit" class="btn btn-primary">Cập Nhật</button></td>
                                            @endif
                                        </form>
                                        <td><a href="{{ route('listDetail', $key->order_id) }}" role="button" class="btn btn-info">Chi Tiết</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <form method="GET" action="{{ route('listOrder') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -145px;" class="col-md-2">
                                    <label for="id">Người Đặt Hàng</label>
                                    <input name="name" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Đặt Hàng</label>
                                    <input name="date_order" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Trạng Thái</label>
                                    <select style="height: 30px; width: 200px" name="status" class="form-control">
                                        <option></option>
                                        <option value="1">Chưa hoàn thành</option>
                                        <option value="2">Hoàn thành</option>
                                    </select>
                                </div>
                                <div style="margin-top: 22px" class="col-md-3">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <h2 style="text-align: center">Không có dữ liệu</h2>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
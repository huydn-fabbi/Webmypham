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
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    @if (count($products) > 0)
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="id">ID</label>
                                        <input style="height: 30px;width: 70px;" class="form-control" id="id">
                                    </div>
                                    <div style="margin-left: -160px;" class="col-md-2">
                                        <label for="id">Tên</label>
                                        <input style="height: 30px;width: 245px;" class="form-control" id="id">
                                    </div>
                                    <div style="margin-top: 22px;margin-left: 15px;" class="col-md-7">
                                        <button type="button" class="btn btn-success">Tìm Kiếm</button>
                                    </div>
                                    <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                        <a href="{{ route('addProduct') }}" role="button" class="btn btn-warning">Tạo mới</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table style="margin-top: 20px;" class="table table-bordered">
                                    <thead>
                                        <th style="width: 60px;text-align:center">ID</th>
                                        <th style="width: 100px">Tên Sản Phẩm</th>
                                        <th style="width: 100px">Danh Mục</th>
                                        <th style="width: 100px">Nhãn Hàng</th>
                                        <th style="width: 60px">Khuyến Mãi</th>
                                        <th style="width: 150px">Giới Thiệu</th>
                                        <th>Nội Dung</th>
                                        <th style="width: 60px;text-align:center">Giá</th>
                                        <th style="width: 60px;text-align:center">Loại Sản Phẩm</th>
                                        <th style="width: 60px;text-align:center">Số Lượng</th>
                                        <th style="width: 100px;text-align:center">Hành Động</th>
                                        <th style="width: 100px;text-align:center">Hình Ảnh</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key)
                                            <tr>
                                                <td style="text-align:center">{{ $key->product_id }}</td>
                                                <td>{{ $key->product_name }}</td>
                                                <td>{{ $key->category->category_name }}</td>
                                                <td>{{ $key->brand->brand_name }}</td>
                                                <td style="text-align:center">{{ $key->promotion->discount }}%</td>
                                                <td>{{ $key->description }}</td>
                                                <td>{{ $key->content }}</td>
                                                <td style="text-align:center">{{ $key->price }}</td>
                                                <td style="text-align:center">{{ $key->product_type_format }}</td>
                                                <td style="text-align:center">{{ $key->product_amount }}</td>
                                                <td><a href="{{ route('editProduct', $key->product_id) }}" role="button" class="btn btn-primary">Cập Nhật</a></td>
                                                <td><button type="button" class="btn btn-info">Chi Tiết</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                                @else
                                    <h5>NO DATA</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
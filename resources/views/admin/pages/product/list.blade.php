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

@if (count($products) > 0)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="GET" action="{{ route('listProduct') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -150px;" class="col-md-2">
                                    <label for="id">Tên</label>
                                    <input name="name" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Danh Mục</label>
                                    <select style="height: 30px; width: 200px" name="category" class="form-control">
                                        <option></option>
                                        @foreach ($categories as $ca)
                                            <option value="{{ $ca->category_id }}">{{ $ca->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Nhãn Hàng</label>
                                    <select style="height: 30px; width: 200px" name="brand" class="form-control">
                                        <option></option>
                                        @foreach ($brands as $br)
                                            <option value="{{ $br->brand_id }}">{{ $br->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Loại Sản Phẩm</label>
                                    <select style="height: 30px; width: 200px" name="type" class="form-control">
                                        <option></option>
                                        <option value="1">No Type</option>
                                        <option value="2">New</option>
                                        <option value="3">Hot</option>
                                    </select>
                                </div>
                                <div style="margin-top: 22px" class="col-md-1">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                    <a href="{{ route('addProduct') }}" role="button" class="btn btn-warning">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                        @if ($key->promotion_id != null)
                                            <td style="text-align:center">{{ $key->promotion->discount }}%</td>
                                        @else
                                            <td style="text-align:center">Không</td>
                                        @endif
                                        <td>{{ $key->description }}</td>
                                        <td>{{ $key->content }}</td>
                                        <td style="text-align:center">{{ $key->price }}</td>
                                        <td style="text-align:center">{{ $key->product_type_format }}</td>
                                        <td style="text-align:center">{{ $key->product_amount }}</td>
                                        <td><a href="{{ route('editProduct', $key->product_id) }}" role="button" class="btn btn-primary">Cập Nhật</a></td>
                                        <td><a href="{{ route('listImage', $key->product_id) }}" role="button" class="btn btn-info">Chi Tiết</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
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
                <form method="GET" action="{{ route('listProduct') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -150px;" class="col-md-2">
                                    <label for="id">Tên</label>
                                    <input name="name" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Danh Mục</label>
                                    <select style="height: 30px; width: 200px" name="category" class="form-control">
                                        <option></option>
                                        @foreach ($categories as $ca)
                                            <option value="{{ $ca->category_id }}">{{ $ca->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Nhãn Hàng</label>
                                    <select style="height: 30px; width: 200px" name="brand" class="form-control">
                                        <option></option>
                                        @foreach ($brands as $br)
                                            <option value="{{ $br->brand_id }}">{{ $br->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-left: -20px;" class="col-md-2">
                                    <label>Loại Sản Phẩm</label>
                                    <select style="height: 30px; width: 200px" name="type" class="form-control">
                                        <option></option>
                                        <option value="1">No Type</option>
                                        <option value="2">New</option>
                                        <option value="3">Hot</option>
                                    </select>
                                </div>
                                <div style="margin-top: 22px" class="col-md-1">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                    <a href="{{ route('addProduct') }}" role="button" class="btn btn-warning">Tạo mới</a>
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
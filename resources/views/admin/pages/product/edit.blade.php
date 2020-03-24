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
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa Sản Phẩm</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ route('editProduct', $product->product_id) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input value="{{ $product->product_id }}" type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Tên Sản Phẩm</label>
                                                <input value="{{ $product->product_name }}" name="product_name" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Danh Mục</label>
                                                <select name="category_id" class="form-control">
                                                    @foreach ($categories as $ca)
                                                        <option 
                                                        @if($product->category->category_id == $ca->category_id)
                                                            {{"selected"}}
                                                        @endif
                                                        value="{{ $ca->category_id }}">{{ $ca->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nhãn Hàng</label>
                                                <select name="brand_id" class="form-control">
                                                    @foreach ($brands as $br)
                                                        <option
                                                        @if($product->brand->brand_id == $br->brand_id)
                                                            {{"selected"}}
                                                        @endif
                                                        value="{{ $br->brand_id }}">{{ $br->brand_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Loại Sản Phẩm</label>
                                                <select value="{{ $product->product_type}}" name="product_type" class="form-control">
                                                    <option
                                                        @if($product->product_type == 1)
                                                            {{"selected"}}
                                                        @endif
                                                     value="1">No Type</option>
                                                    <option
                                                        @if($product->product_type == 2)
                                                            {{"selected"}}
                                                        @endif
                                                     value="2">New</option>
                                                    <option
                                                        @if($product->product_type == 3)
                                                            {{"selected"}}
                                                        @endif
                                                     value="3">Hot</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Khuyến Mãi</label>
                                                <select name="promotion_id" class="form-control">
                                                    @foreach ($promotions as $br)
                                                        <option
                                                        @if($product->promotion->promotion_id == $br->promotion_id)
                                                            {{"selected"}}
                                                        @endif
                                                         value="{{ $br->promotion_id }}">{{ $br->discount }}%</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giới Thiệu</label>
                                                <textarea name="description" class="form-control " id="editor1">{!! $product->description !!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea name="content" class="form-control " id="editor2">{!! $product->content !!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <input value="{{ $product->price }}" name="price" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số Lượng</label>
                                                <input value="{{ $product->product_amount }}" name="product_amount" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                        <a href="{{ route('deleteProduct', $product->product_id) }}" type="submit" class="btn btn-danger">Xóa</a>
                                        </div>
                                        <div class="col-md-11">
                                            <button type="submit" class="btn btn-success pull-right">Cập Nhật</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
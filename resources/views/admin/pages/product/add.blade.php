@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm Sản Phẩm</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" disabled value="ID">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Tên Sản Phẩm</label>
                                                <input name="product_name" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Danh Mục</label>
                                                <select name="category_id" class="form-control">
                                                    <option></option>
                                                    @foreach ($categories as $ca)
                                                        <option value="{{ $ca->category_id }}">{{ $ca->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nhãn Hàng</label>
                                                <select name="brand_id" class="form-control">
                                                    <option></option>
                                                    @foreach ($brands as $br)
                                                        <option value="{{ $br->brand_id }}">{{ $br->brand_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Loại Sản Phẩm</label>
                                                <select name="product_type" class="form-control">
                                                    <option value="1">No Type</option>
                                                    <option value="2">New</option>
                                                    <option value="3">Hot</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Khuyến Mãi</label>
                                                <select name="promotion_id" class="form-control">
                                                    <option></option>
                                                    @foreach ($promotions as $br)
                                                        <option value="{{ $br->promotion_id }}">{{ $br->discount }}%</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giới Thiệu</label>
                                                <textarea name="description" class="form-control " id="editor1"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea name="content" class="form-control " id="editor2"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <input name="price" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số Lượng</label>
                                                <input name="product_amount" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Hình Ảnh</label>
                                                <input name="images[]" type="file" class="form-control" placeholder="Nhập vào đây ..." multiple>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success pull-right">Tạo mới</button>
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
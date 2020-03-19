@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa Sản Phẩm</h4>
                            </div>
                            <div class="content">
                                <form>
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
                                                <input value="{{ $product->product_name }}" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Danh Mục</label>
                                                <input value="{{ $product->category->category_name }}" type="text" class="form-control" placeholder="Chọn Danh Mục">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nhãn Hàng</label>
                                                <input value="{{ $product->brand->brand_name }}" type="text" class="form-control" placeholder="Chọn Nhãn Hàng">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <input value="{{ $product->price }}" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Khuyến Mãi</label>
                                                <input value="{{ $product->promotion->discount }}" type="text" class="form-control" placeholder="Chọn Khuyến Mãi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giới Thiệu</label>
                                                <textarea value="{{ $product->description }}" class="form-control " id="editor1"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea value="{{ $product->content }}" class="form-control " id="editor2"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Loại Sản Phẩm</label>
                                                <input value="{{ $product->product_type }}" type="text" class="form-control" placeholder="Chọn Loại">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số Lượng</label>
                                                <input value="{{ $product->product_amount }}" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-danger">Xóa</button>
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
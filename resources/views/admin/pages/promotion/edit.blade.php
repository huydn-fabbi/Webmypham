@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa Khuyến Mãi</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input value="{{ $promotion->promotion_id }}" type="text" class="form-control" disabled placeholder="Company" value="ID">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Giảm Giá</label>
                                                <input type="text" class="form-control" placeholder="Nhập vào đây ..." value="{{ $promotion->discount }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày Bắt Đầu</label>
                                                <input placeholder="Chọn ngày" type="text" class="form-control" value="{{ $promotion->start_date }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày Kết Thúc</label>
                                                <input type="text" class="form-control" placeholder="Chọn ngày" value="{{ $promotion->end_date }}">
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
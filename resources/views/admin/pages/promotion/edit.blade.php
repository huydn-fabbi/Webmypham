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
                                <h4 class="title">Sửa Khuyến Mãi</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ route('editSale', $promotion->promotion_id) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input value="{{ $promotion->promotion_id }}" type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Giảm Giá</label>
                                                <input name="discount" type="text" class="form-control" placeholder="Nhập vào đây ..." value="{{ $promotion->discount }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày Bắt Đầu</label>
                                                <input name="start_date" placeholder="Chọn ngày" type="date" class="form-control" value="{{ $promotion->start_date }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày Kết Thúc</label>
                                                <input name="end_date" type="date" class="form-control" placeholder="Chọn ngày" value="{{ $promotion->end_date }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="{{ route('deleteSale', $promotion->promotion_id) }}" type="submit" class="btn btn-danger">Xóa</a>
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
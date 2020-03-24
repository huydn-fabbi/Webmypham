@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm Nhãn Hàng</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('addBrand') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="ID">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Tên Nhãn Hàng</label>
                                                <input  name="brand_name" type="text" class="form-control" placeholder="Nhập vào đây ...">
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
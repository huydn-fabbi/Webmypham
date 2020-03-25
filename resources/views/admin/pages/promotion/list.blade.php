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

@if (count($promotions) > 0)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="GET" action="{{ route('listSale') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -145px;" class="col-md-2">
                                    <label for="id">Giảm Giá</label>
                                    <input name="discount" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Bắt Đầu</label>
                                    <input name="start_date" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Kết Thúc</label>
                                    <input name="end_date" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-top: 22px" class="col-md-3">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 150px;" class="col-md-1">
                                    <a href="{{ route('addSale') }}" role="button" class="btn btn-warning">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="content table-responsive table-full-width">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center">ID</th>
                                <th style="text-align:center">Giảm Giá</th>
                                <th style="text-align:center">Ngày Bắt Đầu</th>
                                <th style="text-align:center">Ngày Kết Thúc</th>
                                <th style="width: 160px;text-align:center">Hành Động</th>
                            </thead>
                            <tbody>
                                @foreach ($promotions as $key)
                                    <tr>
                                        <td style="width: 160px;text-align:center">{{ $key->promotion_id }}</td>
                                        <td style="text-align:center">{{ $key->discount_format }}</td>
                                        <td style="text-align:center">{{ $key->start_date }}</td>
                                        <td style="text-align:center">{{ $key->end_date }}</td>
                                        <td style="width: 160px;text-align:center"><a href="{{ route('editSale', $key->promotion_id) }}" role="button" class="btn btn-primary">Cập Nhật</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $promotions->links() }}
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
                    <form method="GET" action="{{ route('listSale') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -145px;" class="col-md-2">
                                    <label for="id">Giảm Giá</label>
                                    <input name="discount" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Bắt Đầu</label>
                                    <input name="start_date" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -28px;" class="col-md-2">
                                    <label for="id">Ngày Kết Thúc</label>
                                    <input name="end_date" type="date" style="height: 30px;width: 200px;" class="form-control" id="id">
                                </div>
                                <div style="margin-top: 22px" class="col-md-3">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 150px;" class="col-md-1">
                                    <a href="{{ route('addSale') }}" role="button" class="btn btn-warning">Tạo mới</a>
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
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
                    @if (count($brands) > 0)
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
                                        <a href="{{ route('addBrand') }}" role="button" class="btn btn-warning">Tạo mới</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table style="margin-top: 20px;" class="table table-bordered">
                                    <thead>
                                        <th style="width: 160px;text-align:center">ID</th>
                                    	<th>Tên</th>
                                    	<th style="width: 160px;text-align:center">Hành Động</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $key)
                                            <tr>
                                                <td style="width: 160px;text-align:center">{{ $key->brand_id }}</td>
                                                <td>{{ $key->brand_name }}</td>
                                                <td style="width: 160px;text-align:center"><a href="{{ route('editBrand', $key->brand_id) }}" role="button" class="btn btn-primary">Cập Nhật</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $brands->links() }}
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
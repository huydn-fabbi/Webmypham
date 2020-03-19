@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    @if (count($users) > 0)
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
                                        <button type="button" class="btn btn-warning">Tạo mới</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table style="margin-top: 20px;" class="table table-bordered">
                                    <thead>
                                        <th style="width: 60px;text-align:center">ID</th>
                                        <th style="width: 100px">Tên Tài Khoản</th>
                                        <th style="width: 100px">Email</th>
                                        <th style="width: 100px;text-align:center">Hành Động</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key)
                                            <tr>
                                                <td style="text-align:center">{{ $key->user_id }}</td>
                                                <td>{{ $key->name }}</td>
                                                <td>{{ $key->email }}</td>
                                                <td style="text-align: center"><button type="button" class="btn btn-primary">Cập Nhật</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
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
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

@if (count($blogs) > 0)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="GET" action="{{ route('listBlog') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -150px;" class="col-md-2">
                                    <label for="id">Tiêu Đề</label>
                                    <input name="name" style="height: 30px;width: 215px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -10px;" class="col-md-2">
                                    <label>Tác Giả</label>
                                    <select style="height: 30px; width: 200px" name="user" class="form-control">
                                        <option></option>
                                        @foreach ($users as $us)
                                            <option value="{{ $us->user_id }}">{{ $us->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-top: 22px;margin-left: 15px;" class="col-md-5">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                    <a href="{{ route('addBlog') }}" role="button" class="btn btn-warning">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="content table-responsive table-full-width">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center">ID</th>
                                <th>Tiêu Đề</th>
                                <th style="text-align:center">Hình Ảnh</th>
                                <th>Giới Thiệu</th>
                                <th>Nội Dung</th>
                                <th>Tác Giả</th>
                                <th style="width: 160px;text-align:center">Hành Động</th>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key)
                                    <tr>
                                        <td style="width: 160px;text-align:center">{{ $key->blog_id }}</td>
                                        <td>{{ $key->title }}</td>
                                        <td style="text-align:center"><img style="width: 100px; height:100px" src="{{ $key->image }}"></td>
                                        <td>{{ $key->description }}</td>
                                        <td>{{ $key->content }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td style="width: 160px;text-align:center"><a href="{{ route('editBlog', $key->blog_id) }}" role="button" class="btn btn-primary">Cập Nhật</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $blogs->links() }}
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
                <form method="GET" action="{{ route('listBlog') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -150px;" class="col-md-2">
                                    <label for="id">Tiêu Đề</label>
                                    <input name="name" style="height: 30px;width: 215px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -10px;" class="col-md-2">
                                    <label>Tác Giả</label>
                                    <select style="height: 30px; width: 200px" name="user" class="form-control">
                                        <option></option>
                                        @foreach ($users as $us)
                                            <option value="{{ $us->user_id }}">{{ $us->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="margin-top: 22px;margin-left: 15px;" class="col-md-5">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                    <a href="{{ route('addBlog') }}" role="button" class="btn btn-warning">Tạo mới</a>
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
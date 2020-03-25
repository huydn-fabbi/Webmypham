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

@if (count($images) > 0)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('addImage', $id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-8">
                                    <input name="images[]" type="file" class="form-control" multiple>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Thêm Ảnh</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="content table-responsive table-full-width">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center">ID</th>
                                <th style="text-align:center">Ảnh</th>
                                <th style="width: 160px;text-align:center">Hành Động</th>
                            </thead>
                            <tbody>
                                @foreach ($images as $key)
                                    <tr>
                                        <td style="width: 160px;text-align:center">{{ $key->id }}</td>
                                        <td style="text-align:center"><img style="width: 300px; height:300px" src="{{ $key->image_url }}"></td>
                                        <td style="width: 160px;text-align:center"><a href="{{ route('deleteImage', $key->id) }}" role="button" class="btn btn-danger">Xóa</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $images->links() }}
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
                    <form method="GET" action="{{ route('listBrand') }}">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="id">ID</label>
                                    <input name="id" style="height: 30px;width: 70px;" class="form-control" id="id">
                                </div>
                                <div style="margin-left: -150px;" class="col-md-2">
                                    <label for="id">Tên</label>
                                    <input name="name" style="height: 30px;width: 245px;" class="form-control" id="id">
                                </div>
                                <div style="margin-top: 22px;margin-left: 15px;" class="col-md-7">
                                    <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                </div>
                                <div style="margin-top: 22px;margin-left: 110px;" class="col-md-1">
                                    <a href="{{ route('addBrand') }}" role="button" class="btn btn-warning">Tạo mới</a>
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
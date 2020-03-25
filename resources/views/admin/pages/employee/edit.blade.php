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
                                <h4 class="title">Sửa Nhân Viên</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ route('editEmployee', $user->user_id) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" disabled value="{{ $user->user_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Tên Tài Khoản</label>
                                                <input name="name" value="{{ $user->name }}" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input disabled name="email" value="{{ $user->email }}" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="{{ route('deleteEmployee', $user->user_id) }}" type="submit" class="btn btn-danger">Xóa</a>
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
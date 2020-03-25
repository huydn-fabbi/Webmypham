@extends('admin.layouts.master')
@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa Bài Viết</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('editBlog', $blog->blog_id) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="{{ $blog->blog_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Tiêu Đề</label>
                                                <input value="{{ $blog->title }}" name="title" type="text" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giới Thiệu</label>
                                                <textarea name="description" class="form-control " id="editor1">{{ $blog->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <textarea name="content" class="form-control " id="editor2">{{ $blog->content }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Hình Ảnh</label>
                                                <img style="width: 100px; height:100px; margin-bottom: 10px" src="{{ $blog->image }}">
                                                <input name="file" type="file" class="form-control" placeholder="Nhập vào đây ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="{{ route('deleteBlog', $blog->blog_id) }}" type="submit" class="btn btn-danger">Xóa</a>
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
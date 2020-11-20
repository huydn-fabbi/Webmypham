@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê người dùng</h4>
                        <p class="category">THỜI TRANG NEM</p>
                    </div>
                    <div class="content">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center"></th>
                                <th>Tiêu Đề</th>
                                <th style="width: 200px;text-align:center">Thống Kê</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 160px;text-align:center">1</td>
                                    <td>Số lượng người dùng</td>
                                    <td style="width: 200px;text-align:center">{{ $userCount}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 160px;text-align:center">2</td>
                                    <td>Số lượng người đặt hàng</td>
                                    <td style="width: 200px;text-align:center">{{ $userBuyCount}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 160px;text-align:center">3</td>
                                    <td>Số lượng người liên hệ</td>
                                    <td style="width: 200px;text-align:center">{{ $userContactCount }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê sản phẩm</h4>
                        <p class="category">THỜI TRANG NEM</p>
                    </div>
                    <div class="content">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center"></th>
                                <th>Tiêu Đề</th>
                                <th style="width: 200px;text-align:center">Thống Kê</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 160px;text-align:center">1</td>
                                    <td>Số lượng sản phẩm</td>
                                    <td style="width: 200px;text-align:center">{{ $productCount}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 160px;text-align:center">2</td>
                                    <td>Số lượng danh mục</td>
                                    <td style="width: 200px;text-align:center">{{ $categoryCount}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 160px;text-align:center">3</td>
                                    <td>Số lượng nhãn hàng</td>
                                    <td style="width: 200px;text-align:center">{{ $brandCount }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê bài viết</h4>
                        <p class="category">THỜI TRANG NEM</p>
                    </div>
                    <div class="content">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center"></th>
                                <th>Tiêu Đề</th>
                                <th style="width: 200px;text-align:center">Thống Kê</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 160px;text-align:center">1</td>
                                    <td>Số lượng bài viết</td>
                                    <td style="width: 200px;text-align:center">{{ $blogCount}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thống kê đơn hàng</h4>
                        <p class="category">THỜI TRANG NEM</p>
                    </div>
                    <div class="content">
                        <table style="margin-top: 20px;" class="table table-bordered">
                            <thead>
                                <th style="width: 160px;text-align:center"></th>
                                <th>Tiêu Đề</th>
                                <th style="width: 200px;text-align:center">Thống Kê</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 160px;text-align:center">1</td>
                                    <td>Số lượng đơn hàng</td>
                                    <td style="width: 200px;text-align:center">{{ $orderCount}}</td>
                                </tr>
                                <tr>
                                    <td style="width: 160px;text-align:center">2</td>
                                    <td>Số lượng đơn hàng chưa hoàn thành</td>
                                    <td style="width: 200px;text-align:center">{{ $orderUnDoneCount}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

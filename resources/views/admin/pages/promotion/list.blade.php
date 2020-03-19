@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            @if (count($promotions) > 0)
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="id">ID</label>
                                <input style="height: 30px;width: 70px;" class="form-control" id="id">
                            </div>
                            <div style="margin-left: -160px;" class="col-md-2">
                                <label for="id">Tên</label>
                                <input style="height: 30px;width: 200px;" class="form-control" id="id">
                            </div>
                            <div style="margin-left: -28px;" class="col-md-2">
                                <label for="id">Ngày Bắt Đầu</label>
                                <input style="height: 30px;width: 200px;" class="form-control" id="id">
                            </div>
                            <div style="margin-left: -28px;" class="col-md-2">
                                <label for="id">Ngày Kết Thúc</label>
                                <input style="height: 30px;width: 200px;" class="form-control" id="id">
                            </div>
                            <div style="margin-top: 22px" class="col-md-3">
                                <button type="button" class="btn btn-success">Tìm Kiếm</button>
                            </div>
                            <div style="margin-top: 22px;margin-left: 150px;" class="col-md-1">
                                <button type="button" class="btn btn-warning">Tạo mới</button>
                            </div>
                        </div>
                    </div>
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
                                        <td style="width: 160px;text-align:center"><button type="button" class="btn btn-primary">Cập Nhật</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $promotions->links() }}
                        @else
                            <h5>NO DATA</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script>
@endsection
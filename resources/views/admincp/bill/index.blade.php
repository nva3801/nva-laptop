@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Hóa Đơn</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái Đơn</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($bill as $bill)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $bill->name }}</td>
                                <td>{{ $bill->email }}</td>
                                <td>{{ $bill->phoneNumber }}</td>
                                <td>{{ $bill->address }}</td>
                                <td>{{ number_format($bill->total) }}đ</td>
                                <td>
                                    @if ($bill->received == 0)
                                        Chưa nhận được Hàng
                                    @else
                                        Nhận hàng thành công
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.billdetail', $bill->id) }}">Chi Tiết Đơn
                                        Hàng</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

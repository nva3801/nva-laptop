@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hóa đơn số {{ $bill_name->bill_id }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Tổng Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                            $total = 0;
                        @endphp
                        @foreach ($bill_detail as $bill_detail)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $bill_detail->bill_id }}</td>
                                <td>{{ $bill_detail->bill->name }}</td>
                                <td>{{ $bill_detail->quantity }}</td>
                                <td>{{ number_format($bill_detail->price) }}đ</td>
                                <td>{{ number_format($bill_detail->total) }}đ</td>
                            </tr>
                            @php
                                $total += $bill_detail->price * $bill_detail->quantity;
                            @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <td></td>
                        <td class="fw-bold">Tổng tiền</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ number_format($total) }}đ</td>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

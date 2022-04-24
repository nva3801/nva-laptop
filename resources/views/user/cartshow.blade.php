@extends('welcome')
@section('content')
    <div class="cart pb-3">
        <div class="container-1650">
            <div class="breadcrumb px-4 py-3">
                <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}"
                                class="text-decoration-none text-white">Trang Chủ</a> >> Cart</div>
            </div>
            <div class="cart-show px-4 py-3">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Mã Hóa Đơn</td>
                            <td>Tổng Tiền</td>
                            <td>Trạng Thái</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($bill as $key => $bill)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $bill->id }}</td>
                                <td>{{ number_format($bill->total) }}đ</td>
                                <td>
                                    @if ($bill->received == 0)
                                        Chưa nhận hàng
                                    @else
                                        Nhận Hàng Thành Công
                                    @endif
                                </td>
                                <td><a href="{{ route('cartshow', $bill->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

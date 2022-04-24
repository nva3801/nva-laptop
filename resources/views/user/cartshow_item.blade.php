@extends('welcome')
@section('content')
    <div class="cart pb-3">
        <div class="container-1650">
            <div class="breadcrumb px-4 py-3">
                <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}"
                                class="text-decoration-none text-white">Trang Chủ</a> >> Cart</div>
            </div>
            <div class="cart-show px-4 py-3">
                @if (Auth::id() !== $user->id)
                    <h3 class="text-white text-center">Không có giá trị cần tìm</h3>
                @else
                    <div class="text-white" style="font-size: 20px">
                        <div>Tên khách hàng: {{ $user->name }}</div>
                        <div>Số điện thoại: {{ $user->phoneNumber }}</div>
                        <div>Địa chỉ: {{ $user->address }}</div>
                        <div>Email: {{ $user->email }}</div>
                    </div>

                    <table class="table text-white">
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Tên Sản Phẩm</td>
                                <td>Số Lượng</td>
                                <td>Giá Tiền</td>
                                <td>Tổng Tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            @foreach ($bill_list as $bill_list)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>{{ $bill_list->product_id }}</td>
                                    <td>{{ $bill_list->quantity }}</td>
                                    <td>{{ number_format($bill_list->price) }}đ</td>
                                    <td>{{ number_format($bill_list->quantity * $bill_list->price) }}đ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td class="fw-bold">Tổng Tiền</td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold">{{ number_format($bill->total) }}đ</td>
                            </tr>
                        </tbody>
                    </table>
                    @if ($bill->received == 0)
                        <a href="{{ route('received', $bill->id) }}" class="btn btn-danger">Đã Nhận Được Hàng</a>
                    @else
                        <span class="btn btn-success">Nhận Hàng Thành Công</span>
                    @endif
            </div>
            @endif
        </div>
    </div>
@endsection

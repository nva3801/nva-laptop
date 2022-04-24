@extends('welcome')
@section('content')
    <div class="checkout pb-3">
        <div class="container-1650">
            <form action="{{ url('/thanh-toan') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h5>Thông tin</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        @if (Route::has('login'))
                                            @auth
                                                <input type="hidden" class="form-control mb-2" name="id"
                                                    value="{{ Auth::user()->id }}" placeholder="Họ và Tên *">
                                                <input type="text" class="form-control mb-2" name="name"
                                                    value="{{ Auth::user()->name }}" placeholder="Họ và Tên *">
                                                <input type="text" class="form-control mb-2" name="email"
                                                    value="{{ Auth::user()->email }}" placeholder="Email *">
                                                <input type="text" class="form-control mb-2" name="address"
                                                    value="{{ Auth::user()->address }}" placeholder="Địa Chỉ *">
                                                <input type="text" class="form-control mb-2" name="phoneNumber"
                                                    value="{{ Auth::user()->phoneNumber }}" placeholder="Số điện thoại *">
                                            @else
                                                <input type="hidden" class="form-control mb-2" name="id"
                                                    placeholder="Họ và Tên *">
                                                <input type="text" class="form-control mb-2" name="name"
                                                    placeholder="Họ và Tên *">
                                                <input type="text" class="form-control mb-2" name="email" placeholder="Email *">
                                                <input type="text" class="form-control mb-2" name="address"
                                                    placeholder="Địa Chỉ *">
                                                <input type="text" class="form-control mb-2" name="phoneNumber"
                                                    placeholder="Số điện thoại *">
                                            @endauth
                                        @endif
                                        <p style="color: red; font-size: 14px">(*) Thông tin quý khách phải nhập đầy đủ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5>Giỏ Hàng</h5>
                                <hr>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>STT</td>
                                            <td>Tên Sản Phẩm</td>
                                            <td>Số Lượng</td>
                                            <td>Thành Tiền</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sn = 1;
                                            $total = 0;
                                        @endphp
                                        @if (isset($cart))
                                            @foreach ($cart as $id => $cart)
                                                @php
                                                    $total += $cart['price_new'] * $cart['quantity'];
                                                @endphp
                                                <tr>
                                                    <td>{{ $sn++ }}</td>
                                                    <td>{{ $cart['name'] }}</td>
                                                    <td>{{ $cart['quantity'] }}</td>
                                                    <td>{{ number_format($cart['price_new'] * $cart['quantity']) }}đ</td>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif

                                        <tr>
                                            <td></td>
                                            <td>Tổng Tiền</td>
                                            <td></td>
                                            <td>{{ number_format($total) }}đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                                @if (Route::has('login'))
                                    @auth
                                        <button type="submit" class="btn btn-primary check_out"
                                            href="{{ url('thanh-toan') }}">Đặt Hàng</button></td>
                                    @else
                                        <a class="btn btn-primary check_out" href="{{ url('login') }}">Đăng Nhập</a></td>
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

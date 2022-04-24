@extends('welcome')
@section('content')
    <div class="cart pb-3">
        <div class="container-1650">
            <div class="breadcrumb px-4 py-3">
                <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}"
                                class="text-decoration-none text-white">Trang Chủ</a> >> Giỏ Hàng</div>
            </div>
            <div class="cart-show px-4 py-3">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Sản Phẩm</td>
                            <td>Số Lượng</td>
                            <td>Giá Tiền</td>
                            <td>Tổng Tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                            $price = 0;
                        @endphp
                        @if (isset($carts))
                            @foreach ($carts as $id => $cart)
                                @php
                                    $price += $cart['price_new'] * $cart['quantity'];
                                @endphp
                                <tr>
                                    <td style="width: 5%;">{{ $sn++ }}</td>
                                    <td style="width: 50%;">
                                        <div class="d-flex">
                                            <img src="{{ asset('storage/' . $cart['image']) }}" width="150px"
                                                alt="">
                                            <p>{{ $cart['name'] }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_down decrement-btn"
                                                data-url="{{ route('decrementBtn', ['id' => $id]) }}" href=""> -</a>
                                            <input class="cart_quantity_input qty-input" type="text" name="quantity"
                                                value="{{ $cart['quantity'] }}" autocomplete="off" size="2">
                                            <a class="cart_quantity_up increment-btn"
                                                data-url="{{ route('incrementBtn', ['id' => $id]) }}" href="">+</a>
                                        </div>
                                    </td>
                                    <td style="width: 20%;">
                                        <div class="d-flex">
                                            <div class="product-price-new fw-bold">
                                                {{ number_format($cart['price_new']) }}đ
                                            </div>
                                            <div class="product-price-old">{{ number_format($cart['price_old']) }}đ
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width: 10%;">{{ number_format($cart['price_new'] * $cart['quantity']) }}đ
                                    </td>
                                    <td><a href="" data-url="{{ route('deleteCart', ['id' => $id]) }}"
                                            class="btn btn-danger cart_delete">
                                            <i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                        @endif

                        <tr>
                            <td></td>
                            <td>Tổng Tiền</td>
                            <td></td>
                            <td></td>
                            <td>{{ number_format($price) }}đ</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary float-right" href="{{ url('thanh-toan') }}">Thanh Toán</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            function incrementBtn(event) {
                event.preventDefault();
                let urlIncre = $(this).data('url');
                $.ajax({
                    type: 'GET',
                    url: urlIncre,
                    dataType: 'json',
                    success: function(data) {
                        if (data.code === 200) {
                            window.location.reload()
                        }
                    },
                    error: function() {}
                });

            }

            function decrementBtn(event) {
                event.preventDefault();
                let urlDecre = $(this).data('url');
                $.ajax({
                    type: 'GET',
                    url: urlDecre,
                    dataType: 'json',
                    success: function(data) {
                        if (data.code === 200) {
                            window.location.reload()
                        }
                    },
                    error: function() {}
                });
            }

            function deleteCart(event) {
                event.preventDefault();
                let urlDelete = $(this).data('url');
                $.ajax({
                    type: 'GET',
                    url: urlDelete,
                    dataType: 'json',
                    success: function(data) {
                        if (data.code === 200) {
                            window.location.reload()
                        }
                    },
                    error: function() {}
                });
            }

            $(function() {
                $('.increment-btn').on('click', incrementBtn);
                $('.decrement-btn').on('click', decrementBtn);
                $('.cart_delete').on('click', deleteCart)
            });

        });
    </script>
@endsection

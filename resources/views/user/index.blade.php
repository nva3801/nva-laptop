@extends('welcome')
@section('content')
    <!-- Banner -->
    <div class="bg position-relative">
        <img class="PC" width="100%" src="{{ asset('img/Define Your Vision｜GIGABYTE EVENT-1641354339.jpg') }}"
            alt="">
        <img class="Mobile" width="100%" src="{{ asset('img/Define Your Vision｜GIGABYTE EVENT-1641353354.jpg') }}"
            alt="">
        <div class="bg-text position-absolute text-white ">
            <p class="bg-text-top text-center fw-bold">Performance Above
                All</p>
            <p class="bg-text-bottom text-center fw-bold">Aorus & AERO Laptop With 11th Gen Intel
                Core H-series</p>
            <a class="text-decoration-none text-white" href="">
                <div class="bg-link text-center fw-bold">Xem Thêm</div>
            </a>
        </div>
    </div>
    <!-- End Banner -->
    <div class="py-5 bg-black">
        <h2 class="text-center primary-color text-uppercase mb-3">Sản phẩm</h2>
        <h5 class="text-center" style="color: #8e8e8e">Chúng tôi luôn mong muốn hợp tác với các khách hàng để
            thách thức những giới hạn
            và vươn tới vinh
            quang!</h5>
        <div class="container ">
            <div class="mx-auto slider_main">
                <div class="slider_list">
                    @foreach ($danhmuc as $danhmuc)
                        <a href="{{ route('category', $danhmuc->slug) }}" class="slider_items">
                            <img src="{{ asset('storage/' . $danhmuc->image) }}" alt="" width="400px">
                            <p class="text-uppercase">{{ $danhmuc->name }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection

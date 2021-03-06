@extends('welcome')
@section('content')
    <!-- Banner -->
    <div class="bg position-relative">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            @php $i = 1; @endphp
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                @foreach($slider as $slider)
                <div class="carousel-item {{ $i=='1' ? 'active' : '' }}" data-bs-interval="5000">
                    @php $i++ @endphp
                    <img class="PC" width="100%" src="{{ asset('storage/' . $slider->image_pc) }}"alt="">
                    <img class="Mobile" width="100%" src="{{ asset('storage/' . $slider->image_mobile) }}"alt="">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div> --}}
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Banner -->
    <div class="py-5 bg-black">
        <h2 class="text-center primary-color text-uppercase mb-3">S???n ph???m</h2>
        <h5 class="text-center" style="color: #8e8e8e">Ch??ng t??i lu??n mong mu???n h???p t??c v???i c??c kh??ch h??ng ?????
            th??ch th???c nh???ng gi???i h???n
            v?? v????n t???i vinh
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

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
    <!-- SlideShow -->
    <div class="pt-5 bg-black">
        <h1 class="text-uppercase text-center primary-color">Laptops</h1>
        <div class="slider d-flex justify-content-between pb-4">
            @foreach ($category_detail as $category_detail)
                <a href="{{ route('category_detail', $category_detail->slug) }}">
                    <div class="">
                        <div class="position-relative bg-color slide-item">
                            <img class="slide-img"
                                src="{{ asset('storage/' . $category_detail->image) }}" alt=""
                                width="329px" height="329px">
                            <h5 class="text-uppercase text-rotate position-absolute text-slide text-black">
                                {{ $category_detail->name }}
                            </h5>
                        </div>
                    </div>
                </a>
            @endforeach


        </div>
    </div>

    <!-- End SlideShow -->

    <!-- Content -->
    <div class="d-flex bg-sidebar text-white fw-bold">
        <div class="container-1650">
            <div class="p-3">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-product">
                                <div class="box-product">
                                    <a class="text-decoration-none" href="{{ route('product', $product->slug) }}">
                                        <div class="img">
                                            <img src="{{ asset('storage/' . $product->image) }}" width="70%"
                                                alt="">
                                        </div>
                                        <div class="product-header">
                                            <div class="fw-bold text-center text-white">
                                                {{ $product->name }}</div>
                                        </div>
                                        <div class="ps-2 pe-2 mt-2 mb-3">
                                            <div class="text-white d-flex">
                                                Giá niêm yết:
                                                <div class="product-price-old">{{ number_format($product->price_old) }}đ
                                                </div>
                                            </div>
                                            <div class="text-white d-flex">
                                                Giá bán:
                                                <div class="product-price-new">{{ number_format($product->price_new) }}đ
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <a href="" class="btn-cart text-decoration-none" type="submit">Giỏ Hàng</a> -->
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <ul class="pagination pagination-rounded mb-4 float-right">
                    {{ $products->links() }}
                </ul>
            </div>
        </div>
    </div>

    </div>
    <!-- End Content -->
    <!-- News -->
    <div class="bg-color">
        <div class="container ">
            <div class="news">
                <div class="box1 text-white">
                    @foreach($news as $news)
                    <div class="box1-img">
                        <img width="100%" class="box1-bg" src="{{ asset('storage/'.$news->image) }}"
                            alt="">
                    </div>
                    <div class="box1-content">
                        <div class="box1-title">
                            {{ $news->title }}
                        </div>
                        <div class="box1-line"></div>
                        <div class="box1-des">
                            <?php echo $news['description']; ?>
                        </div>
                        <div class="mt-3 pb-4">
                            <a class="text-decoration-none text-white box1-btn mb-2 mt-3" href="{{ route('news', $news->id) }}">Xem Thêm</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="box2">
                    <div class="box2-tag">
                        Có thể bạn sẽ thích
                    </div>
                    @foreach($news_like as $news_like)
                        <div class="box2-link">
                            <a href="{{ route('news', $news_like->id) }}" class="d-flex text-decoration-none text-white">
                                <img class="box2-img" src="{{ asset('storage/'.$news->image) }}" alt="">
                                <div class="box2-title ms-2 fw-bold">{{ $news_like->title }}</div>
                            </a>
                        </div>
                        <div class="box2-line"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End News -->
    <!-- FAQ -->
    <div class="bg-black ">
        <div class="container">
            <div class="FAQ">
                <h1 class="text-center mb-4 color-primary">FAQ</h1>
                <h5 class="text-center text-white">Got questions? We've got answers</h5>
                @foreach ($faq as $faq)
                    <details>
                        <summary class="text-white">{{ $faq->name }}</summary>
                        <p class="FAQ-des"><?php echo $faq['description']; ?></p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
@endsection

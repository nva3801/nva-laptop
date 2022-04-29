<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-color">
                <div class="container-1650">
                    <div class="d-flex">
                        <a class="navbar-brand" href="{{ '/' }}"><img
                                src="{{ asset('img/logo.acad5b52.png.webp') }}" width="140px" height="30px"
                                alt=""></a>
                        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-white"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item position-relative">
                                    <a class="nav-link text-white dropdown-toggle fw-bold" aria-current="page"
                                        href="category.html">SẢN
                                        PHẨM</a>
                                    <div class="dropdown">
                                        <ul class="dropdown-list">
                                            @foreach ($category as $category)
                                                <li class="dropdown-items">
                                                    <a class="text-center text-decoration-none" href="{{ route('category',$category->slug) }}">
                                                        <img width="140px"
                                                            src="{{ asset('storage/' . $category->image) }}" alt="">
                                                        <p class="fw-bold text-uppercase text-white">
                                                            {{ $category->name }}
                                                        </p>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link text-white dropdown-toggle fw-bold" href="#">KHÁM PHÁ</a>
                                    <div class="dropdown">
                                        <ul>
                                            <li class="dropdown-bottom-item">
                                                <a class="text-capitalize text-decoration-none" href="{{ url('tin-tuc') }}">Tin tức</a>
                                            </li>
                                            <li class="dropdown-bottom-item">
                                                <a class="text-capitalize text-decoration-none" href="">sự kiện</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link text-white dropdown-toggle fw-bold" href="#">DỊCH VỤ</a>
                                    <div class="dropdown">
                                        <ul>
                                            <li class="dropdown-bottom-item">
                                                <a class="text-capitalize text-decoration-none" href="">Thông Tin
                                                    Bảo hành</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex">
                                @if (Route::has('login'))
                                    @auth
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a href="{{ url('don-hang') }}" class="dropdown-item">Đơn Hàng</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();                                                                                                                                                                                                                                                                                                                                                          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                            <form action="{{ url('cartshow') }}" method="POST">
                                                <input type="hidden" class="form-control mb-2" name="id"
                                                    value="{{ Auth::user()->id }}">
                                            </form>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline text-white navbar-icon"><i
                                                class="fas fa-user"></i></a>

                                    @endauth
                                @endif
                                <a class="text-white mx-3 navbar-icon" href="{{ url('gio-hang') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="navbar-icon-noti">0</span>
                                </a>

                            </div>
                        </div>
                    </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="text-center py-4">
                    <img class="" src="{{ asset('img/logo_svg.2fc451ee.svg') }}">
                    <h4 class="text-center p-2 text-white fw-bold">TEAM UP. FIGHT ON.</h4>
                    <div class="mb-3">
                        <a href="" class="text-decoration-none">
                            <i class="footer-social fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-decoration-none">
                            <i class="footer-social fab fa-youtube"></i>
                        </a>
                        <a href="" class="text-decoration-none">
                            <i class="footer-social fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="footer-list">
                        
                        <div class="footer-col">
                            <div class="footer-title fw-bold text-uppercase text-white pb-2">Sản Phẩm</div>
                            <div class="footer-content">
                                @foreach($footer as $footer)
                                <div>
                                    <a class="footer-link float-left text-decoration-none text-white text-capitalize"
                                        href="{{ route('category', $footer->slug) }}">{{ $footer->name }}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="footer-col">
                            <div class="footer-title fw-bold text-uppercase text-white pb-2">Khám Phá</div>
                            <div class="footer-content">
                                <div>
                                    <a class="footer-link float-left text-decoration-none text-white text-capitalize"
                                        href="">tin tức</a>
                                </div>
                                <div>
                                    <a class="footer-link float-left text-decoration-none text-white text-capitalize"
                                        href="">sự kiện</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="footer-col">
                            <div class="footer-title fw-bold text-uppercase text-white pb-2">Dịch Vụ</div>
                            <div class="footer-content">
                                <div>
                                    <a class="footer-link float-left text-decoration-none text-white text-capitalize"
                                        href="">thông tin bảo hành</a>
                                </div>
                                <div>
                                    <a class="footer-link float-left text-decoration-none text-white text-capitalize"
                                        href="">liên hệ với chúng tôi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>

@extends('welcome')
@push('footer')
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
                                        href="">{{ $footer->name }}</a>
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
@endpush
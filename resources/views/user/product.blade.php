@extends('welcome')
@section('content')
    <div class="product">
        <div class="container-1650">
            <div class="breadcrumb px-4 pb-3 pt-3">
                <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}"
                                class="text-decoration-none text-white">Trang Chủ</a> >>
                            <a href="{{ route('category', $category_slug->slug) }}"
                                class="text-decoration-none text-white">{{ $category_slug->name }}</a> >>
                            <a href="{{ route('category_detail', $category_detail_slug->slug) }}"
                                class="text-decoration-none text-white">{{ $category_detail_slug->name }}</a> >>
                            <span href="{{ route('product', $product->slug) }}"
                                class="text-decoration-none text-white">{{ $product->name }}</span>
                </div>
            </div>
            @foreach ($product_list as $product)
                <div class="product-top pt-4 px-4">
                    <h4 class="text-white product-title">{{ $product->name }} ({{ $product->partNumber }})
                    </h4>
                    <div class="d-flex">
                        <div class="slideshow-container">
                            <!-- Full-width images with number and caption text -->
                            @foreach($product_slider as $product_slider)
                            <div class="mySlides fade">
                                <img src="{{ asset('storage/' . $product_slider->image) }}" alt="" style="width:100%">
                            </div>
                            @endforeach
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        
                        <div class="product-detail-info text-white">
                            <div class="product-detail-des">
                                <h6>Thông số sản phẩm</h6>
                                <ul>
                                    <li>CPU: {{ $product->cpu }}</li>
                                    <li>RAM: {{ $product->ram }}</li>
                                    <li>Ổ cứng: {{ $product->hard_disk }}</li>
                                    <li>VGA: {{ $product->vga }}</li>
                                </ul>
                            </div>
                            <div class="product-price">
                                <div class="d-flex mt-3 mb-3">
                                    <div class="product-detail-price-new">{{ number_format($product->price_new) }}đ</div>
                                    <div class="product-detail-price-old">{{ number_format($product->price_old) }}đ</div>
                                    <div class="product-price-sale">Giảm {{number_format(100 - ($product->price_new / $product->price_old * 100))}}%</div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="product-detail-box">Giá đã có VAT</div>
                                    <div class="product-detail-box">Bảo hành 24 Tháng</div>
                                </div>
                            </div>
                            <a href="#" data-url="{{ route('addtocart', ['id' => $product->id]) }}"
                                class="btn-buy btn add_to_cart">Đặt Mua Ngay</a>
                        </div>
                        <div class="static">
                            <div class="static-item">
                                <div class="title">YÊN TÂM MUA HÀNG</div>
                                <div class="static-des text-white">
                                    <ul>
                                        <li>Uy tín 20 năm xây dựng và phát triển</li>
                                        <li>Sản phẩm chính hãng 100%</li>
                                        <li>Trả góp lãi suất 0% toàn bộ giỏ hàng</li>
                                        <li>Trả bảo hành tận nơi sử dụng</li>
                                        <li>Bảo hành tận nơi cho doanh nghiệp</li>
                                        <li>Ưu đãi riêng cho học sinh sinh viên</li>
                                        <li>Vệ sinh miễn phí trọn đời PC, Laptop</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="static-item">
                                <div class="title">MIỄN PHÍ GIAO HÀNG</div>
                                <div class="static-des text-white">
                                    <ul>
                                        <li>Giao hàng siêu tốc trong 2h</li>
                                        <li>Giao hàng miễn phí toàn quốc</li>
                                        <li>Nhận hàng và thanh toán tại nhà (ship COD)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="container-1650">
                        <div class="product-bottom">
                            <div class="product-des">
                                <div class="product-des-top px-4 py-3 me-3">
                                    <div>
                                        <h4 class="product-des-title text-white">Đánh giá
                                            {{ $product->name }}({{ $product->partNumber }})chính hãng, bảo hành dài
                                            lâu</h4>
                                        <div class="text-white"><?php echo $product['description']; ?></div>
                                    </div>
                                </div>
                                
                            </div>


                            <div class="product-info px-4 py-3 ms-3">
                                <h4 class="product-info-title text-white">Thông số kĩ thuật</h4>
                                <p class="text-white">Mô tả</p>
                                <table class="text-white">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Mô tả chi tiết</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Hãng sản xuất</td>
                                            <td width="370">{{ $product->manufacturer }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Part Number</td>
                                            <td width="370">{{ $product->partNumber }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Mầu sắc</td>
                                            <td width="370">{{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Bộ vi xử lý</td>
                                            <td width="370">{{ $product->cpu }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Chipset</td>
                                            <td width="370">{{ $product->chipset }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Bộ nhớ trong</td>
                                            <td width="370">{{ $product->ram }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Số khe cắm</td>
                                            <td width="370">{{ $product->slotram }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Dung lượng tối đa</td>
                                            <td width="370">{{ $product->maxram }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">VGA</td>
                                            <td width="370">{{ $product->vga }}</td>
                                        </tr>
                                        <tr>
                                            <td width="160">Ổ cứng</td>
                                            <td width="370">{{ $product->hard_disk }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="product-info-btn">
                                    <button type="button" id="openOverlay">Chi tiết cấu hình</button>
                                    <div id="backgroundOverlay"></div>
                                    <div id="popup">
                                        <div class="popup_menu">
                                            <h5>Thông số kỹ thuật chi tiết</h5>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2">Mô tả chi tiết</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hãng sản xuất</td>
                                                        <td>{{ $product->manufacturer }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Part Number</td>
                                                        <td>{{ $product->partNumber }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mầu sắc</td>
                                                        <td>{{ $product->color }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bộ vi xử lý</td>
                                                        <td>{{ $product->cpu }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chipset</td>
                                                        <td>{{ $product->chipset }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bộ nhớ trong</td>
                                                        <td>{{ $product->ram }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số khe cắm</td>
                                                        <td>{{ $product->slotram }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dung lượng tối đa</td>
                                                        <td>{{ $product->maxram }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VGA</td>
                                                        <td>{{ $product->vga }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ổ cứng</td>
                                                        <td>{{ $product->hard_disk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bảo mật, công nghệ</td>
                                                        <td>{{ $product->security }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Màn hình</td>
                                                        <td>{{ $product->screen }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webcam</td>
                                                        <td>{{ $product->webcam }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Audio</td>
                                                        <td>{{ $product->audio }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Giao tiếp không dây</td>
                                                        <td>{{ $product->wireless }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cổng giao tiếp</td>
                                                        <td>{{ $product->ports }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pin</td>
                                                        <td>{{ $product->battery }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích thước (rộng x dài x cao)</td>
                                                        <td>{{ $product->size }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cân nặng</td>
                                                        <td>{{ $product->weight }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hệ điều hành</td>
                                                        <td>{{ $product->operating_system }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phụ kiện đi kèm</td>
                                                        <td>{{ $product->accessory }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function addtocart(event) {
            event.preventDefault();
            let urlCart = $(this).data('url');
            $.ajax({
                type: 'GET',
                url: urlCart,
                dataType: 'json',
                success: function(data) {
                    if (data.code === 200) {
                        alert('Thêm sản phẩm thành công');
                    }
                },
                error: function() {

                }
            });
        }
        $(function() {
            $('.add_to_cart').on('click', addtocart);
        });
    </script>
@endsection

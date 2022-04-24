@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.product.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên Sản Phẩm" id="slug"
                        onkeyup="ChangeToSlug()">
                </div>
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="slug" class="form-control" placeholder="Tên Sản Phẩm" id="convert_slug">
                </div>
                <div class="form-group">
                    <label>Mã Danh Mục</label>
                    <select name="category_id" class="form-control">
                        @foreach ($category_detail as $category_detail)
                            <option value="{{ $category_detail->id }}">{{ $category_detail->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="editor" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Hãng sản xuất</label>
                    <input type="text" class="form-control" name="manufacturer" placeholder="Nhập Hãng sản xuất">
                </div>
                <div class="form-group">
                    <label>Part Number</label>
                    <input type="text" class="form-control" name="partNumber" placeholder="Nhập partNumber">
                </div>
                <div class="form-group">
                    <label>Màu sắc</label>
                    <input type="text" class="form-control" name="color" placeholder="Nhập màu sắc">
                </div>
                <div class="form-group">
                    <label>Bộ vi xử lý</label>
                    <input type="text" class="form-control" name="cpu" placeholder="Nhập CPU">
                </div>
                <div class="form-group">
                    <label>Chipset</label>
                    <input type="text" class="form-control" name="chipset" placeholder="Nhập Chipset">
                </div>
                <div class="form-group">
                    <label>Bộ nhớ trong</label>
                    <input type="text" class="form-control" name="ram" placeholder="Nhập Bộ nhớ trong">
                </div>
                <div class="form-group">
                    <label>Số khe cắm</label>
                    <input type="text" class="form-control" name="slotram" placeholder="Nhập số khe cắm">
                </div>
                <div class="form-group">
                    <label>Dung lượng tối đa</label>
                    <input type="text" class="form-control" name="maxram" placeholder="Nhập dung lượng tối đa">
                </div>
                <div class="form-group">
                    <label>VGA</label>
                    <input type="text" class="form-control" name="vga" placeholder="Nhập vga">
                </div>
                <div class="form-group">
                    <label>Ổ cứng</label>
                    <input type="text" class="form-control" name="hard_disk" placeholder="Nhập ổ cứng">
                </div>
                <div class="form-group">
                    <label>Bảo mật</label>
                    <input type="text" class="form-control" name="security" placeholder="Nhập bảo mật">
                </div>
                <div class="form-group">
                    <label>Màn hình</label>
                    <input type="text" class="form-control" name="screen" placeholder="Nhập màn hình">
                </div>
                <div class="form-group">
                    <label>Webcam</label>
                    <input type="text" class="form-control" name="webcam" placeholder="Nhập Webcam">
                </div>
                <div class="form-group">
                    <label>Audio</label>
                    <input type="text" class="form-control" name="audio" placeholder="Nhập audio">
                </div>
                <div class="form-group">
                    <label>Giao tiếp không dây</label>
                    <input type="text" class="form-control" name="wireless" placeholder="Nhập giao tiếp không dây">
                </div>
                <div class="form-group">
                    <label>Cổng giao tiếp</label>
                    <input type="text" class="form-control" name="ports" placeholder="Nhập cổng giao tiếp">
                </div>
                <div class="form-group">
                    <label>Pin</label>
                    <input type="text" class="form-control" name="battery" placeholder="Nhập pin">
                </div>
                <div class="form-group">
                    <label>Kích thước</label>
                    <input type="text" class="form-control" name="size" placeholder="Nhập kích thước">
                </div>
                <div class="form-group">
                    <label>Cân nặng</label>
                    <input type="text" class="form-control" name="weight" placeholder="Nhập cân nặng">
                </div>
                <div class="form-group">
                    <label>Hệ điều hành</label>
                    <input type="text" class="form-control" name="operating_system" placeholder="Nhập hệ điều hành">
                </div>
                <div class="form-group">
                    <label>Phụ kiện đi kèm</label>
                    <input type="text" class="form-control" name="accessory" placeholder="Nhập phụ kiện đi kèm">
                </div>
                <div class="form-group">
                    <label>Giá cũ</label>
                    <input type="text" class="form-control" name="price_old" placeholder="Nhập giá cũ">
                </div>
                <div class="form-group">
                    <label>Giá mới</label>
                    <input type="text" class="form-control" name="price_new" placeholder="Nhập giá mới">
                </div>
                <div class="form-group">
                    <label>Tên Danh Mục</label>
                    <select name="status" class="form-control ">
                        <option value="Yes">Hiển Thị</option>
                        <option value="No">Không Hiển Thị</option>
                    </select>
                </div>
                <button class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
@endsection

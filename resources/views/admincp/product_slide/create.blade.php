@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.productslider.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Danh Mục</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.productslider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Mã Sản Phẩm</label>
                    <select name="product_id" class="form-control">
                        @foreach ($product as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control">
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

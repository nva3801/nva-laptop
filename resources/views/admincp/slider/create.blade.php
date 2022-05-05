@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.slider.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Slider</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image_pc" class="form-control">
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image_mobile" class="form-control">
                </div>
                <div class="form-group">
                    <label>Trạng Thái</label>
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

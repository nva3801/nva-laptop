@extends('layouts.app')
@section('content')
<a href="{{ route('admin.news.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Tin Tức</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tiêu Đề</label>
                    <input type="text" name="title" class="form-control" placeholder="Tiêu Đề">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="editor" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Người Đăng</label>
                    <select name="user_id" class="form-control">
                        @foreach ($user_id as $user_id)
                            <option value="{{ $user_id->id }}">{{ $user_id->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Thích</label>
                    <select name="like" class="form-control ">
                        <option value="0">Có</option>
                        <option value="1">Không</option>
                    </select>
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
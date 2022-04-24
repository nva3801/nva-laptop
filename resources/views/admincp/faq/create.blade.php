@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.faq.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Câu Hỏi</label>
                    <input type="text" name="name" class="form-control" placeholder="Câu Hỏi">
                </div>
                <div class="form-group">
                    <label>Câu trả lời</label>
                    <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
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

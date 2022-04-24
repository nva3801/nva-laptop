@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.admin.index') }}" class="btn btn-danger mb-3">Quay Lại</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Admin</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.admin.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Họ và tên </label>
                    <input type="text" name="name" class="form-control" placeholder="Tên họ và tên">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Nhập Email">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="Nhập Số điện thoại">
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" name="address" class="form-control" placeholder="Nhập Địa Chỉ">
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập password">
                </div>
                <input type="hidden" name="is_admin" value="1">
                <button type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
@endsection

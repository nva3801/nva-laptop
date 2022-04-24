@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.admin.create') }}" class="btn btn-success mb-3">Thêm Admin</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($admin as $admin)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->phoneNumber }}</td>
                                <td>{{ $admin->address }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.admin.edit', $admin->id) }}" class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.admin.destroy', $admin->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

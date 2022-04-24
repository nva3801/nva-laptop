@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.product.create') }}" class="btn btn-success mb-3">Thêm Sản Phẩm</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Mã Danh Mục</th>
                            <th>Hình Ảnh</th>
                            <th>Giá tiền</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($product as $product)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_detail->name }}</td>
                                <td><img src="{{ asset('storage/' . $product->image) }}" alt="" width="14%">
                                </td>
                                <td>{{ number_format($product->price_new) }}đ</td>
                                <td>
                                    @if ($product->status == 'Yes')
                                        Hiển Thị
                                    @else
                                        Không hiển thị
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.product.destroy', $product) }}" method="POST">
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

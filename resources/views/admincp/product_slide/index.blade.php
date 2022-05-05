@extends('layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css" />
@endpush
@section('content')
    <a href="{{ route('admin.productslider.create') }}" class="btn btn-success mb-3">Thêm Hình Ảnh Sản Phẩm</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Hình Ảnh Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình Ảnh</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($product_slider as $product_slider)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $product_slider->product->name }}</td>
                                <td><img src="{{ asset('storage/' . $product_slider->image) }}" alt="" width="20%"></td>
                                <td>
                                    @if ($product_slider->status === 'Yes')
                                        Hiển Thị
                                    @else
                                        Không Hiển Thị
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.productslider.edit', $product_slider) }}"
                                        class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.productslider.destroy', $product_slider) }}"
                                        method="POST">
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
@push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js">
    </script>
@endpush

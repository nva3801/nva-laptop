@extends('layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css" />
@endpush
@section('content')
    <a href="{{ route('admin.slider.create') }}" class="btn btn-success mb-3">Thêm Slide</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Slide</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hình Ảnh Máy Tính</th>
                            <th>Hình Ảnh Điện Thoại</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($slider as $slider)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td><img src="{{ asset('storage/' . $slider->image_pc) }}" alt="" width="20%"></td>
                                <td><img src="{{ asset('storage/' . $slider->image_mobile) }}" alt="" width="20%"></td>
                                <td>
                                    @if ($slider->status === 'Yes')
                                        Hiển Thị
                                    @else
                                        Không Hiển Thị
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.slider.edit', $slider) }}"
                                        class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.slider.destroy', $slider) }}"
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

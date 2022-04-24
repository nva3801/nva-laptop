@extends('layouts.app')
@section('content')
<a href="{{ route('admin.news.create') }}" class="btn btn-success mb-3">Thêm Câu Hỏi</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Tin Tức</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Hình Ảnh</th>
                            <th>Người Đăng</th>
                            <th>Yêu thích</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($news as $news)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->description }}</td>
                                <td><img src="{{ asset('storage/' . $news->image) }}" alt="" width="14%">
                                <td>{{ $news->user_id }}</td>
                                <td>{{ $news->like }}</td>
                                <td>
                                    @if ($news->status == 'Yes')
                                        Hiển Thị
                                    @else
                                        Không hiển thị
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.news.destroy', $news) }}" method="POST">
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
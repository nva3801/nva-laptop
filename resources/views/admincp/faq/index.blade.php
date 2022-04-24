@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.faq.create') }}" class="btn btn-success mb-3">Thêm Câu Hỏi</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản Lý Câu Hỏi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Câu Hỏi</th>
                            <th>Câu trả lời</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sn = 1;
                        @endphp
                        @foreach ($faq as $faq)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $faq->name }}</td>
                                <td>{{ $faq->description }}</td>
                                <td>
                                    @if ($faq->status == 'Yes')
                                        Hiển Thị
                                    @else
                                        Không hiển thị
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.faq.edit', $faq) }}" class="btn btn-warning">Sửa</a>
                                    <form action="{{ route('admin.faq.destroy', $faq) }}" method="POST">
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

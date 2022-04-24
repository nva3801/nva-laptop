@extends('welcome')
@section('content')
<div class="bg-black text-white py-4">
    <div class="container-1650">
        <div class="breadcrumb px-4 pb-3 pt-3">
            <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}" class="text-decoration-none text-white">Trang Chủ</a> >> Tin Tức</div>
        </div>
        <div class="news_main px-4 py-3">
            @foreach($news as $news)
            <a href="{{ route('news', $news->id) }}" class="news_main-link">
                <div class="d-flex py-3">
                    <div class="news_img" style="width: 250px" >
                        <img src="{{ asset('storage/'.$news->image) }}" alt="" width="100%" height="200px" style="object-fit: cover">
                    </div>
                    <div class="news_content px-4">
                        <h4 class="news_title fw-bold ">{{ $news->title }}</h4>
                        <div class="d-flex">
                            <div class="px-2">Đăng bởi {{ $news->user->name }}</div>    
                            -
                            <div class="px-2">{{ $news->date_created_at }}</div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
@extends('welcome')
@section('content')
<div class="bg-black text-white py-4">
    <div class="container-1650">
        <div class="breadcrumb px-4 pb-3 pt-3">
            <div class="breadcrumb-top text-white"><span><span><a href="{{ '/' }}" class="text-decoration-none text-white">Trang Chủ</a> >> Tin Tức</div>
        </div>
        @foreach($news as $news)
        <div class="news_main px-4 py-3">
            <h2 class="new_title">{{ $news->title }}</h2>
            <div class="upload_time d-flex my-3">
                <div class="mx-2 ">Đăng bởi {{ $news->user->name }}</div>
                -
                <div class="mx-2">{{ $news->date_created_at }}</div>
            </div>
            <div class="text-white news_description"><?php echo $news['description']; ?></div>
        </div>
        @endforeach
    </div>
</div>
@endsection
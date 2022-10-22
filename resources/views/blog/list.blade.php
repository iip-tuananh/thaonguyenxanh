@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/list_blog.css')}}">
@endsection
@section('content')
<div class="wrap-main w-clear">
   <div class="title-main">
      <div class="name">Tin tức</div>
   </div>
   <div class="content-main w-clear">
      @if (count($blog) > 0)
      @foreach ($blog as $item)
      <a class="news text-decoration-none w-clear" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
         <p class="pic-news scale-img"><img src="{{$item->image }}" alt="{{languageName($item->title)}}"></p>
         <div class="info-news">
            <h3 class="name-news">{{languageName($item->title)}}</h3>
            <p class="time-news">Ngày đăng: {{date_format($item->created_at,'d/m/Y')}}</p>
            <div class="desc-news text-split"></div>
         </div>
      </a>
      @endforeach
      @else
      <h3>Nội dung đang cập nhật...</h3>
      @endif
      <div class="clear"></div>
      <div class="pagination-home"> {{$blog->links()}}</div>
   </div>
</div>


@endsection
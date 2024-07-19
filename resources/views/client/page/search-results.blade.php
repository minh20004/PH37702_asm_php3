@extends('client.layout.master')
@section('content')
<!-- /navigation -->

<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-4">
        <h1 class="h2 mb-4"> Kết quả tìm kiếm cho: 
          <mark>{{ $query }}</mark>
        </h1>
      </div>
      <div class="col-lg-10">
        @if ($articles->isEmpty())
            <p>Không tìm thấy bài viết nào.</p>      
        @else
          @foreach($articles as $article)
          <article class="card mb-4">
          <div class="row card-body">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="post-slider slider-sm">
                <img src="{{ asset($article->image) }}" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
              </div>
            </div>
            <div class="col-md-8">
              <h3 class="h4 mb-3"><a class="post-title" href="{{ route('detail.show', $article->id) }}">{{$article->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg" alt="John Doe">
                    <span>{{$article->author->name}}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>{{$article->published}}
                </li>
                {{-- <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                    <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                  </ul>
                </li> --}}
              </ul>
              <p>{{$article->content}}</p>
              <a href="{{ route('detail.show', $article->id) }}" class="btn btn-outline-primary">Đọc thêm</a>
            </div>
          </div>
          </article>
        @endforeach
        @endif
        <article class="card mb-4">
          <div class="row card-body">
            <div class="col-12">
              <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/kate-stone.jpg" alt="Kate Stone">
                    <span>Kate Stone</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">Wow</a></li>
                    <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
                  </ul>
                </li>
              </ul>
              <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available.</p>
              <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
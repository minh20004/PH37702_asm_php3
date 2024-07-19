@extends('client.layout.master')
@section('content')
<section class="banner pb-0">
 <!-- start of banner -->
 <div class="instafeed text-center">      
  <div class="instagram-slider">
    <div class="instagram-post"><img src="images/instagram/1.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/3.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/1.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/3.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
    <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
  </div>
</div>
</section>
<!-- end of banner -->

  <section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Biên tập</h2>
          <article class="card">
            {{-- {{ asset('images/post/' . $editorChoice->image) }} --}}
            @if ($editorChoice)
            <div class="post-slider slider-sm">
              <img src="{{ asset($editorChoice->image)}}" class="card-img-top" alt="post-thumb">
            </div>
            
            <div class="card-body">
              <h3 class="h4 mb-3"><a class="post-title" href="{{route('detail.show', ['id' => $editorChoice->id])}}">{{$editorChoice->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                    <img src="images/john-doe.jpg">
                    <span>{{ $editorChoice->author->name }}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{ $editorChoice->published }}
                </li>
                {{-- <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{ {{ $article->category->name }} }}
                </li> --}}
              </ul>
              <p>{{ Str::limit($editorChoice->content, 150) }}</p>
              <a href="{{route('detail.show', ['id' => $editorChoice->id])}}" class="btn btn-outline-primary">Đọc tiếp</a>
            </div>
            @endif
          </article>
        </div>

        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Xu hướng</h2>
          @foreach ($trendingArticles as $articale)
          <article class="card mb-4">
            <div class="card-body d-flex">
              <img class="card-img-sm" src="{{$articale->image}}">
              <div class="ml-3">
                <h4><a href="{{route('detail.show', ['id' => $articale->id])}}" class="post-title">{{$articale->title}}</a></h4>
                <li class="list-inline-item">
                  <a href="" class="card-meta-author">
                    <img src="images/john-doe.jpg">
                    <span>{{ $articale->author->name }}</span>
                  </a>
                </li>
                <ul class="card-meta list-inline mb-0">
                  <li class="list-inline-item mb-0">
                    <i class="ti-calendar"></i>{{$articale->published}}
                  </li>
                </ul>
              </div>
            </div>
          </article>
          @endforeach
        </div>
        
        <div class="col-lg-4 mb-5">
          <h2 class="h5 section-title">Phổ biến</h2>
          @foreach($popularArticles as $article)
          <article class="card">
            <div class="post-slider slider-sm">
              <img src="{{ asset( $article->image) }}" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
              <h3 class="h4 mb-3"><a class="post-title" href="{{ route('detail.show', $article->id) }}">{{$article->title}}</a></h3>
              <ul class="card-meta list-inline">
                <li class="list-inline-item">
                  <a href="{{ route('detail.show', $article->id) }}" class="card-meta-author">
                    <img src="images/kate-stone.jpg" alt="Kate Stone">
                    <span>{{ $article->author->name }}</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <i class="ti-calendar"></i>{{$article->published}}
                </li>
                {{-- <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                    <li class="list-inline-item"><a href="tags.html">City</a></li>
                    <li class="list-inline-item"><a href="tags.html">Food</a></li>
                    <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                  </ul>
                </li> --}}
              </ul>
              <p>{{ Str::limit($article->content, 100) }}</p>
              <a href="{{ route('detail.show', $article->id) }}" class="btn btn-outline-primary">Đọc tiếp</a>
            </div>
          </article>
          @endforeach
        </div>
        <div class="col-12">
          <div class="border-bottom border-default"></div>
        </div>
      </div>
    </div>
  </section>
  {{-- <div class="container widget widget-videos">
    @foreach ($videos as $video)
    <div class="video-item">
        <iframe width="100%" height="315" src="https://youtu.be/xXyBv8cP3PU?si=7LbkrWX7HjhDqsxO" frameborder="0" allowfullscreen></iframe>
        <h5>{{ $video->title }}</h5>
        <p>{{ $video->description }}</p>
        <div>{{ $video->content }}</div>
    </div>
    @endforeach
</div> --}}
  <section class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6  mb-5 mb-lg-0">
    <h4 class="h5 section-title">Tin mới {{ $currentDate }}<br></h4>
    @foreach($latestArticles as $article)
    <article id="df" class="card mb-4 flex-row">
      <div class="post-slider">
          <img src="{{ $article->image }}" class="card-img-top" alt="post-thumb">
      </div>
      <div class="card-body">
          <h3 class="mb-3"><a class="post-title" href="{{ route('detail.show', $article->id) }}">{{ $article->title }}</a></h3>
          <ul class="card-meta list-inline">
              <li class="list-inline-item">
                  <a href="author-single.html" class="card-meta-author">
                      <img src="images/john-doe.jpg" alt="">
                      <span>{{ $article->author->name }}</span>
                  </a>
              </li>
              <li class="list-inline-item">
                  <i class="ti-timer"></i>{{ $article->published }}
              </li>
              {{-- <li class="list-inline-item">
                  <ul class="card-meta-tag list-inline">
                      <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                      <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                  </ul>
              </li> --}}
          </ul>
          <p>{{Str::limit($article->content, 60)}}</p>
          {{-- <a href="{{ route('detail.show', $article->id) }}" class="btn btn-outline-primary">Đọc tiếp</a> --}}
      </div>
  </article>
  
    @endforeach
    {{-- <ul class="pagination justify-content-center">
      <li class="page-item page-item active ">
        {{ $latestArticles->links() }}
      </li>
    </ul> --}}
  </div>
  <aside class="col-lg-3 sidebar-home">
    <!-- authors -->
    <div class="widget widget-author">
      {{-- <h4 class="widget-title">Chào ngày mới</h4> --}}
      @foreach ($randomArticles as $article)
          
      
      <div class="media align-items-center">
        <div class="mr-3">
          <img class="widget-author-image" src="{{ asset($article->image) }}">
        </div>
        <div class="media-body">
          <h5 class="mb-1"><a class="post-title" href="{{ route('detail.show', $article->id) }}">
            {{ $article->title }}</a></h5>
          <span class="text-danger">{{ $article->category->name }}</span>
        </div>
      </div>
      @endforeach
    </div>
    <!-- Search -->
    
    <div class="widget">
      <h4 class="widget-title"><span>Đăng kí nhận thông báo</span></h4>
      <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
        class="widget-search">
        <input class="mb-3" id="search-query" name="s" type="search" placeholder="Your Email Address">
        <i class="ti-email"></i>
        <button type="submit" class="btn btn-primary btn-block" name="subscribe">Gửi</button>
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
          <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
        </div>
      </form>
    </div>
    {{-- Bí quyết làm đẹp --}}
    <div class="widget widget-author">
      <h4 class="widget-title">Bí quyết làm đẹp</h4>
      @foreach ($randomBeautyfull as $article)
      <div class="promotion">
        <a href="{{ route('detail.show', $article->id) }}">
        <img src="{{ asset($article->image) }}" class="img-fluid w-100">
        <div class="promotion-content">
          {{-- <h5 class="text-white mb-3"></h5> --}}
          <i class="text-white">{{ $article->title }}</i>
        </div>
      </a>
      </div>
      @endforeach
    </div>
    <!-- categories -->
    {{-- <div class="widget widget-categories">
      <h4 class="widget-title"><span>Categories</span></h4>
      <ul class="list-unstyled widget-list">
        <li><a href="tags.html" class="d-flex">Creativity <small class="ml-auto">(4)</small></a></li>
        <li><a href="tags.html" class="d-flex">Demo <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Elements <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Food <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Microwave <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Natural <small class="ml-auto">(3)</small></a></li>
        <li><a href="tags.html" class="d-flex">Newyork city <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Nice <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Tech <small class="ml-auto">(2)</small></a></li>
        <li><a href="tags.html" class="d-flex">Videography <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Vlog <small class="ml-auto">(1)</small></a></li>
        <li><a href="tags.html" class="d-flex">Wondarland <small class="ml-auto">(1)</small></a></li>
      </ul>
    </div> --}}
    
    <!-- recent post -->
    <div class="widget">
      <h4 class="widget-title">Recent Post</h4>
      <!-- post-item -->
      <article class="widget-card">
        <div class="d-flex">
          <img class="card-img-sm" src="images/post/post-10.jpg">
          <div class="ml-3">
            <h5><a class="post-title" href="post/elements/">Elements That You Can Use In This Template.</a></h5>
            <ul class="card-meta list-inline mb-0">
              <li class="list-inline-item mb-0">
                <i class="ti-calendar"></i>15 jan, 2020
              </li>
            </ul>
          </div>
        </div>
      </article>
      
      <article class="widget-card">
        <div class="d-flex">
          <img class="card-img-sm" src="images/post/post-3.jpg">
          <div class="ml-3">
            <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
            <ul class="card-meta list-inline mb-0">
              <li class="list-inline-item mb-0">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
            </ul>
          </div>
        </div>
      </article>
      
      <article class="widget-card">
        <div class="d-flex">
          <img class="card-img-sm" src="images/post/post-7.jpg">
          <div class="ml-3">
            <h5><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h5>
            <ul class="card-meta list-inline mb-0">
              <li class="list-inline-item mb-0">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
            </ul>
          </div>
        </div>
      </article>
    </div>
  </aside>
  <aside  class="col-lg-3 sidebar-home">
    <!-- Promotion -->
    <div class="promotion">
      <img src="images/promotion.jpg" class="img-fluid w-100">
      <div class="promotion-content">
        <h5 class="text-white mb-3"></h5>
        <p class="text-white mb-4"></p>
        <a href="https://themefisher.com/" class="btn btn-primary">Xem</a>
      </div>
      <i>Instagram @ellevietnam</i>
    </div>
    <div class="promotion">
      <img src="images/promotion1.jpg" class="img-fluid w-100">
      <div class="promotion-content">
        <h5 class="text-white mb-3"></h5>
        <p class="text-white mb-4"></p>
        <a href="https://themefisher.com/" class="btn btn-primary">Xem</a>
      </div>
      <i>Instagram @ellevietnam</i>
    </div>
    <div class="promotion">
      <img src="images/promotion3.jpg" class="img-fluid w-100">
      <div class="promotion-content">
        <h5 class="text-white mb-3"></h5>
        <p class="text-white mb-4"></p>
        <a href="https://themefisher.com/" class="btn btn-primary">Xem</a>
      </div>
      <i>Instagram @ellevietnam</i>
    </div>
    <div class="promotion">
      <img src="images/promotion2.jpg" class="img-fluid w-100">
      <div class="promotion-content">
        <h5 class="text-white mb-3"></h5>
        <p class="text-white mb-4"></p>
        <a href="https://themefisher.com/" class="btn btn-primary">Xem</a>
      </div>
      <i>Instagram @ellevietnam</i>

    </div>
     <!-- Social -->
    <div class="widget">
      <h4 class="widget-title"><span>Liên kết xã hội</span></h4>
      <ul class="list-inline widget-social">
        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
      </ul>
    </div>
    <!-- tags -->
    <div class="widget">
      <h4 class="widget-title"><span>Tags</span></h4>
      <ul class="list-inline widget-list-inline widget-card">
        <li class="list-inline-item"><a href="tags.html">City</a></li>
        <li class="list-inline-item"><a href="tags.html">Color</a></li>
        <li class="list-inline-item"><a href="tags.html">Creative</a></li>
        <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
        <li class="list-inline-item"><a href="tags.html">Demo</a></li>
        <li class="list-inline-item"><a href="tags.html">Elements</a></li>
        <li class="list-inline-item"><a href="tags.html">Fish</a></li>
        <li class="list-inline-item"><a href="tags.html">Food</a></li>
        <li class="list-inline-item"><a href="tags.html">Nice</a></li>
        <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
        <li class="list-inline-item"><a href="tags.html">Season</a></li>
        <li class="list-inline-item"><a href="tags.html">Taste</a></li>
        <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
        <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
        <li class="list-inline-item"><a href="tags.html">Wow</a></li>
      </ul>
    </div>
  </aside>
      </div>
    </div>
  </section>
@endsection
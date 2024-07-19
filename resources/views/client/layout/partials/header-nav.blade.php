<a id="logo" class="navbar-brand order-1" href="{{ route('home.index') }}">
    New24h
  </a>
  <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
    <ul class="navbar-nav mx-auto">

      <!-- Hiển thị danh sách các danh mục -->
      @foreach($menus as $menu)
      <li class="nav-item">
        <a class="nav-link" href="{{ route('menu.show', $menu->id) }}">{{ $menu->name }}</a>
      </li>
      @endforeach
      <li class="nav-item">
        <a class="nav-link" href="{{route('lienhe.contact')}}">Liên hệ</a>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
        </a>
        <div class="dropdown-menu">
          
          <a class="dropdown-item" href="author.html">Author</a>
          
          <a class="dropdown-item" href="author-single.html">Author Single</a>

          <a class="dropdown-item" href="advertise.html">Advertise</a>
          
          <a class="dropdown-item" href="post-details.html">Post Details</a>
          
          <a class="dropdown-item" href="post-elements.html">Post Elements</a>
          
          <a class="dropdown-item" href="tags.html">Tags</a>

          <a class="dropdown-item" href="search-result.html">Search Result</a>

          <a class="dropdown-item" href="search-not-found.html">Search Not Found</a>
          
          <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
          
          <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>

          <a class="dropdown-item" href="404.html">404 Page</a>
          
        </div>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="shop.html">Shop</a>
      </li> --}}
    </ul>
  </div>

  <div class="order-2 order-lg-3 d-flex align-items-center">
    {{-- <select class="m-2 border-0 bg-transparent" id="select-language">
      <option id="en" value="" selected>En</option>
      <option id="fr" value="">Fr</option>
    </select> --}}
    
    <!-- search -->
    <form class="search-bar" action="{{ route('search')}}" method="GET">
      <input id="search-query" name="s" type="search" placeholder="Nhập tin tức cần tìm">
    </form>
    
    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
      <i class="ti-menu"></i>
    </button>
  </div>

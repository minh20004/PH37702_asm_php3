<!DOCTYPE html>
<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->
<html lang="en-us">
<head>
  <title>@yield('title', 'Trang chủ - Thể thao 24/7')</title>
  @include('client.layout.partials.css')
</head>
<body>
  <!-- navigation -->
<header class="navigation fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
     @include('client.layout.partials.header-nav')
    </nav>
  </div>
</header>
<!-- /navigation -->

@yield('content')


<footer class="footer">
@include('client.layout.partials.footer')
</footer>
  <!-- JS Plugins -->
@include('client.layout.partials.js')
</html>
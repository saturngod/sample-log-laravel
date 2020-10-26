<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <!-- CSS files -->
    <link href={{ asset("libs/jqvmap/dist/jqvmap.min.css") }} rel="stylesheet"/>
    <link href={{ asset("css/tabler.min.css") }} rel="stylesheet"/>
    <link href={{ asset("css/demo.min.css") }} rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    @yield('header')
  </head>
  <body class="antialiased">
    @include("layouts.sidebar")
    <div class="page">
      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="page-title">
                    @section("page-title")
                        Vertical layout
                    @show
                </h2>
              </div>
            </div>
          </div>
          <div class="row row-deck row-cards">
              @yield('page-content')
          </div><!-- end row-deck -->
        </div>
        <footer class="footer footer-transparent">
          <div class="container">
            @section('footer-link')
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ml-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./faq.html" class="link-secondary">FAQ</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
                </ul>
              </div>
              @show
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                Copyright © 2020
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </div>
            </div>
            
          </div><!-- footer container -->
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset("libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("libs/jquery/dist/jquery.slim.min.js")}}"></script>
    <script src="{{asset("libs/apexcharts/dist/apexcharts.min.js")}}"></script>
    <script src="{{asset("libs/jqvmap/dist/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("libs/jqvmap/dist/maps/jquery.vmap.world.js")}}"></script>
    <script src="{{asset("libs/peity/jquery.peity.min.js")}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset("js/tabler.min.js")}}"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>@yield('title', 'Michael Patrick Hall')</title>
    <meta name="description" content="My Personal Website">
    <meta name="author" content="Michael Patrick Hall">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/navbarstyle.css">
    <link rel="stylesheet" href="css/frameworks/skeleton/normalize.css">
    <link rel="stylesheet" href="css/frameworks/skeleton/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/navbar.js"></script>

    @stack('head')

  </head>

  <body>

    <div class="container">

      <header>
        <!-- Navigation bar start -->
          <span class="toggle-button">
                <div class="menu-bar menu-bar-top"></div>
                <div class="menu-bar menu-bar-middle"></div>
                <div class="menu-bar menu-bar-bottom"></div>
              </span>
          <div class="menu-wrap">
            <div class="menu-sidebar">
              <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/projects">Projects</a></li>
              </ul>
            </div>
          </div>
        <!-- Navigation bar end -->

        @stack('header')

      </header>

      @yield('content')

    <!-- End of Main Container Section -->

    </div>

  @stack('body')

  </body>
</html>

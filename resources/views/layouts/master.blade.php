<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Devs Best Friend')</title>
    <meta charset='utf-8'>

    <!-- Bootstrap core CSS -->
    <link href="https://bootswatch.com/darkly/bootstrap.min.css"
          rel="stylesheet"
          type="text/css">


    {{-- To yield any page specific CSS files or anything else in the head element --}}
    @yield('head')
</head>
<body>
    <div class="container">
        <div class="header clearfix">
           <nav>
              <ul class="nav nav-justified">
                 <li class="active"><a href="/">Home</a>
                 </li>
                 <li><a href="/lorem-ipsum">Lorem Ipsum Text Generator</a>
                 </li>
                 <li><a href="/random-user">Random User Generator</a>
                 </li>
              </ul>
           </nav>
        </div>
        {{-- Main page content will be yielded here --}}
        @yield('content')
        <footer class="footer">
          <p>&copy; {{ date('Y') }}
        </footer>
    </div>
</body>
</html>

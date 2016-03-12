<!doctype html>
<html>
<head>
    <title>
        @yield('title','Developer's Best Friend')
    </title>

    <meta charset='utf-8'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>
    
</body>
</html>

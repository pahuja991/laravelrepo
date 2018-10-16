<!doctype html>
<html lang="en">
<head>
    @include('includes.h1')
</head>
<body>
<div class="container">
    @include('includes.header1')
    <main role="main">
        @yield('content')
        @yield('content')
    </main>
</div>
<footer class="container-fluid bg-dark text-white text-center">
    <div class="container">

    </div>
</footer>
@include('includes.style')
</body>
</html>
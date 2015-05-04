<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.header')
    <title>@yield('title', 'Learning Laravel')</title>
</head>
<body>

@include('partial.nav')

<div class="container">
    @include('flash::message')

    @yield('content')
</div>

@include('partial.scripts')
@yield('footer')

</body>
</html>

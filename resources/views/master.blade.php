<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')


<body>


@include('navbar')

@yield('content')

@include('footer')



</body>
</html>

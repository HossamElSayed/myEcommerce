<!doctype html>
<html>
<head>
    <meta charset="@lang('en')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/mylib/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/mylib/font-awesome/css/font-awesome.min.css')}}">

    @yield('style')
</head>
<body>

@include('partials._header')

<div class="container">
    @yield('content')
</div>


{{--Jquery link--}}
<script src="{{url('/mylib/jquery-3.3.1.min.js')}}"></script>
{{--bootstrap link of js--}}
<script src="{{url('/mylib/bootstrap/js/bootstrap.min.js')}}"></script>
@yield('script')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title','Share it') | {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description','Share it description ...')">
    @include('partials.head')
    @stack('head')
</head>
<body class="@stack('body_class')">
@yield('content')
@include('partials.footer')
@include('partials.scripts')
@stack('footer_scripts')
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    @include('includes._head')
</head>

@yield('current_page')

<body class="home-page-1">
    @include('includes._google_analytics')

    <div class="main-wrapper">

        @include('includes._header')

        @include('includes._messages')

        @yield('content')

        @include('includes._footer')

    <div>

    @include('includes._javascript')

    @yield('scripts')

</body>
</html>
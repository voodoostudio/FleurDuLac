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

    </div>

    @include('includes._javascript')
    <!-- Mews Distributor -->
    <script>(function(m,e,w,s){c=m.createElement(e);c.onload=function(){ Mews.D.apply(null,s)};c.async=1;c.src=w;t=m.getElementsByTagName(e)[0];t.parentNode.insertBefore(c,t);}) (document,'script','https://www.mews.li/distributor/distributor.min.js',[['6f7ff57f-0253-4081-805d-ab4900e53af4']]);</script>
    <!-- End Mews Distributor -->
    @yield('scripts')

</body>
</html>
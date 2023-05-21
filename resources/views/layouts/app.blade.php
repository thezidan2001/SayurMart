<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<script>
    $(function() {
        AOS.init();
    });
</script>
<body>
    <div id='app'>
        @include('partials.header')
        <div class="" style="margin-top: {{ Request::is('/') ? '-1.3em' : '2em' }}">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>
@yield('scripts')
</html>
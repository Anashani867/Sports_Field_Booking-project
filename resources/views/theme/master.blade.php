<!doctype html>
<html class=no-js lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
@include('theme.partials.head')

<body>

{{--< !--[if lt IE 10]>--}}
{{--<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade--}}
{{--    your browser</a> to improve your experience.</p>--}}
{{--<![endif]-->--}}



<div class=wrapper>

@include('theme.partials.nav')



    @if (!Route::is('welcome'))
    @include('theme.partials.hero')
    @endif

    @yield('content')






    @include('theme.partials.footer')

</div>
@include('theme.partials.scripts')
</body>

</html>

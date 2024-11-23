<header class=header-main>

    <div class=header-upper>
        <div class=container>
            <div class=row>
                <ul>

{{--                    @if (Route::has('login'))--}}
{{--                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--                            @auth--}}
{{--                                <li>   <a href="{{route('welcome')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a></li>--}}
{{--                            @else--}}
{{--                                <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>--}}

{{--                                @if (Route::has('register'))--}}
{{--                                    <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>--}}
{{--                                @endif--}}
{{--                            @endauth--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <a href="{{ route('login') }}" class="btn btn-link">Log in</a>--}}
{{--                    <a href="{{ route('register') }}" class="btn btn-link">Register</a>--}}


                    <li><a href="#">Signup/login</a></li>
                    <li><a href=shopcart.html><i class="fa fa-shopping-cart"></i> <span>cart(<span
                                    class=cartitems>0</span>)</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-lower clearfix">
        <div class=container>
            <div class=row><h1 class=logo><a href=index-2.html><img src={{asset('assets')}}/images/logo.png alt=image></a></h1>

                <div class=menubar>
                    <nav class=navbar>
                        <div class=nav-wrapper>
                            <div class=navbar-header>
                                <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                    <span class=icon-bar></span></button>
                            </div>
                            <div class=nav-menu>
                                <ul class="nav navbar-nav menu-bar">
                                    <li><a href={{route('welcome')}}  class=@yield('welcome-active')>Home <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                    <li><a href={{route('theme.about')}} class=@yield('about-active')>about <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                    <li><a>gallery <span></span> <span></span> <span></span> <span></span></a>
                                        <ul class=sub-menu>
                                            <li class=@yield('gallery-active')><a href={{route('theme.gallery')}}>masonry</a></li>
                                            <li class=@yield('gallery-active')><a href={{route('theme.gallery')}}>gallery column two</a></li>
                                            <li class=@yield('gallery-active')><a href={{route('theme.gallery')}}>gallery column 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href={{route('theme.blog')}}  class=@yield('blog-active')>blog <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                    <li><a href={{route('theme.bookTickets')}} class=@yield('bookTickets-active')>book Tickets<span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                    <li><a href={{route('theme.shop')}} class=@yield('shop-active')>shop <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                    <li><a href={{route('theme.contact')}} class=@yield('contact-active')>contact <span></span> <span></span> <span></span>
                                            <span></span></a></li>
                                    <li><a>error <span></span> <span></span> <span></span> <span></span></a>
                                        <ul class=sub-menu>
                                            <li><a href=400.html>400 page</a></li>
                                            <li><a href=401.html>401 page</a></li>
                                            <li><a href=403.html>403 page</a></li>
                                            <li><a href=404.html>404 page</a></li>
                                            <li><a href=500.html>500 page</a></li>
                                            <li><a href=503.html>503 page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class=social><a href=https://www.facebook.com/templatespoint.net class=facebook><i
                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/itobuztech class=twitter><i
                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/ class=behance><i
                            class="fa fa-behance"></i></a></div>
            </div>
        </div>
    </div>
</header>
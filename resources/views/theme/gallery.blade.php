{{--@extends('theme.master')--}}
{{--@section('hero-title')--}}
{{--    <span>gallery</span>--}}
{{--@endsection--}}
{{--@section('gallery-active','active')--}}
{{--@section('content')--}}
{{--<div class=wrapper>--}}

{{--    <section class=innerpage_all_wrap>--}}
{{--        <div class=container>--}}
{{--            <ul class=galleryMenu id=menu>--}}
{{--                <li><a href=#menu class=selected>all item</a></li>--}}
{{--                <li><a href=#menu data-filter=.shoes class=selected>shoes</a></li>--}}
{{--                <li><a href=#menu data-filter=.player>players</a></li>--}}
{{--                <li><a href=#menu data-filter=.stadiums>stadiums</a></li>--}}
{{--            </ul>--}}
{{--            <div class=gallery>--}}
{{--                <div class=sk-cube-grid id=galleryLoader>--}}
{{--                    <div class="sk-cube sk-cube1"></div>--}}
{{--                    <div class="sk-cube sk-cube2"></div>--}}
{{--                    <div class="sk-cube sk-cube3"></div>--}}
{{--                    <div class="sk-cube sk-cube4"></div>--}}
{{--                    <div class="sk-cube sk-cube5"></div>--}}
{{--                    <div class="sk-cube sk-cube6"></div>--}}
{{--                    <div class="sk-cube sk-cube7"></div>--}}
{{--                    <div class="sk-cube sk-cube8"></div>--}}
{{--                    <div class="sk-cube sk-cube9"></div>--}}
{{--                </div>--}}
{{--                <div id=galleryWrapper class="clearfix magnificPopupParent">--}}
{{--                    <div class="item stadiums"><a href=images/gallery/masonry/small_01_l.jpg--}}
{{--                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_01.jpg alt=image></a></div>--}}
{{--                    <div class="item shoes"><a href={{asset('assets')}}/images/gallery/masonry/small_02_l.jpg--}}
{{--                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_02.jpg alt=image></a></div>--}}
{{--                    <div class="item gallery-item-width2 player"><a href={{asset('assets')}}/images/gallery/masonry/medium_01_l.jpg--}}
{{--                                                                    title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/medium_01.jpg alt=image></a></div>--}}
{{--                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_03_l.jpg--}}
{{--                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_03.jpg alt=image></a></div>--}}
{{--                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_04_l.jpg--}}
{{--                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_04.jpg alt=image></a></div>--}}
{{--                    <div class="item gallery-item-width3 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/large_01_l.jpg--}}
{{--                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/large_01.jpg alt=image></a></div>--}}
{{--                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_05_l.jpg--}}
{{--                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_05.jpg alt=image></a></div>--}}
{{--                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_06_l.jpg--}}
{{--                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_06.jpg alt=image></a></div>--}}
{{--                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_07_l.jpg--}}
{{--                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_07.jpg alt=image></a></div>--}}
{{--                    <div class="item gallery-item-width2 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/medium_02_l.jpg--}}
{{--                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/medium_02.jpg alt=image></a></div>--}}
{{--                    <div class="item gallery-item-width2 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/medium_03_l.jpg--}}
{{--                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/medium_03.jpg alt=image></a></div>--}}
{{--                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_08_l.jpg--}}
{{--                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_08.jpg alt=image></a></div>--}}
{{--                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_09_l.jpg--}}
{{--                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_09.jpg alt=image></a></div>--}}
{{--                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_10_l.jpg--}}
{{--                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_10.jpg alt=image></a></div>--}}
{{--                    <div class="item shoes"><a href={{asset('assets')}}/images/gallery/masonry/small_11_l.jpg--}}
{{--                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img--}}
{{--                                src={{asset('assets')}}/images/gallery/masonry/small_11.jpg alt=image></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
@extends('theme.master')

@section('hero-title')
    <span>Field </span>Booking
@endsection

@section('gallery-active', 'active')

@section('content')

    <div class="wrapper">
        <section class="innerpage_all_wrap">
            <div class="container">
                <h2 class="table-title">Field Booking Cards</h2>
                <div class="LatestNews_wrap clearfix">
                    <ul class="nav accordion-news" role="tablist">
                        <li class="active">
                            <a href="#club_news" aria-controls="club_news" role="tab" data-toggle="tab">Available Fields</a>
                        </li>
                    </ul>

                    <div class="tab-content news_display_container clearfix">
                        <ul id="club_news" class="tab-pane active row">
                            @foreach($fields as $field)
                                <li class="field-card col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <div class="card">
                                        <a href="{{ route('Field.Details', ['id' => $field->id]) }}">View Details</a>
                                            <div class="figure-01">
{{--                                                <img src="{{ asset('assets/images/gallery/masonry/' . $field->image) }}" alt="{{ $field->field_name }}" class="card-image">--}}
                                                <img src="{{ asset('storage/' . $field->image) }}"  alt="{{ $field->field_name }}" class="card-image">
                                            </div>
                                            <div class="content-01">
                                                <h6>{{ $field->field_name }}</h6>
                                                <p class="red_p">Stories of the legends</p>
                                                <p class="describtion">
                                                    <strong>Location:</strong> {{ $field->location }}<br>
                                                    <strong>Availability:</strong> {{ $field->availability }}<br>
                                                    <strong>Price per Hour:</strong> ${{ $field->price }}
                                                </p>
                                            </div>
                                            <div class="news_date clearfix">
                                                <span>{{ $field->availability }}</span>
                                                <span class="like">❤ 45</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

<style>
    /* General Styling for Field Cards */
    .news_display_container ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .news_display_container ul li {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .news_display_container ul li:hover {
        transform: translateY(-15px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .card-link {
        text-decoration: none;
        color: inherit;
    }

    .figure-01 img {
        width: 100%;
        height: 400px; /* Increased image height for larger cards */
        object-fit: cover;
        border-radius: 12px;
    }

    .content-01 {
        padding: 25px 30px;
    }

    .content-01 h6 {
        font-size: 2rem; /* Increased font size for titles */
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .content-01 .red_p {
        color: #f1c40f;
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .content-01 .describtion {
        font-size: 1.1rem;
        line-height: 1.5;
        color: #555;
    }

    .news_date {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        font-size: 1rem;
        color: #999;
    }

    .news_date .like {
        font-size: 1.2rem;
        color: #f1c40f;
    }

    /* Grid Layout for Cards */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 30px; /* Increased spacing between rows */
    }

    .col-lg-6,
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .mb-4 {
        margin-bottom: 2rem; /* Increased margin between cards */
    }

    /* Small screens */
    @media (max-width: 576px) {
        .col-lg-6,
        .col-md-6,
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .figure-01 img {
            height: 300px; /* Adjust image height for smaller screens */
        }

        .content-01 h6 {
            font-size: 1.6rem; /* Adjust title size for smaller screens */
        }
    }
</style>

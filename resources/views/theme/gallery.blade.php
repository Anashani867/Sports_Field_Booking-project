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




{{--@extends('theme.master')--}}

{{--@section('hero-title')--}}
{{--    <span>Field </span>Booking--}}
{{--@endsection--}}

{{--@section('gallery-active', 'active')--}}

{{--@section('content')--}}

{{--    <div class="wrapper">--}}
{{--        <section class="innerpage_all_wrap">--}}
{{--            <div class="container">--}}
{{--                <h2 class="table-title">Field Booking Cards</h2>--}}
{{--                <div class="LatestNews_wrap clearfix">--}}
{{--                    <ul class="nav accordion-news" role="tablist">--}}
{{--                        <li class="active">--}}
{{--                            <a href="#club_news" aria-controls="club_news" role="tab" data-toggle="tab">Available Fields</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    <div class="tab-content news_display_container clearfix">--}}
{{--                        <a class="prv club_prev"></a> <a class="nxt club_next"></a>--}}

{{--                        <ul id="club_news" class="tab-pane active row">--}}
{{--                            @foreach($fields as $field)--}}
{{--                                <li class="field-card col-lg-6 col-md-6 col-sm-12 mb-4">--}}
{{--                                    <div class="card">--}}
{{--                                        <a class="card-link" href="{{ route('Field.Details', ['id' => $field->id]) }}">--}}
{{--                                            <div class="figure-01">--}}
{{--                                                <img src="{{ asset('assets/images/gallery/masonry/' . $field->image) }}" alt="{{ $field->field_name }}" class="card-image">--}}
{{--                                                <img src="{{ asset('storage/' . $field->image) }}"  alt="{{ $field->field_name }}" class="card-image">--}}
{{--                                            </div>--}}
{{--                                            <div class="content-01">--}}
{{--                                                <h6>{{ $field->field_name }}</h6>--}}
{{--                                                <p class="red_p">Stories of the legends</p>--}}
{{--                                                <p class="describtion">--}}
{{--                                                    <strong>Location:</strong> {{ $field->location }}<br>--}}
{{--                                                    <strong>Availability:</strong> {{ $field->availability }}<br>--}}
{{--                                                    <strong>Price per Hour:</strong> ${{ $field->price }}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="news_date clearfix">--}}
{{--                                                <span>{{ $field->availability }}</span>--}}
{{--                                                <span class="like">❤ 45</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--<style>--}}
{{--    /* General Styling for Field Cards */--}}
{{--    .news_display_container ul {--}}
{{--        list-style-type: none;--}}
{{--        padding: 0;--}}
{{--        margin: 0;--}}
{{--    }--}}

{{--    .news_display_container ul li {--}}
{{--        padding: 20px;--}}
{{--        background-color: #f9f9f9;--}}
{{--        border-radius: 12px;--}}
{{--        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);--}}
{{--        transition: all 0.3s ease;--}}
{{--    }--}}

{{--    .news_display_container ul li:hover {--}}
{{--        transform: translateY(-15px);--}}
{{--        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);--}}
{{--    }--}}

{{--    .card-link {--}}
{{--        text-decoration: none;--}}
{{--        color: inherit;--}}
{{--    }--}}

{{--    .figure-01 img {--}}
{{--        width: 100%;--}}
{{--        height: 400px; /* Increased image height for larger cards */--}}
{{--        object-fit: cover;--}}
{{--        border-radius: 12px;--}}
{{--    }--}}

{{--    .content-01 {--}}
{{--        padding: 25px 30px;--}}
{{--    }--}}

{{--    .content-01 h6 {--}}
{{--        font-size: 2rem; /* Increased font size for titles */--}}
{{--        font-weight: bold;--}}
{{--        margin-bottom: 20px;--}}
{{--        color: #333;--}}
{{--    }--}}

{{--    .content-01 .red_p {--}}
{{--        color: #f1c40f;--}}
{{--        font-size: 1.2rem;--}}
{{--        margin-bottom: 20px;--}}
{{--    }--}}

{{--    .content-01 .describtion {--}}
{{--        font-size: 1.1rem;--}}
{{--        line-height: 1.5;--}}
{{--        color: #555;--}}
{{--    }--}}

{{--    .news_date {--}}
{{--        display: flex;--}}
{{--        justify-content: space-between;--}}
{{--        margin-top: 20px;--}}
{{--        font-size: 1rem;--}}
{{--        color: #999;--}}
{{--    }--}}

{{--    .news_date .like {--}}
{{--        font-size: 1.2rem;--}}
{{--        color: #f1c40f;--}}
{{--    }--}}

{{--    /* Grid Layout for Cards */--}}
{{--    .row {--}}
{{--        display: flex;--}}
{{--        flex-wrap: wrap;--}}
{{--        gap: 30px; /* Increased spacing between rows */--}}
{{--    }--}}

{{--    .col-lg-6,--}}
{{--    .col-md-6 {--}}
{{--        flex: 0 0 50%;--}}
{{--        max-width: 50%;--}}
{{--    }--}}

{{--    .col-sm-12 {--}}
{{--        flex: 0 0 100%;--}}
{{--        max-width: 100%;--}}
{{--    }--}}

{{--    .mb-4 {--}}
{{--        margin-bottom: 2rem; /* Increased margin between cards */--}}
{{--    }--}}

{{--    /* Small screens */--}}
{{--    @media (max-width: 576px) {--}}
{{--        .col-lg-6,--}}
{{--        .col-md-6,--}}
{{--        .col-sm-12 {--}}
{{--            flex: 0 0 100%;--}}
{{--            max-width: 100%;--}}
{{--        }--}}

{{--        .figure-01 img {--}}
{{--            height: 300px; /* Adjust image height for smaller screens */--}}
{{--        }--}}

{{--        .content-01 h6 {--}}
{{--            font-size: 1.6rem; /* Adjust title size for smaller screens */--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}


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

                    <!-- Filters Section -->
                    <div class="filters">
                        <h4>Filters</h4>
                        <form>
                            <div class="form-group">
                                <label for="locationFilter">Location</label>
                                <select id="locationFilter" class="form-control">
                                    <option value="">All Locations</option>
                                    @foreach($uniqueLocations as $location)
                                        <option value="{{ $location }}">{{ $location }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="availabilityFilter">Availability</label>
                                <select id="availabilityFilter" class="form-control">
                                    <option value="">All Availability</option>
                                    <option value="Available">Available</option>
                                    <option value="Fully Booked">Fully Booked</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="minPrice">Price Range</label>
                                <div class="d-flex">
                                    <input type="number" id="minPrice" class="form-control mr-2" placeholder="Min Price">
                                    <input type="number" id="maxPrice" class="form-control" placeholder="Max Price">
                                </div>
                            </div>

                            <button type="button" id="filterButton" class="btn btn-primary">Apply Filters</button>
                        </form>
                    </div>

                    <div class="tab-content news_display_container clearfix">
                        <a class="prv club_prev slick-arrow" style="display: inline;"></a>
                        <a class="nxt club_next slick-arrow" style="display: inline;"></a>
                        <ul id="club_news" class="tab-pane active row">
                            <!-- Fields Display Section -->
                            @foreach($fields as $field)
                                <li class="field-card col-lg-6 col-md-6 col-sm-12 mb-4"
                                    data-location="{{ $field->location }}"
                                    data-availability="{{ $field->isFullyBooked ? 'Fully Booked' : 'Available' }}"
                                    data-price="{{ $field->price }}">

                                    @if($field->isFullyBooked)
                                        {{-- العنصر مغلق --}}
                                        <div class="card" style="pointer-events: none; opacity: 0.6;">
                                            <div class="figure-01">
                                                <img src="{{ asset('storage/' . $field->image) }}" alt="{{ $field->field_name }}" class="card-image">
                                            </div>
                                            <div class="content-01">
                                                <h6 style="color: whitesmoke">{{ $field->field_name }}</h6>
                                                <p class="red_p">Stories of the legends</p>
                                                <p style="color: whitesmoke" class="describtion">
                                                    <strong style="color: whitesmoke">Location:</strong> {{ $field->location }}<br>
                                                    <strong style="color: whitesmoke">Availability:</strong> <span style="color: red;">Fully Booked</span><br>
                                                    <strong style="color: whitesmoke">Price per Hour:</strong> ${{ $field->price }}
                                                </p>
                                            </div>
                                            <div class="news_date clearfix">
                                                <span style="color: red; font-weight: bold;">Fully Booked</span>
                                            </div>
                                        </div>
                                    @else
                                        {{-- العنصر متاح --}}
                                        <div class="card">
                                            <a class="card-link" href="{{ route('Field.Details', ['id' => $field->id]) }}">
                                                <div class="figure-01">
                                                    <img src="{{ asset('storage/' . $field->image) }}" alt="{{ $field->field_name }}" class="card-image">
                                                </div>
                                                <div class="content-01">
                                                    <h6 style="color: whitesmoke">{{ $field->field_name }}</h6>
                                                    <p class="red_p">Stories of the legends</p>
                                                    <p style="color: whitesmoke" class="describtion">
                                                        <strong style="color: whitesmoke">Location:</strong> {{ $field->location }}<br>
                                                        <strong style="color: whitesmoke">Price per Hour:</strong> ${{ $field->price }}
                                                    </p>
                                                    <p>Availability:
                                                        @if($field->isFullyBooked)
                                                            Fully Booked
                                                        @else
                                                            Available
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="news_date clearfix">
                                                    <span>Available</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            document.getElementById('filterButton').addEventListener('click', function() {
                                // Get values from inputs
                                const location = document.getElementById('locationFilter').value.trim().toLowerCase();
                                const availability = document.getElementById('availabilityFilter').value.trim().toLowerCase();
                                const minPrice = parseFloat(document.getElementById('minPrice').value.trim()) || 0;
                                const maxPrice = parseFloat(document.getElementById('maxPrice').value.trim()) || Infinity;

                                // Get all field cards
                                const fieldCards = document.querySelectorAll('.field-card');
                                fieldCards.forEach(card => {
                                    // Get data attributes from each card
                                    const cardLocation = card.getAttribute('data-location').trim().toLowerCase();
                                    const cardAvailability = card.getAttribute('data-availability').trim().toLowerCase();
                                    const cardPrice = parseFloat(card.getAttribute('data-price'));

                                    // Check if the card matches the filters
                                    const isLocationMatch = !location || cardLocation.includes(location);
                                    const isAvailabilityMatch = !availability || cardAvailability.includes(availability);
                                    const isPriceMatch = (cardPrice >= minPrice) && (cardPrice <= maxPrice);

                                    // Show or hide card based on filters
                                    if (isLocationMatch && isAvailabilityMatch && isPriceMatch) {
                                        card.style.display = 'block'; // Show card
                                    } else {
                                        card.style.display = 'none'; // Hide card
                                    }
                                });
                            });
                        });

                    </script>


                </div>
            </div>
        </section>
    </div>

@endsection

<style>
    .filters {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 0;
        padding: 15px 20px;
        margin-bottom: 25px;
        border: 1px solid #e63946;
        max-width: 100%;
    }

    .filters h4 {
        color: #e63946;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 8px;
        border-bottom: 2px solid #e63946;
    }

    .filters form {
        display: flex;
        align-items: flex-end;
        gap: 15px;
        flex-wrap: wrap;
    }

    .filters .form-group {
        margin-bottom: 0;
        flex: 1;
        min-width: 180px;
    }

    .filters .form-group:last-child {
        flex: 0 0 auto;
    }

    .filters label {
        color: #333;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 12px;
        margin-bottom: 4px;
        display: block;
    }

    .filters .form-control {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 0;
        height: 35px;
        padding: 5px 10px;
        color: #495057;
        font-size: 13px;
        width: 100%;
    }

    .filters select.form-control {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 12 12'%3E%3Cpath fill='%23e63946' d='M6 9L0 0h12z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 10px center;
        padding-right: 30px;
    }

    /* Price range inputs */
    .filters .d-flex {
        display: flex;
        gap: 8px;
        flex: 1;
    }

    .filters .d-flex .form-control {
        width: calc(50% - 4px);
    }

    .filters .btn-primary {
        background-color: #e63946;
        border: none;
        color: white;
        padding: 8px 20px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 0;
        transition: all 0.3s ease;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
    }

    .filters .btn-primary:hover {
        background-color: #dc2f3d;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .filters form {
            gap: 10px;
        }

        .filters .form-group {
            min-width: 160px;
        }
    }

    @media (max-width: 768px) {
        .filters form {
            flex-direction: column;
        }

        .filters .form-group {
            width: 100%;
        }

        .filters .d-flex {
            width: 100%;
        }

        .filters .btn-primary {
            width: 100%;
        }
    }

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
        height: 400px;
        object-fit: cover;
        border-radius: 12px;
    }

    .content-01 {
        padding: 25px 30px;
    }

    .content-01 h6 {
        font-size: 2rem;
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
        margin-bottom: 2rem;
    }

    @media (max-width: 576px) {
        .col-lg-6,
        .col-md-6,
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .figure-01 img {
            height: 300px;
        }

        .content-01 h6 {
            font-size: 1.6rem;
        }
    }
</style>


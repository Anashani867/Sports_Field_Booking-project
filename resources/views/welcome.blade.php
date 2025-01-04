@extends('theme.master')

@section('welcome-active','active')
<style>
    .gallery-container {
        display: flex;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .side-nav {
        width: 300px;
        background: #fff;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .nav-item {
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 4px;
        background: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .nav-item:hover {
        background: #e9ecef;
    }

    .nav-item.active {
        background: #ff9f43;
        color: white;
    }

    .nav-date {
        font-size: 12px;
        color: #666;
        margin-bottom: 5px;
    }

    .nav-title {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .nav-desc {
        font-size: 12px;
        color: #777;
    }

    .main-image {
        flex-grow: 1;
        border-radius: 8px;
        overflow: hidden;
        height: 600px;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .nav-controls {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .nav-button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 5px;
        color: #666;
    }

    .nav-button:hover {
        color: #ff9f43;
    }

    /* Handle active state without affecting date color */
    .nav-item.active .nav-date {
        color: rgba(255,255,255,0.8);
    }

    .nav-item.active .nav-desc {
        color: rgba(255,255,255,0.9);
    }
</style>
@section('content')

    <div class=wrapper>


        <div class=banner id=layerSlider style="width: 100%;">
            <div class=ls-slide data-ls="transition3d: 33,15; slidedelay: 8000 ; durationin:0;"><img
                    src={{asset('assets')}}/images/banner/background01.jpg class=ls-bg alt="Slide background">

                <div class="ls-l layercontent01" style="top: 50%; left: 50%; z-index:4;"
                     data-ls="offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;"><img
                        src={{asset('assets')}}/images/banner/player.png alt=innerimage class=img-responsive
                        style="max-width: 100% !important ;"></div>
                <img src={{asset('assets')}}/images/banner/ball.png alt=innerimage class="ls-l layercontent02" style=z-index:5;
                     data-ls="offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;">
                <img src={{asset('assets')}}/images/banner/front_particles.png alt=particles class=ls-l style="z-index:3; left:0;"
                     data-ls="offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;">
                <img src={{asset('assets')}}/images/banner/back_particles.png alt=particles class=ls-l style="z-index:3; left:50%;"
                     data-ls="offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;">

                <h2 class="ls-l bannertext layercontent03" data-ls="offsetxin:left; rotatexin:90 ; durationin: 3500;">
                    {{--                    action</h2>--}}
                    booking</h2>

                <h2 class="ls-l bannertext01 italic01 layercontent04"
                    data-ls="offsetxin:left; scalexin:9; durationin: 4000;">starts</h2><h4
                    class="ls-l bannertext02 layercontent05" data-ls="offsetxin:left; rotatexin:90 ; durationin: 4500;">
                    <a href="{{route('theme.gallery')}}" style="color: whitesmoke">book my ticket</a></h4>

                <h2 class="ls-l bannertext01 layercontent06" style="left: 87%; top:760px;"
                    data-ls="offsetxin:left; flipxin:90 ; durationin: 5000;">5<sup>st</sup></h2><h6
                    class="ls-l bannertext03 layercontent07" data-ls="offsetxin:left; flipxin:90 ; durationin: 6000;">
                    Jun , 2025</h6></div>
        </div>









        <div class=banner-text>
            <div class=container>
                <div class=row>booking start <sup>st</sup>5</div>
            </div>
        </div>

        <section class="booking bg-smallwhite">
            <div class=container>
                <div class=booking-fig><h2>club field</h2></div>
                <div class=booking-content><a href="{{route('theme.about')}}" class="btn btn-white">read more</a> <a href="{{route('bookTickets')}}" class="btn btn-red">book my ticket</a></div>
            </div>
        </section>

        <section class=about>
            <div class=container>
                <div class=row><h2 class=heading>Reservation <span>System</span></h2>
                    <div class=about-wrap>
                        <div class="tab-content nav-content">

                            <p role=tabpanel class="tab-pane fade" id=Status>  Check the status of your reservations. Please ensure to have your booking ID handy for quick access.
                                <br><br>
                                <strong>Status:</strong> Available / Fully Booked
                                <br>
                                For more details, contact support.
                            </p>

<div role="tabpanel" class="tab-pane active" id="Booking">

                                Learn how to use the reservation system effectively. Follow our quick tutorial or reach out to support for help.
                            <ol>
                                <li>Choose your date and time from the available dates.</li>
                                <li>Fill in the reservation form with accurate details.</li>
                                <li>Submit your booking and wait for confirmation.</li>
                                <li>Track the status in the "Booking Status" tab.</li>
                            </ol>
</div>


                            <div role="tabpanel" class="tab-pane active" id="field">
                                <p>
                                    Learn how to use the reservation system effectively. Below are the steps to add a new field for reservation:
                                </p>
                                <ol>
                                    <li>Provide the **field name** (e.g., Football Field).</li>
                                    <li>Specify the **location** (e.g., exact address or a map link).</li>
                                    <li>Determine the **available time** for the field (e.g., 10:00 AM - 5:00 PM).</li>
                                    <li>Set the **price** per hour for using the field.</li>
                                    <li>Select the **type** of the field from predefined categories (e.g., Football, Basketball, Tennis).</li>
                                    <li>Upload an **image** of the field to give users a visual representation.</li>
                                </ol>
                            </div>

                        </div>
                        <div class=nav-header id=aboutTab>
                            <ul class="nav nav-tabs clearfix" role=tablist>
                                <li><a href=#Status aria-controls=Status role=tab data-toggle=tab>Status</a></li>
                                <li class=active><a href=#Booking aria-controls=Booking role=tab data-toggle=tab>Booking</a>
                                </li>
                                <li><a href=#field aria-controls=field role=tab data-toggle=tab>add field </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



{{--        <section class=latestResult>--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>latest <span>result</span></h2>--}}

{{--                    <div class=latestResult-wrap><h4>uefa champions league</h4>--}}

{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed--}}
{{--                            aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae--}}
{{--                            porro nemo.</p></div>--}}
{{--                    <div class="result clearfix">--}}
{{--                        <div class=result-details>--}}
{{--                            <div class=content><h4>fc Dragons</h4>--}}

{{--                                <p>lose</p>--}}

{{--                                <p>Shannon Skelly(23)</p></div>--}}
{{--                            <div class=figure>--}}
{{--                                <div class=team-logo>--}}
{{--                                    <div style=background:url({{asset('assets')}}/images/team-logo/logo01.png) class=teamLogoImg></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class=result-count>--}}
{{--                            <div class=count-number><span class=lose-team>1</span> <span>-</span> <span--}}
{{--                                    class=win-team>3</span></div>--}}
{{--                            <div class=dateTime>--}}
{{--                                <div class=dateTime-container><span class=date>may 16,2015</span> <span--}}
{{--                                        class=time>15:30pm</span></div>--}}
{{--                                <div class=country-wrap><span class=field>wbeysley stadium</span> <span class=country>(london)</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class=result-details>--}}
{{--                            <div class="content contentresult"><h4>fc Zulu Ninjas</h4>--}}

{{--                                <p>win</p>--}}

{{--                                <p>Leland Lagos(29)</p>--}}

{{--                                <p>Lelnd Lagos(39)</p></div>--}}
{{--                            <div class="figure figresult">--}}
{{--                                <div class=team-logo>--}}
{{--                                    <div style=background:url({{asset('assets')}}/images/team-logo/logo02.png) class=teamLogoImg></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class=center><a href=# class="btn btn-red score-btn">Score board</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


        <section class="matchSchedule">
            <div class="container">
                <div class="row">
                    <h2 class="heading">match <span>schedule</span></h2>

                    <p class="headParagraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                        qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                        ipsam, nesciunt dolores consequatur, est tempora ut! Est.
                    </p>

{{--                    <div class="matchSchedule_details row">--}}
{{--                        <div class="match_next right-triangle">--}}
{{--                            <div class="wrap_match_next right-triangle">--}}
{{--                                <div class="right-padding">--}}
{{--                                    <h4 class="headline03">next match</h4>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Match Details Section -->--}}
{{--                        <div class="match_versus">--}}
{{--                            <div class="bg-blackimg match_versus02">--}}
{{--                                <div class="nextmatchDetails">--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>--}}
{{--                                    <div class="wrap-logo clearfix">--}}
{{--                                        <div class="logo-match">--}}
{{--                                            <img src="{{ asset('assets') }}/images/matchResult/logo01.png" alt="image">--}}
{{--                                        </div>--}}
{{--                                        <div class="match_vs">vs</div>--}}
{{--                                        <div class="logo-match">--}}
{{--                                            <img src="{{ asset('assets') }}/images/matchResult/logo02.png" alt="image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <p class="match_dtls">October 31, 2015 | 18:25PM</p>--}}
{{--                                    <p class="match_dtls">Wembley stadium (London)</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="match_timing">--}}
{{--                            <ul class="counter-wrap">--}}
{{--                                <li><span>12</span>days</li>--}}
{{--                                <li><span>18</span>hours</li>--}}
{{--                                <li><span>27</span>minutes</li>--}}
{{--                                <li><span>55</span>seconds</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                    <!-- Pointed Table Section -->
                    <div class="matchSchedule_details row">
                        <div class="match_next">
                            <div class="wrap_match_next right-triangle">
                                <div class="right-padding">
                                    <h4 class="headline03">Recent Bookings</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="match_versus-wrap">
                            <div class="wrap_match-innerdetails">
                                <ul class="point_table scrollable">
                                    <!-- إضافة قسم الحجزات -->
                                    @foreach($latestBookings as $booking)
                                        <li class="clearfix">
                                            <div class="subPoint_table">
                                                <div class="headline01 smallpoint">{{ $booking->created_at }}</div>
                                                <div class="headline01 largepoint">{{ $booking->field->field_name }}</div>
                                                <div class="headline01 smallpoint row row"><span>Booked a slot for</span><span>{{ $booking->service }}</span></div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="booking bookticket">
            <div class=container>
                <div class=booking-fig><h2>SCC football club</h2></div>
                <div class=booking-content><a href='{{route('theme.gallery')}} ' class="btn btn-white">booking now</a></div>
            </div>
        </section>


        <section class="latestimages">

            <div class="row">
                <h2 class="heading">Latest <span>Images</span></h2>
                <p class="headParagraph">Explore our latest images selected randomly for you!</p>
            <div class="gallery-container">
                <div class="side-nav">
                    <div class="nav-controls">
                        <button class="nav-button prev-button">◀</button>
                        <button class="nav-button next-button">▶</button>
                    </div>
                    @foreach ($media as $item)
                        <div class="nav-item {{ $loop->first ? 'active' : '' }}"
                             data-img-src="{{ asset('storage/' . $item->path) }}">
                            <div class="nav-date">{{ $item->created_at->format('F d, Y') }}</div>
                            <div class="nav-title">{{ $item->title }}</div>
                            <div class="nav-desc">{{ $item->description }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="main-image">
                    @if ($media->isNotEmpty())
                        <img src="{{ asset('storage/' . $media->first()->path) }}" alt="Featured Image">
                    @else
                        <div class="no-image">No images available</div>
                    @endif
                </div>
            </div>
            </div>
        </section>

        <section class="latest_news bg-white">
            <div class=container>
                <div class=row><h2 class=heading>latest <span>news</span></h2>

                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                        qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                        ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                        voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                        Est.</p>

                    <div class="LatestNews_wrap clearfix">
                        <ul class="nav accordion-news" role="tablist">
                            <li class="active">
                                <a  aria-controls="club_news" role="tab" data-toggle="tab">Available Fields</a>
                            </li>
                        </ul>

                        <div class="tab-content news_display_container clearfix">
                            <ul id=club_news >
                                @foreach($fields as $field)
                                <li>
                                    <div class=figure>
                                        <a class="card-link" href="{{ route('Field.Details', ['id' => $field->id]) }}">
                                        <div class=column-news>
                                            <div class=figure-01><img src="{{ asset('storage/' . $field->image) }}"alt="{{ $field->field_name }}" style=" width: 382px;
    height: 382px;
    object-fit: cover;
    border-radius: 8px; "></div>
                                            <div class=content-01>
                                                <h6>{{ $field->field_name }}</h6>

                                                <p style="color: whitesmoke" class="describtion"
                                                   data-location="{{ $field->location }}"
                                                   data-availability="{{ $field->availability }}"
                                                   data-price="{{ $field->price }}">
                                                    <strong style="color: whitesmoke">Location:</strong> {{ $field->location }}<br>
                                                    <strong style="color: whitesmoke">Availability:</strong> {{ $field->availability }}<br>
                                                    <strong style="color: whitesmoke">Price per Hour:</strong> ${{ $field->price }}
                                                </p>

                                               </div>
                                            <div class="news_date clearfix"><span>{{ $field->availability }}</span>
                                               </div>
                                        </div>
                                        </a>
                                    </div>

                                </li>
                                @endforeach

                            </ul>
                            <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--        <section class=club_history>--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>club <span>history</span></h2>--}}

{{--                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis--}}
{{--                        consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?--}}
{{--                        Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>--}}

{{--                    <div class="nav clubHistory-wrap clearfix">--}}
{{--                        <ul class=historyMeter>--}}
{{--                            <li><a href=#><span>1987</span></a></li>--}}
{{--                            <li class=win><a href=#win01><span>1988</span></a></li>--}}
{{--                            <li><a href=#><span>1989</span></a></li>--}}
{{--                            <li><a href=#><span>1990</span></a></li>--}}
{{--                            <li class="win active"><a href=#win02><span>1991</span></a></li>--}}
{{--                            <li><a href=#><span>1991</span></a></li>--}}
{{--                            <li><a href=#><span>1995</span></a></li>--}}
{{--                            <li><a href=#><span>1997</span></a></li>--}}
{{--                            <li class=win><a href=#win03><span>2000</span></a></li>--}}
{{--                            <li><span>2005</span></li>--}}
{{--                            <li><span>2007</span></li>--}}
{{--                            <li><span>2009</span></li>--}}
{{--                            <li class=win><a href=#win04><span>2012</span></a></li>--}}
{{--                            <li><a href=#><span>2013</span></a></li>--}}
{{--                            <li><a href=#><span>2014</span></a></li>--}}
{{--                            <li class=win><a href=#win05><span>2015</span></a></li>--}}
{{--                        </ul>--}}
{{--                        <div class="tab-content historyVideoWrap clearfix">--}}
{{--                            <div role=tabpanel class="tab-pane clearfix" id=win01>--}}
{{--                                <div class=historyVideo>--}}
{{--                                    <div class=historyvideoContainer>--}}
{{--                                        <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=historyContent><h4><span>fifa 1988,</span> uefa champions league</h4>--}}

{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus--}}
{{--                                        error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque--}}
{{--                                        corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem--}}
{{--                                        ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque--}}
{{--                                        reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium--}}
{{--                                        molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor--}}
{{--                                        sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit.</p>--}}
{{--                                    <a href=clubHistoryDetails.html class="btn-small btn-red">Read more</a></div>--}}
{{--                            </div>--}}
{{--                            <div role=tabpanel class="tab-pane active clearfix" id=win02>--}}
{{--                                <div class=historyVideo>--}}
{{--                                    <div class=historyvideoContainer>--}}
{{--                                        <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=historyContent><h4><span>fifa 1991 ,</span> uefa champions league</h4>--}}

{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus--}}
{{--                                        error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque--}}
{{--                                        corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem--}}
{{--                                        ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque--}}
{{--                                        reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium--}}
{{--                                        molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor--}}
{{--                                        sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,--}}
{{--                                        error impedit voluptatum quo quaerat placeat .</p><a href=clubHistoryDetails.html--}}
{{--                                                                                             class="btn-small btn-red">Read--}}
{{--                                        more</a></div>--}}
{{--                            </div>--}}
{{--                            <div role=tabpanel class="tab-pane clearfix" id=win03>--}}
{{--                                <div class=historyVideo>--}}
{{--                                    <div class=historyvideoContainer>--}}
{{--                                        <iframe src=https://www.youtube.com/embed/F6U5-B3NUKA allowfullscreen=""></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=historyContent><h4><span>fifa 2000 ,</span> uefa champions league</h4>--}}

{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus--}}
{{--                                        error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque--}}
{{--                                        corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem--}}
{{--                                        ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque--}}
{{--                                        reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium--}}
{{--                                        molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor--}}
{{--                                        sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit .</p>--}}
{{--                                    <a href=clubHistoryDetails.html class="btn-small btn-red">Read more</a></div>--}}
{{--                            </div>--}}
{{--                            <div role=tabpanel class="tab-pane clearfix" id=win04>--}}
{{--                                <div class=historyVideo>--}}
{{--                                    <div class=historyvideoContainer>--}}
{{--                                        <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=historyContent><h4><span>fifa 2012,</span> uefa champions league</h4>--}}

{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus--}}
{{--                                        error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque--}}
{{--                                        corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem--}}
{{--                                        ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque--}}
{{--                                        reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium--}}
{{--                                        molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor--}}
{{--                                        sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit,</p>--}}
{{--                                    <a href=clubHistoryDetails.html class="btn-small btn-red">Read more</a></div>--}}
{{--                            </div>--}}
{{--                            <div role=tabpanel class="tab-pane clearfix" id=win05>--}}
{{--                                <div class=historyVideo>--}}
{{--                                    <div class=historyvideoContainer>--}}
{{--                                        <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=historyContent><h4><span>fifa 2015 ,</span> uefa champions league</h4>--}}

{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus--}}
{{--                                        error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque--}}
{{--                                        corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem--}}
{{--                                        ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque--}}
{{--                                        reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium--}}
{{--                                        molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor--}}
{{--                                        sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos,--}}
{{--                                        error impedit voluptatum quo quaerat placeat accusantium molestiae quod dolore, quae--}}
{{--                                        quos, blanditiis recusandae id iste.</p><a href=clubHistoryDetails.html--}}
{{--                                                                                   class="btn-small btn-red">Read more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="players homeplayer">--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>our <span>heroes</span></h2>--}}

{{--                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis--}}
{{--                        consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?--}}
{{--                        Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>--}}

{{--                    <div class="wrapplayer clearfix"><a class="prv prev-player"></a> <a class="nxt next-player"></a>--}}
{{--                        <ul class="slideHeroes clearfix">--}}
{{--                            <li><a href="#">--}}
{{--                                    <div class=playerFig>--}}
{{--                                        <div class=playerpic>--}}
{{--                                            <div style=background:url({{asset('assets')}}/images/player/player01.jpg) class=bgimg></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="playerDetails clearfix">--}}
{{--                                            <li><span>Daren Difiore</span> <span><img src={{asset('assets')}}/images/icons/tShirt.png--}}
{{--                                                                                      alt=image></span></li>--}}
{{--                                            <li class=playinfodetails>age 28 (born 22 april ,1987)</li>--}}
{{--                                            <li class=playerInfo><span>goalkeeper</span> <span><i--}}
{{--                                                        class="fa fa-heart"></i>20</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <div class=playerFig>--}}
{{--                                        <div class=playerpic>--}}
{{--                                            <div style=background:url({{asset('assets')}}/images/player/player02.jpg) class=bgimg></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="playerDetails clearfix">--}}
{{--                                            <li><span>Terry Tijerina</span> <span><img src={{asset('assets')}}/images/icons/tShirt.png--}}
{{--                                                                                       alt=image></span></li>--}}
{{--                                            <li class=playinfodetails>age 28 (born 22 april ,1987)</li>--}}
{{--                                            <li class=playerInfo><span>DEFENDER</span> <span><i--}}
{{--                                                        class="fa fa-heart"></i>34</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <div class=playerFig>--}}
{{--                                        <div class=playerpic>--}}
{{--                                            <div style=background:url({{asset('assets')}}/images/player/player03.jpg) class=bgimg></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="playerDetails clearfix">--}}
{{--                                            <li><span>Alex Alameda</span> <span><img src={{asset('assets')}}/images/icons/tShirt.png--}}
{{--                                                                                     alt=image></span></li>--}}
{{--                                            <li class=playinfodetails>age 28 (born 22 april ,1987)</li>--}}
{{--                                            <li class=playerInfo><span>STRIKER</span> <span><i class="fa fa-heart"></i>45</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <div class=playerFig>--}}
{{--                                        <div class=playerpic>--}}
{{--                                            <div style=background:url({{asset('assets')}}/images/player/player04.jpg) class=bgimg></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="playerDetails clearfix">--}}
{{--                                            <li><span>Lane Lavalley</span> <span><img src={{asset('assets')}}/images/icons/tShirt.png--}}
{{--                                                                                      alt=image></span></li>--}}
{{--                                            <li class=playinfodetails>age 28 (born 22 april ,1987)</li>--}}
{{--                                            <li class=playerInfo><span>STRIKER</span> <span><i class="fa fa-heart"></i>45</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <div class=playerFig>--}}
{{--                                        <div class=playerpic>--}}
{{--                                            <div style=background:url({{asset('assets')}}/images/player/player05.jpg) class=bgimg></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="playerDetails clearfix">--}}
{{--                                            <li><span>Dominick Dumbleton</span> <span><img src={{asset('assets')}}/images/icons/tShirt.png--}}
{{--                                                                                           alt=image></span></li>--}}
{{--                                            <li class=playinfodetails>age 28 (born 22 april ,1987)</li>--}}
{{--                                            <li class=playerInfo><span>STRIKER</span> <span><i class="fa fa-heart"></i>78</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class=gallery>--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>our <span>gallery</span></h2>--}}

{{--                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis--}}
{{--                        consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?--}}
{{--                        Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p></div>--}}
{{--            </div>--}}
{{--            <div class=galleryWrapper>--}}
{{--                <div class=grid>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery02.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery03.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery04.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery021.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery031.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/five.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery031.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/masonry/medium_01.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/gallery041.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=grid_item>--}}
{{--                        <div class=gallery_dtl><img src={{asset('assets')}}/images/gallery/masonry/medium_03.jpg alt=image>--}}

{{--                            <div class=gallery_info>--}}
{{--                                <div class=galleryinfo_wrap><p class=uppercase>consectetur</p>--}}

{{--                                    <p class=red_p>Magna aliqua</p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=gutter></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="btn btn-red">read more</a></section>--}}


        <section class=social-media>
            <div class=container>
                <div class=row>
                    <ul class=socialinfo>
                        <li><a href="#">
                                <div class=sociallink><i class="fa fa-twitter"></i></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                    assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                    assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                        <li><a href="#">
                                <div class=sociallink><i class="fa fa-facebook"></i></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                    assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                    assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                        <li><a href="#">
                                <div class=sociallink><i class="fa fa-behance"></i></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur aperiam ut necessitatibus,
                                    assumenda a maxime eos nulla maiores perspiciatis deleniti! A ratione ipsam magnam accusamus
                                    assumenda consectetur reiciendis hic obcaecati.</p></a></li>
                    </ul>
                </div>
            </div>
        </section>

{{--        <section class=awards>--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>awa<span>rds</span></h2>--}}

{{--                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis--}}
{{--                        consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?--}}
{{--                        Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>--}}

{{--                    <div class="wrapper-container clearfix"><a class="prv awards_prev"></a> <a class="nxt awards_next"></a>--}}
{{--                        <ul class="awards-wrap clearfix">--}}
{{--                            <li><a href=achivement_details.html><img src={{asset('assets')}}/images/awards/awards01.png alt=image>--}}
{{--                                    <ul class=awards-info>--}}
{{--                                        <li>uefa 2014</li>--}}
{{--                                        <li>champion</li>--}}
{{--                                    </ul>--}}
{{--                                </a></li>--}}
{{--                            <li><a href=achivement_details.html><img src={{asset('assets')}}/images/awards/awards02.png alt=image>--}}
{{--                                    <ul class=awards-info>--}}
{{--                                        <li>uefa 2014</li>--}}
{{--                                        <li>champion</li>--}}
{{--                                    </ul>--}}
{{--                                </a></li>--}}
{{--                            <li><a href=achivement_details.html><img src={{asset('assets')}}/images/awards/awards03.png alt=image>--}}
{{--                                    <ul class=awards-info>--}}
{{--                                        <li>uefa 2014</li>--}}
{{--                                        <li>champion</li>--}}
{{--                                    </ul>--}}
{{--                                </a></li>--}}
{{--                            <li><a href=#><img src={{asset('assets')}}/images/awards/awards04.png alt=image>--}}
{{--                                    <ul class=awards-info>--}}
{{--                                        <li>uefa 2014</li>--}}
{{--                                        <li>champion</li>--}}
{{--                                    </ul>--}}
{{--                                </a></li>--}}
{{--                            <li><a href=achivement_details.html><img src={{asset('assets')}}/images/awards/awards02.png alt=image>--}}
{{--                                    <ul class=awards-info>--}}
{{--                                        <li>uefa 2014</li>--}}
{{--                                        <li>champion</li>--}}
{{--                                    </ul>--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="product bg-white">--}}
{{--            <div class=container>--}}
{{--                <div class=row><h2 class=heading>TOP PRODUCTS & <span>merchandise</span></h2>--}}

{{--                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis--}}
{{--                        consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?--}}
{{--                        Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>--}}
{{--                    <ul class=product_details>--}}
{{--                        <li><a href=#>--}}
{{--                                <div>--}}
{{--                                    <div class=product-img--}}
{{--                                         style="background:url({{asset('assets')}}/images/product/product01.jpg) center no-repeat"></div>--}}
{{--                                </div>--}}
{{--                                <ul class="oswald16 product_info">--}}
{{--                                    <li class=detailsContainer><span>soccer jersey</span> <span><i--}}
{{--                                                class="fa fa-user"></i>360</span></li>--}}
{{--                                    <li class=cartContainer><span>Add to cart</span> <span><i--}}
{{--                                                class="fa fa-shopping-cart"></i></span> <span class=price>$199</span></li>--}}
{{--                                </ul>--}}
{{--                            </a></li>--}}
{{--                        <li><a href=#>--}}
{{--                                <div>--}}
{{--                                    <div class=product-img--}}
{{--                                         style="background:url({{asset('assets')}}/images/product/product02.jpg) center no-repeat"></div>--}}
{{--                                </div>--}}
{{--                                <ul class="oswald16 product_info">--}}
{{--                                    <li class=detailsContainer><span>soccer jersey</span> <span><i--}}
{{--                                                class="fa fa-user"></i>360</span></li>--}}
{{--                                    <li class=cartContainer><span>Add to cart</span> <span><i--}}
{{--                                                class="fa fa-shopping-cart"></i></span> <span class=price>$199</span></li>--}}
{{--                                </ul>--}}
{{--                            </a></li>--}}
{{--                        <li><a href=#>--}}
{{--                                <div>--}}
{{--                                    <div class=product-img--}}
{{--                                         style="background:url({{asset('assets')}}/images/product/product03.jpg) center no-repeat"></div>--}}
{{--                                </div>--}}
{{--                                <ul class="oswald16 product_info">--}}
{{--                                    <li class=detailsContainer><span>soccer jersey</span> <span><i--}}
{{--                                                class="fa fa-user"></i>360</span></li>--}}
{{--                                    <li class=cartContainer><span>Add to cart</span> <span><i--}}
{{--                                                class="fa fa-shopping-cart"></i></span> <span class=price>$199</span></li>--}}
{{--                                </ul>--}}
{{--                            </a></li>--}}
{{--                        <li><a href=#>--}}
{{--                                <div>--}}
{{--                                    <div class=product-img--}}
{{--                                         style="background:url({{asset('assets')}}/images/product/product04.jpg) center no-repeat"></div>--}}
{{--                                </div>--}}
{{--                                <ul class="oswald16 product_info">--}}
{{--                                    <li class=detailsContainer><span>soccer jersey</span> <span><i--}}
{{--                                                class="fa fa-user"></i>360</span></li>--}}
{{--                                    <li class=cartContainer><span>Add to cart</span> <span><i--}}
{{--                                                class="fa fa-shopping-cart"></i></span> <span class=price>$199</span></li>--}}
{{--                                </ul>--}}
{{--                            </a></li>--}}
{{--                    </ul>--}}
{{--                    <div class=center><a href=# class="btn btn-red">view more</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const mainImage = document.querySelector('.main-image img');
            const prevButton = document.querySelector('.prev-button');
            const nextButton = document.querySelector('.next-button');

            let currentIndex = 0;

            function updateImage(index) {
                navItems.forEach(item => item.classList.remove('active'));
                navItems[index].classList.add('active');
                mainImage.src = navItems[index].dataset.imgSrc;
                currentIndex = index;
            }

            navItems.forEach((item, index) => {
                item.addEventListener('click', () => updateImage(index));
            });

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    updateImage(currentIndex - 1);
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentIndex < navItems.length - 1) {
                    updateImage(currentIndex + 1);
                }
            });
        });
    </script>
@endsection

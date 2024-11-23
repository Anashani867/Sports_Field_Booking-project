@extends('theme.master')
@section('hero-title')
    about <span>us</span>
@endsection
@section('about-active','active')

@section('content')


<section class="matchSchedule countryclub">
    <div class=container>
        <div class=row><h2 class="heading small">soccer <span>country club</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                Est.</p></div>
    </div>
</section>
<section class=players>
    <div class=container>
        <div class=row><h2 class=heading>board <span>members</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

            <div class="wrapplayer clearfix"><a class="prv prev-player"></a> <a class="nxt next-player"></a>
                <ul class="boardmember clearfix">
                    <li class=clearfix>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url({{asset('assets')}}/images/boardMember/boardMember01.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Sammie Stoddard</h6>

                                    <p class="uppercaseheading red">director</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia
                                        labore molestias, Doloribus, aspernatur.</p></div>
                                <div class="bg-black fig02"><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Velit repellat cum necessitatibus quas magni! Qui, modi possimus.</p>
                                </div>
                                <div class="bg-redcolor fig02"><p>BORN 14 April 1975, England</p></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url({{asset('assets')}}/images/boardMember/boardMember02.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Dominick Dumbleton</h6>

                                    <p class="uppercaseheading red">ceo</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia
                                        labore molestias, Doloribus, aspernatur.</p></div>
                                <div class="bg-black fig02"><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Velit repellat cum necessitatibus quas magni! Qui, modi possimus.</p>
                                </div>
                                <div class="bg-redcolor fig02"><p>BORN 14 April 1975, England</p></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url({{asset('assets')}}/images/boardMember/boardMember03.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Leland Lagos</h6>

                                    <p class="uppercaseheading red">ceo</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia
                                        labore molestias, Doloribus, aspernatur.</p></div>
                                <div class="bg-black fig02"><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Velit repellat cum necessitatibus quas magni! Qui, modi possimus.</p>
                                </div>
                                <div class="bg-redcolor fig02"><p>BORN 14 April 1975, England</p></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div>
                                <div class=fig01>
                                    <div class=memberimg
                                         style="background:url({{asset('assets')}}/images/boardMember/boardMember02.jpg) no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02"><h6 class=paragraph02>Kenton Kidd</h6>

                                    <p class="uppercaseheading red">ceo</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia
                                        labore molestias, Doloribus, aspernatur.</p></div>
                                <div class="bg-black fig02"><p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Velit repellat cum necessitatibus quas magni! Qui, modi possimus.</p>
                                </div>
                                <div class="bg-redcolor fig02"><p>BORN 14 April 1975, England</p></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class=club_history>
    <div class=container>
        <div class=row><h2 class=heading>club <span>history</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

            <div class="nav clubHistory-wrap clearfix">
                <ul class=historyMeter>
                    <li><a href=#><span>1987</span></a></li>
                    <li class=win><a href=#win01><span>1988</span></a></li>
                    <li><a href=#><span>1989</span></a></li>
                    <li><a href=#><span>1990</span></a></li>
                    <li class="win active"><a href=#win02><span>1991</span></a></li>
                    <li><a href=#><span>1991</span></a></li>
                    <li><a href=#><span>1995</span></a></li>
                    <li><a href=#><span>1997</span></a></li>
                    <li class=win><a href=#win03><span>2000</span></a></li>
                    <li><span>2005</span></li>
                    <li><span>2007</span></li>
                    <li><span>2009</span></li>
                    <li class=win><a href=#win04><span>2012</span></a></li>
                    <li><a href=#><span>2013</span></a></li>
                    <li><a href=#><span>2014</span></a></li>
                    <li class=win><a href=#win05><span>2015</span></a></li>
                </ul>
                <div class="tab-content historyVideoWrap clearfix">
                    <div role=tabpanel class="tab-pane clearfix" id=win01>
                        <div class=historyVideo>
                            <div class=historyvideoContainer>
                                <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class=historyContent><h4><span>fifa 1988,</span> uefa champions league</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum?</p>

                            <div class="blog-detailsfooter clubfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><p class=uppercaseheading>octomber 14
                                        ,<span class=red>2015</span></p></div>
                                <div class=blog-detailsfooter02><a href=# class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=# class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=# class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div role=tabpanel class="tab-pane active clearfix" id=win02>
                        <div class=historyVideo>
                            <div class=historyvideoContainer>
                                <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class=historyContent><h4><span>fifa 1991 ,</span> uefa champions league</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum?</p>

                            <div class="blog-detailsfooter clubfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><p class=uppercaseheading>octomber 14
                                        ,<span class=red>2015</span></p></div>
                                <div class=blog-detailsfooter02><a href=# class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=# class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=# class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div role=tabpanel class="tab-pane clearfix" id=win03>
                        <div class=historyVideo>
                            <div class=historyvideoContainer>
                                <iframe src=https://www.youtube.com/embed/F6U5-B3NUKA allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class=historyContent><h4><span>fifa 2000 ,</span> uefa champions league</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum?</p>

                            <div class="blog-detailsfooter clubfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><p class=uppercaseheading>octomber 14
                                        ,<span class=red>2015</span></p></div>
                                <div class=blog-detailsfooter02><a href=# class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=# class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=# class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div role=tabpanel class="tab-pane clearfix" id=win04>
                        <div class=historyVideo>
                            <div class=historyvideoContainer>
                                <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class=historyContent><h4><span>fifa 2012,</span> uefa champions league</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum?</p>

                            <div class="blog-detailsfooter clubfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><p class=uppercaseheading>octomber 14
                                        ,<span class=red>2015</span></p></div>
                                <div class=blog-detailsfooter02><a href=# class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=# class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=# class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div role=tabpanel class="tab-pane clearfix" id=win05>
                        <div class=historyVideo>
                            <div class=historyvideoContainer>
                                <iframe src=https://www.youtube.com/embed/rPEd-h8DdRI allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class=historyContent><h4><span>fifa 2015 ,</span> uefa champions league</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus
                                error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque
                                corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum?</p>

                            <div class="blog-detailsfooter clubfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><p class=uppercaseheading>octomber 14
                                        ,<span class=red>2015</span></p></div>
                                <div class=blog-detailsfooter02><a href=# class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=# class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=# class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="club_history achivementwrapper bg-white">
    <div class=container>
        <div class=row><h2 class=heading>our <span>achievements</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p>

            <div class=wrap-achive>
                <ul class=achievement>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards01.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde veniam rerum rem
                                voluptates reprehenderit, ab dicta eaque in? Molestiae maxime, sunt deleniti a
                                accusantium, qui iure perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ullam unde veniam rerum rem voluptates reprehenderit,
                                ab dicta eaque in? Molestiae maxime, sunt deleniti a accusantium, qui iure
                                perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ullam unde veniam rerum rem voluptates reprehenderit, ab dicta eaque in?
                                Molestiae maxime, sunt deleniti a accusantium, qui iure perspiciatis. Esse,
                                tempore?lorem.</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards02.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde veniam rerum rem
                                voluptates reprehenderit, ab dicta eaque in? Molestiae maxime, sunt deleniti a
                                accusantium, qui iure perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ullam unde veniam rerum rem voluptates reprehenderit,
                                ab dicta eaque in? Molestiae maxime, sunt deleniti a accusantium, qui iure
                                perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ullam unde veniam rerum rem voluptates reprehenderit, ab dicta eaque in?
                                Molestiae maxime, sunt deleniti a accusantium, qui iure perspiciatis. Esse,
                                tempore?lorem.</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class=achievement>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards03.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>The UEFA Champions League is a seasonal association football competition established
                                in 1955.[1] The UEFA Champions League is open to the league champions of all UEFA
                                (Union of European Football Associations) member associations (except Liechtenstein,
                                which has no league competition), as well as to the clubs finishing from second to
                                fourth position in the strongest leagues.[2] Prior to the 1992–93 season, the
                                tournament was named the European Cup.[1] Originally, only the champions of their
                                respective national league and the defending champion of the competition were
                                allowed to participate. However, this was changed in 1997 to allow the runners-up of
                                the stronger leagues to compete as well.[3] The defending champion of the
                                competition did not automatically qualify until the rules were changed in 2005 to
                                allow title holders Liverpool to enter the competition.</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards02.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde veniam rerum rem
                                voluptates reprehenderit, ab dicta eaque in? Molestiae maxime, sunt deleniti a
                                accusantium, qui iure perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ullam unde veniam rerum rem voluptates reprehenderit,
                                ab dicta eaque in? Molestiae maxime, sunt deleniti a accusantium, qui iure
                                perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ullam unde veniam rerum rem voluptates reprehenderit, ab dicta eaque in?
                                Molestiae maxime, sunt deleniti a accusantium, qui iure perspiciatis. Esse,
                                tempore?lorem.</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class=achievement>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards03.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde veniam rerum rem
                                voluptates reprehenderit, ab dicta eaque in? Molestiae maxime, sunt deleniti a
                                accusantium, qui iure perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ullam unde veniam rerum rem voluptates reprehenderit,
                                ab dicta eaque in? Molestiae maxime, sunt deleniti a accusantium, qui iure
                                perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ullam unde veniam rerum rem voluptates reprehenderit, ab dicta eaque in?
                                Molestiae maxime, sunt deleniti a accusantium, qui iure perspiciatis. Esse,
                                tempore?</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                    <li class=clearfix>
                        <div class=fig><img src={{asset('assets')}}/images/awards/awards02.png alt=image>

                            <div>WINNER 2007, UEFA Champions League</div>
                        </div>
                        <div class=figcontentachv><h5 class="headline01 red">winner 2007 , uefa champions
                                league</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde veniam rerum rem
                                voluptates reprehenderit, ab dicta eaque in? Molestiae maxime, sunt deleniti a
                                accusantium, qui iure perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ullam unde veniam rerum rem voluptates reprehenderit,
                                ab dicta eaque in? Molestiae maxime, sunt deleniti a accusantium, qui iure
                                perspiciatis. Esse, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Ullam unde veniam rerum rem voluptates reprehenderit, ab dicta eaque in?
                                Molestiae maxime, sunt deleniti a accusantium, qui iure perspiciatis. Esse,
                                tempore?lorem.</p>

                            <div class="blog-detailsfooter achvfooter clearfix">
                                <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                              class="social_link facebook"><i
                                            class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                            class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                            class="fa fa-behance"></i></a></div>
                                <div class=blog-detailsfooter02><p class=uppercaseheading>octomber 14 ,<span
                                            class=red>2015</span></p></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class=playerDetails02>
    <div class=container>
        <div class=row><h2 class=heading>our <span>player</span></h2>

            <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                consequuntur animi, commodi, voluptatibus labore aperiam fugit maxime quos optio architecto cum?
                Laborum nesciunt doloribus expedita atque error rem molestias, ducimus.</p></div>
        <div class="wrapper-container clearfix"><a class="prv prev"></a> <a class="nxt next"></a>
            <ul class=player02>
                <li>
                    <div class=player02fig>
                        <div style=background:url({{asset('assets')}}/images/player/player01.jpg) class="imgplayer bgimg"></div>
                        <div class="playersocial bg-black clearfix"><a href=# class=social_link><i
                                    class="fa fa-facebook"></i></a> <a href=# class=social_link><i
                                    class="fa fa-linkedin"></i></a> <a href=# class=social_link><i
                                    class="fa fa-twitter"></i></a> <a href=# class=social_link><i
                                    class="fa fa-behance"></i></a></div>
                    </div>
                    <div class=player02info>
                        <div class=clearfix>
                            <div class=player02info01><h6><span>name</span>Monroe Meek</h6><h6><span>position</span>striker
                                </h6><h6><span>age</span> (born 22 april,1987)</h6></div>
                            <div class=player02info02><img src={{asset('assets')}}/images/player/playerT_shirt01.png alt=image></div>
                        </div>
                        <h6 class=oswald16>imformation</h6>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dicta iure atque dolorem
                            voluptate quasi maxime, repellat aliquid eos. Beatae molestias itaque aspernatur quaerat
                            culpa laudantium ducimus est eveniet. Repudiandae!lorem.Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Nemo dicta iure atque dolorem voluptate quasi maxime,
                            repellat aliquid eos. Beatae molestias itaque aspernatur quaerat culpa laudantium
                            ducimus est eveniet. Repudiandae!lorem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dicta iure atque dolorem
                            voluptate quasi maxime, repellat aliquid eos. He made his debut for France in October
                            2011 and featured in four of Les Bleus' five games at the 2014 World Cup.</p><h6
                            class=oswald16>previous club</h6>
                        <ul class=clearfix>
                            <li>France international Mathieu Debuchy</li>
                            <li>18 in the Champions League.</li>
                            <li>Les Bleus' five games at the 2014</li>
                        </ul>
                        <a href=player_details.html>more</a></div>
                </li>
                <li>
                    <div class=player02fig>
                        <div style=background:url({{asset('assets')}}/images/player/player02.jpg) class="imgplayer bgimg"></div>
                        <div class="playersocial bg-black clearfix"><a href=# class=social_link><i
                                    class="fa fa-facebook"></i></a> <a href=# class=social_link><i
                                    class="fa fa-linkedin"></i></a> <a href=# class=social_link><i
                                    class="fa fa-twitter"></i></a> <a href=# class=social_link><i
                                    class="fa fa-behance"></i></a></div>
                    </div>
                    <div class=player02info>
                        <div class=clearfix>
                            <div class=player02info01><h6><span>name</span>Kenton Kidd</h6><h6><span>position</span>striker
                                </h6><h6><span>age</span> (born 22 april,1987)</h6></div>
                            <div class=player02info02><img src={{asset('assets')}}/images/player/playerT_shirt01.png alt=image></div>
                        </div>
                        <h6 class=oswald16>imformation</h6>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptates eius
                            explicabo itaque deleniti saepe adipisci alias fugiat nulla nihil, blanditiis, corrupti
                            facilis. Fugit, magnam! Sequi harum eos rerum corrupti.Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Ducimus quo voluptatem vel tenetur, doloremque perferendis
                            magni magnam expedita! Voluptatibus in similique eaque rerum, natus, vitae quam
                            repudiandae provident sed illum.</p>

                        <p>He helped the French side to a league and cup double in 2010/11 and was named in the
                            Ligue 1 Team of the Season the following year. He made his debut for France in October
                            2011 and featured in four of Les Bleus' five games at the 2014 World Cup.</p><h6
                            class=oswald16>previous club</h6>
                        <ul class=clearfix>
                            <li>France international Mathieu Debuchy</li>
                            <li>18 in the Champions League.</li>
                            <li>Les Bleus' five games at the 2014</li>
                        </ul>
                        <a href=player_details.html>more</a></div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sponsors bg-smallwhite">
    <div class=container>
        <div class=row><h2 class=heading>spon<span>sors</span></h2>
            <ul class="client clearfix">
                <li><a href="#"><img src={{asset('assets')}}/images/client/client01.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/client02.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/client03.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/client04.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/client02.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/client05.png alt=image></a></li>
            </ul>
        </div>
    </div>
</section>

@endsection()

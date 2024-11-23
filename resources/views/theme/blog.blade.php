@extends('theme.master')
@section('hero-title')
<span>blog</span>
@endsection
@section('blog-active','active')

@section('content')

    <section class="innerpage_all_wrap bg-white">
        <div class=container>
            <div class=row><h2 class=heading>this is our <span>blog page</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                    reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                    quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fugiat quisquam reprehenderit, blanditiis nam debitis libero facilis
                    illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                    asperiores quaerat .</p>

                <div class=innerWrapper>
                    <main class=contentinner>
                        <div class=blogDetails>
                            <div class=blogimg><a class="prv blog_prev"></a> <a class="nxt blog_next"></a>
                                <ul class=blog_slider>
                                    <li><img src={{asset('assets')}}/images/blog/blog01.jpg alt=image></li>
                                    <li><img src={{asset('assets')}}/images/blog/blog01.jpg alt=image></li>
                                </ul>
                            </div>
                            <div class=blog_info>
                                <div class=clearfix>
                                    <div class=headlineimgwrap01><img src={{asset('assets')}}/images/icons/chart.png alt=image></div>
                                    <div class=headlinewrap01><h4 class=headline02>the best <span
                                                class=red>moments</span> in the seasons</h4>

                                        <p class="paragraph02 uppercaseheading">october 27 ,<span class=red>2015</span>
                                        </p></div>
                                </div>
                                <p class=blog-content>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dignissimos, rerum ea odit rem soluta iure, animi deleniti, cupiditate quibusdam
                                    culpa ab eum. Error consequatur, pariatur tenetur distinctio cumque suscipit
                                    tempore.</p>

                                <div class="blog-detailsfooter clearfix">
                                    <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                                  class="social_link facebook"><i
                                                class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                                class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                                class="fa fa-behance"></i></a></div>
                                    <div class=blog-detailsfooter02><a href=blogDetails.html
                                                                       class="btn-small01 btn-red">view more</a></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class=blogDetails>
                            <div class=blogimg>
                                <iframe src=https://www.youtube.com/embed/cte51ZM3iZs allowfullscreen=""></iframe>
                            </div>
                            <div class=blog_info>
                                <div class=clearfix>
                                    <div class=headlineimgwrap01><img src={{asset('assets')}}/images/icons/video.png alt=image></div>
                                    <div class=headlinewrap01><h4 class=headline02>the best <span
                                                class=red>moments</span> in the seasons</h4>

                                        <p class="paragraph02 uppercaseheading">october 27 ,<span class=red>2015</span>
                                        </p></div>
                                </div>
                                <p class=blog-content>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dignissimos, rerum ea odit rem soluta iure, animi deleniti, cupiditate quibusdam
                                    culpa ab eum. Error consequatur, pariatur tenetur distinctio cumque suscipit
                                    tempore.</p>

                                <div class="blog-detailsfooter clearfix">
                                    <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                                  class="social_link facebook"><i
                                                class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                                class="fa fa-twitter"></i></a> <a href=https://www.behance.net/
                                                                              class="social_link behance"><i
                                                class="fa fa-behance"></i></a></div>
                                    <div class=blog-detailsfooter02><a href=blogDetails.html
                                                                       class="btn-small01 btn-red">view more</a></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class=blogDetails>
                            <div class=blogimg>
                                <iframe src=https://www.youtube.com/embed/cte51ZM3iZs allowfullscreen=""></iframe>
                            </div>
                            <div class=blog_info>
                                <div class=clearfix>
                                    <div class=headlineimgwrap01><img src={{asset('assets')}}/images/icons/video.png alt=image></div>
                                    <div class=headlinewrap01><h4 class=headline02>the best <span
                                                class=red>moments</span> in the seasons</h4>

                                        <p class="paragraph02 uppercaseheading">october 27 ,<span class=red>2015</span>
                                        </p></div>
                                </div>
                                <p class=blog-content>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Dignissimos, rerum ea odit rem soluta iure, animi deleniti, cupiditate quibusdam
                                    culpa ab eum. Error consequatur, pariatur tenetur distinctio cumque suscipit
                                    tempore.</p>

                                <div class="blog-detailsfooter clearfix">
                                    <div class="blog-detailsfooter01 clearfix"><a href=https://www.facebook.com/templatespoint.net
                                                                                  class="social_link facebook"><i
                                                class="fa fa-facebook"></i></a> <a href=https://twitter.com/
                                                                               class="social_link twitter"><i
                                                class="fa fa-twitter"></i></a> <a href=https://www.facebook.com/templatespoint.net
                                                                                  class="social_link behance"><i
                                                class="fa fa-behance"></i></a></div>
                                    <div class=blog-detailsfooter02><a href=blogDetails.html
                                                                       class="btn-small01 btn-red">view more</a></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <aside class="widgetinner clearfix">
                        <div class=row>
                            <div class=blog_widget><h4 class=oswald16>search</h4>

                                <div class=search_box><input type=text placeholder="Enter your keyword"></div>
                            </div>
                            <div class=blog_widget><h4 class=oswald16>blog catagories</h4>

                                <div class="body-catagories panel-group paragraph02" id=accordion>
                                    <div class="panel panel-default">
                                        <div class=panel-heading><h4 class=panel-title><a data-toggle=collapse
                                                                                          data-parent=#accordion
                                                                                          href=#collapseOne
                                                                                          class="collapsed paragraph02"
                                                                                          aria-expanded=false><i
                                                        class="fa fa-plus"></i> <i class="fa fa-minus"></i> general
                                                    questions</a></h4></div>
                                        <div id=collapseOne class="panel-collapse collapse" aria-expanded=false
                                             role=tabpanel style="height: 0px;">
                                            <ul class=inner-list-items>
                                                <li><a href=# class=paragraph02>Sub-category 01</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 02</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 03</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 04</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 05</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 06</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 07</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class=panel-heading><h4 class=panel-title><a data-toggle=collapse
                                                                                          data-parent=#accordion
                                                                                          href=#collapseTwo
                                                                                          class="collapsed paragraph02"
                                                                                          aria-expanded=false><i
                                                        class="fa fa-plus"></i> <i class="fa fa-minus"></i> licensing and
                                                    payement</a></h4></div>
                                        <div id=collapseTwo class="panel-collapse collapse" aria-expanded=false
                                             role=tabpanel style="height: 0px;">
                                            <ul class=inner-list-items>
                                                <li><a href=# class=paragraph02>Sub-category 01</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 02</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 03</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 04</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class=panel-heading><h4 class=panel-title><a data-toggle=collapse
                                                                                          data-parent=#accordion
                                                                                          href=#collapseThree
                                                                                          class="collapsed paragraph02"
                                                                                          aria-expanded=false><i
                                                        class="fa fa-plus"></i> <i class="fa fa-minus"></i>best matches</a></h4>
                                        </div>
                                        <div id=collapseThree class="panel-collapse collapse" aria-expanded=false
                                             role=tabpanel style="height: 0px;">
                                            <ul class=inner-list-items>
                                                <li><a href=# class=paragraph02>Sub-category 01</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 02</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 03</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 04</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class=panel-heading><h4 class=panel-title><a data-toggle=collapse
                                                                                          data-parent=#accordion
                                                                                          href=#collapseFour
                                                                                          class="collapsed paragraph02"
                                                                                          aria-expanded=false><i
                                                        class="fa fa-plus"></i><i class="fa fa-minus"></i>technical support</a>
                                            </h4></div>
                                        <div id=collapseFour class="panel-collapse collapse" aria-expanded=false
                                             role=tabpanel style="height: 0px;">
                                            <ul class=inner-list-items>
                                                <li><a href=# class=paragraph02>Sub-category 01</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 02</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 03</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 04</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class=panel-heading><h4 class=panel-title><a data-toggle=collapse
                                                                                          data-parent=#accordion
                                                                                          href=#collapseFive
                                                                                          class="collapsed paragraph02"
                                                                                          aria-expanded=false><i
                                                        class="fa fa-plus"></i> <i class="fa fa-minus"></i>cupons and promotion</a>
                                            </h4></div>
                                        <div id=collapseFive class="panel-collapse collapse" style="height: 0px;"
                                             role=tabpanel aria-expanded=false>
                                            <ul class=inner-list-items>
                                                <li><a href=# class=paragraph02>Sub-category 01</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 02</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 03</a></li>
                                                <li><a href=# class=paragraph02>Sub-category 04</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=blog_widget><h4 class=oswald16>follow us</h4>

                                <div class=blog_social><a href=# class=social_link><i class="fa fa-facebook"></i></a> <a
                                        href=# class=social_link><i class="fa fa-twitter"></i></a> <a href=#
                                                                                                      class=social_link><i
                                            class="fa fa-behance"></i></a> <a href=# class=social_link><i
                                            class="fa fa-vine"></i></a> <a href=# class=social_link><i
                                            class="fa fa-youtube"></i></a></div>
                            </div>
                            <div class=blog_widget><h4 class=oswald16>popular posts</h4>

                                <p class=red>@Lorem ipsum dolor sit amet</p>
                                <ul class=widget_commentDetails>
                                    <li><a href=# class=clearfix>
                                            <div class=comment-pic>
                                                <div class=columnpic><img src={{asset('assets')}}/images/widget/comment01.jpg alt=image></div>
                                            </div>
                                            <div class=commentinfo><p>Lorem ipsum dolor sit amet, conse ctetur .</p>

                                                <p class=red>@lorem ipsum</p></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div class=comment-pic>
                                                <div class=columnpic><img src={{asset('assets')}}/images/widget/comment02.jpg alt=image></div>
                                            </div>
                                            <div class=commentinfo><p>Lorem ipsum dolor sit amet, conse ctetur .</p>

                                                <p class=red>@lorem ipsum</p></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div class=comment-pic>
                                                <div class=columnpic><img src={{asset('assets')}}/images/widget/comment03.jpg alt=image></div>
                                            </div>
                                            <div class=commentinfo><p>Lorem ipsum dolor sit amet, conse ctetur .</p>

                                                <p class=red>@lorem ipsum</p></div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="blog_widget b_twitter"><h4 class=oswald16>twitter</h4>

                                <p class=red>@Showcase & Discover</p>

                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iste amet omnis
                                    molestiae "</p></div>
                            <div class="blog_widget b_twitter"><h4 class=oswald16>instagram</h4>

                                <p class=red>@experimental lettering project</p>
                                <ul class="galleryontent04 clearfix">
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG01.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG02.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG03.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG04.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG05.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG06.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG07.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG01.jpg) no-repeat center"></div>
                                        </a></li>
                                    <li><a href=# class=clearfix>
                                            <div style="background:url({{asset('assets')}}/images/widget/widgetG08.jpg) no-repeat center"></div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class=blog_widget><h4 class=oswald16>tag cloud</h4>
                                <ul class="cloud_tag clearfix">
                                    <li><a href=#>sports</a></li>
                                    <li><a href=#>creative</a></li>
                                    <li><a href=#>experience</a></li>
                                    <li><a href=#>development</a></li>
                                </ul>
                            </div>
                            <div class=blog_widget><h4 class=oswald16>subscribe</h4>

                                <p class="red italic01">follow my latest news</p>

                                <div class=mail_input>
                                    <form class=form_mailSubscribe data-parsley-validate=""><input type=email
                                                                                                   placeholder="your Email"
                                                                                                   name=email>
                                        <button class=mail_subscribe><i class="fa fa-envelope-o"></i></button>
                                        <div class=form-submessges></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection()

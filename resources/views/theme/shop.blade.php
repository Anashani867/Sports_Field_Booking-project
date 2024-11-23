@extends('theme.master')
@section('hero-title')
    our <span>shop</span>
@endsection
@section('shop-active','active')

@section('content')

    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>best soccer <span>accessories shop</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                    reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                    quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fugiat quisquam reprehenderit, blanditiis nam debitis libero facilis
                    illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                    asperiores quaerat .</p>

                <div class=innerWrapper>
                    <aside class="widgetinner clearfix">
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>short by</div>
                            <ul class="widgetinfo info01">
                                <li>clothing</li>
                                <li>accesories</li>
                                <li>bags</li>
                                <li>shoes</li>
                                <li>fashion</li>
                            </ul>
                            <a href=# class=blacklrnmore>learn more</a></div>
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>manufacturer</div>
                            <ul class="widgetinfo info01">
                                <li>clothing</li>
                                <li>accesories</li>
                                <li>bags</li>
                                <li>shoes</li>
                                <li>fashion</li>
                            </ul>
                            <a href=# class=blacklrnmore>learn more</a></div>
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>colour</div>
                            <div class=sizepic><a href=# class=bg-bluecolor></a> <a href=# class=bg-redcolor></a> <a
                                    href=# class=bg-green></a> <a href=# class=bg-lblack01></a></div>
                        </div>
                        <div class=widgetinfowrap>
                            <div class=bg-blackimg>natinal football teams</div>
                            <div class=sizepic><a href=#>XS</a> <a href=#>S</a> <a href=#>M</a> <a href=#>L</a></div>
                        </div>
                    </aside>
                    <aside class=contentinner>
                        <div class="bg-red shop_select clearfix">
                            <div class=select_shopping>
                                <form>
                                    <div class=form-group><label class=headline01>sort by</label><select
                                            class=form-control>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select></div>
                                    <div class=form-group><label class=headline01>per price</label><select
                                            class=form-control>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select></div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-wrap-slider clearfix">
                            <div class=shop_detais>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product01.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=1 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product02.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=2 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product03.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=3 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product04.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=shop-details.html class="btn-addcart addToCart"
                                                                   data-productid=4 data-productname="soccer club"
                                                                   data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class=shop_detais>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product01.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=# class="btn-addcart addToCart" data-productid=5
                                                                   data-productname="soccer club" data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product02.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=# class="btn-addcart addToCart" data-productid=6
                                                                   data-productname="soccer club" data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product03.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=# class="btn-addcart addToCart" data-productid=7
                                                                   data-productname="soccer club" data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                                <div class="shop01 clearfix">
                                    <div class=shop-img>
                                        <div class=bgimg style=background:url({{asset('assets')}}/images/product/product04.jpg)></div>
                                    </div>
                                    <div class=shop_info><h4 class=headline01><a href=product-details.html>soccer
                                                club</a></h4>

                                        <div class=star><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae impedit
                                            quod sit quam consequuntur aperiam voluptatem asperiores quae dicta
                                            recusandae omnis aut sed, blanditiis cumque quos unde sequi, molestias
                                            deleniti.</p>

                                        <div class=headline01>$199</div>
                                        <div class=addcart-wrap><a href=# class="btn-addcart addToCart" data-productid=8
                                                                   data-productname="soccer club" data-productprice=199
                                                                   data-productimage={{asset('assets')}}/images/product/product01.jpg>add to
                                                cart</a> <a href=# class=btn-fav>add to wish list</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

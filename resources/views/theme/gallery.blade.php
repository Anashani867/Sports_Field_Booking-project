@extends('theme.master')
@section('hero-title')
    <span>gallery</span>
@endsection
@section('gallery-active','active')
@section('content')
<div class=wrapper>

    <section class=innerpage_all_wrap>
        <div class=container>
            <ul class=galleryMenu id=menu>
                <li><a href=#menu class=selected>all item</a></li>
                <li><a href=#menu data-filter=.shoes class=selected>shoes</a></li>
                <li><a href=#menu data-filter=.player>players</a></li>
                <li><a href=#menu data-filter=.stadiums>stadiums</a></li>
            </ul>
            <div class=gallery>
                <div class=sk-cube-grid id=galleryLoader>
                    <div class="sk-cube sk-cube1"></div>
                    <div class="sk-cube sk-cube2"></div>
                    <div class="sk-cube sk-cube3"></div>
                    <div class="sk-cube sk-cube4"></div>
                    <div class="sk-cube sk-cube5"></div>
                    <div class="sk-cube sk-cube6"></div>
                    <div class="sk-cube sk-cube7"></div>
                    <div class="sk-cube sk-cube8"></div>
                    <div class="sk-cube sk-cube9"></div>
                </div>
                <div id=galleryWrapper class="clearfix magnificPopupParent">
                    <div class="item stadiums"><a href=images/gallery/masonry/small_01_l.jpg
                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_01.jpg alt=image></a></div>
                    <div class="item shoes"><a href={{asset('assets')}}/images/gallery/masonry/small_02_l.jpg
                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_02.jpg alt=image></a></div>
                    <div class="item gallery-item-width2 player"><a href={{asset('assets')}}/images/gallery/masonry/medium_01_l.jpg
                                                                    title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/medium_01.jpg alt=image></a></div>
                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_03_l.jpg
                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_03.jpg alt=image></a></div>
                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_04_l.jpg
                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_04.jpg alt=image></a></div>
                    <div class="item gallery-item-width3 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/large_01_l.jpg
                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/large_01.jpg alt=image></a></div>
                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_05_l.jpg
                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_05.jpg alt=image></a></div>
                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_06_l.jpg
                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_06.jpg alt=image></a></div>
                    <div class="item stadiums"><a href={{asset('assets')}}/images/gallery/masonry/small_07_l.jpg
                                                  title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_07.jpg alt=image></a></div>
                    <div class="item gallery-item-width2 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/medium_02_l.jpg
                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/medium_02.jpg alt=image></a></div>
                    <div class="item gallery-item-width2 stadiums"><a href={{asset('assets')}}/images/gallery/masonry/medium_03_l.jpg
                                                                      title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/medium_03.jpg alt=image></a></div>
                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_08_l.jpg
                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_08.jpg alt=image></a></div>
                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_09_l.jpg
                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_09.jpg alt=image></a></div>
                    <div class="item player"><a href={{asset('assets')}}/images/gallery/masonry/small_10_l.jpg
                                                title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_10.jpg alt=image></a></div>
                    <div class="item shoes"><a href={{asset('assets')}}/images/gallery/masonry/small_11_l.jpg
                                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!"><img
                                src={{asset('assets')}}/images/gallery/masonry/small_11.jpg alt=image></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection

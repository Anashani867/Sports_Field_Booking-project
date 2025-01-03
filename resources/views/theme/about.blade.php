@extends('theme.master')
@section('hero-title')
    about <span>us</span>
@endsection
@section('about-active','active')

@section('content')


    <section class="matchSchedule countryclub">
        <div class="container">
            <div class="row">
                <h2 class="heading small">Book Your <span>Soccer Field</span> at the Country Club</h2>

                <p class="headParagraph">
                    Welcome to the sports field booking platform! You can now easily browse available fields and book the one that suits your needs.
                    If you own a sports field, you can add it to the platform to reach a wider audience and increase your bookings.
                    Our goal is to simplify access to sports fields and enhance the booking experience for everyone!
                </p>
            </div>
        </div>
    </section>





















    <section class="players">
        <div class="container">
            <div class="row">
                <h2 class="heading">Board <span>Members</span></h2>

                <p class="headParagraph">We are a talented team dedicated to delivering the best tech solutions with expertise and skill. Meet some of our team members here.</p>

                <div class="wrapplayer">
                    <ul class="boardmember">
                        <li>
                            <div class="player-card">
                                <div class="fig01">
                                    <div class="memberimg"
                                         style="background:url('{{asset('assets')}}/images/boardMember/anas.jpg') no-repeat top center"></div>
                                </div>
                                <div class="bg-black01 fig02">
                                    <h6 class="paragraph02"> Anas Hassan </h6>
                                    <p class="uppercaseheading red">Full Stack Developer</p>
                                    <p>I am  Anas Hassan, a skilled web developer with expertise in HTML, CSS, JavaScript, PHP, and Laravel, always striving to enhance user experiences.</p>
                                </div>
                                <div class="bg-black fig02">
                                    <p>I have worked on diverse projects, including interactive UIs and complete systems using modern web technologies.</p>
                                </div>

                                <div class="bg-redcolor fig02">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/in/anas-hassan-se/" target="_blank">LinkedIn</a></li>
                                        <li><a href="https://github.com/Anashani867" target="_blank">GitHub</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




<section class="sponsors bg-smallwhite">
    <div class=container>
        <div class=row><h2 class=heading>spon<span>sors</span></h2>
            <ul class="client clearfix">
                <li><a href="#"><img src={{asset('assets')}}/images/client/Orange_logo.svg.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/PSUT_Logo.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/amideast_logo.png alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/modee_logo.jpg alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/logo_simplon.webp alt=image></a></li>
                <li><a href="#"><img src={{asset('assets')}}/images/client/DigiSkills_Jordan.jpg alt=image></a></li>
            </ul>
        </div>
    </div>
</section>

@endsection()

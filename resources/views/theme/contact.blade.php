@extends('theme.master')
@section('hero-title')
    contact <span>us</span>
@endsection
@section('contact-active','active')
@section('content')


    <section class=innerpage_all_wrap>
        <div class=container>
            <div class=row><h2 class=heading>get in <span>touch</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                    reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                    quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Fugiat quisquam reprehenderit, blanditiis nam debitis libero facilis
                    illum repudiandae eveniet voluptatibus quibusdam illo ea nisi ipsa accusantium nobis animi
                    asperiores quaerat .</p>

                <div class=innerWrapper>
                    <ul class="contact_icon clearfix">
                        <li><a href=tel:80052608885263><i class="fa fa-phone"></i> <span>+1 800-256-9876</span></a></li>
                        <li><a href=mailto:mail@yoursite.com><i class="fa fa-envelope-o"></i>
                                <span>info@soccerclub.com</span></a></li>
                        <li><a href=#><i class="fa fa-map-marker"></i> <span>321/1 bakersssstreet,Newwork</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="map_wrapper clearfix">
        <div id=map-section></div>
        <div class=container>
            <div class=row>
                <div class=contact_form><h2 class=heading>contact us <span>by form</span></h2>

                    <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quisquam
                        reprehenderit, blanditiis nam debitis libero facilis illum repudiandae eveniet voluptatibus
                        quibusdam illo ea nisi ipsa accusantium nobis animi asperiores quaerat ,Lorem ipsum dolor sit
                        amet .</p>


                    <form data-parsley-validate="" name=contact class="formcontact clearfix" action="{{ route('theme.contact.store') }}" method="POST">




                        @if(session('success'))
                            <div style="color: red">
                                {{session('success')}}
                            </div>
                        @endif

                        @csrf
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required
                                   data-parsley-required-message="Please insert Name" value="{{ old('name') }}">
                            @error('name')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone" required
                                   data-parsley-required-message="Please insert Phone No" value="{{ old('phone') }}">
                            @error('phone_number')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required
                                   data-parsley-required-message="Please insert Subject" value="{{ old('subject') }}">
                            @error('subject')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required
                                   data-parsley-required-message="Please insert Email" value="{{ old('email') }}">
                            @error('email')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=form-group1>

                            <textarea class="form-control textas" name=message placeholder=Message
                                                         required="" data-parsley-minlength=20
                                                         data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
                                                         data-parsley-validation-threshold=10
                                                         data-parsley-maxlength=100>{{old('message')}}</textarea>

                            @error('message')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <button type=submit class="btn btn-red" id=send>send Us</button>
                        <div class=form-message></div>
                    </form>




                </div>
            </div>
        </div>
    </section>

@endsection()

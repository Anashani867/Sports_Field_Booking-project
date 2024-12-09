@extends('theme.master')

@section('hero-title')
    <span>Field Details</span>
@endsection

@section('content')

    <div class="wrapper">
        <section class="innerpage_all_wrap">
            <div class="container">
                <div class="row">
                    <!-- صورة الملعب -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="figure">
                            <div class="figure-01">
                                <img src="{{ asset('assets/images/club-history/club_history01.jpg') }}" alt="Field Image" style="width: 100%; height: auto; border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- تفاصيل الملعب -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="content-01">
                            <h6 class="field-title">Field Name: <span class="field-name">{{ $field->name }}</span></h6>
                            <p class="describtion">
                                <strong>Location:</strong> {{ $field->location }}<br>
                                <strong>Availability:</strong> {{ $field->availability ? 'Available' : 'Not Available' }}<br>
                                <strong>Price Per Hour:</strong> ${{ $field->price }}
                            </p>
                            <p>{{ $field->description }}</p>
                        </div>

                        <!-- عرض رسالة النجاح -->
                        @if (session('success'))
                            <div style="color: green; font-weight: bold; margin-top: 20px;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- زر الحجز -->
                        <div class="news_date clearfix">
                            <form action="{{ route('bookTickets') }}" method="POST">
                                @csrf
                                <input type="hidden" name="field_id" value="{{ $field->id }}">

                                <!-- تحديد التاريخ -->
                                <div style="margin-top: 20px;">
                                    <label for="booking-date" style="font-size: 1rem; font-weight: bold; color: #333;">Select Date:</label>
                                    <input type="date" id="booking-date" name="booking_date" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                                </div>

                                <!-- تحديد وقت البداية -->
                                <div style="margin-top: 20px;">
                                    <label for="start-time" style="font-size: 1rem; font-weight: bold; color: #333;">Start Time:</label>
                                    <input type="time" id="start-time" name="start_time" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                                </div>

                                <!-- تحديد وقت النهاية -->
                                <div style="margin-top: 20px;">
                                    <label for="end-time" style="font-size: 1rem; font-weight: bold; color: #333;">End Time:</label>
                                    <input type="time" id="end-time" name="end_time" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                                </div>

                                <!-- زر الإرسال -->
                                <button type="submit" class="btn btn-primary" style="margin-top: 20px; background-color: #b81e20; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

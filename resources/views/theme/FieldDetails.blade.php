{{--@extends('theme.master')--}}

{{--@section('hero-title')--}}
{{--    <span>Field Details</span>--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <div class="wrapper">--}}
{{--        <section class="innerpage_all_wrap">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <!-- صورة الملعب -->--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                        <div class="figure">--}}
{{--                            <div class="figure-01">--}}
{{--                                <img src="{{ asset('storage/' . $field->image) }}" alt="Field Image" style="width: 100%; height: auto; border-radius: 10px;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- تفاصيل الملعب -->--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                        <div class="content-01">--}}
{{--                            <h6 class="field-title">Field Name: <span class="field-name">{{ $field->field_name }}</span></h6>--}}
{{--                            <p class="describtion">--}}
{{--                                <strong>Location:</strong> {{ $field->location }}<br>--}}
{{--                                <strong>Location:</strong> {{ $field->latitude }}, {{ $field->longitude }}<br>--}}
{{--                                <strong>Availability:</strong> {{ $field->availability ? 'Available' : 'Not Available' }}<br>--}}
{{--                                <strong>Price Per Hour:</strong> ${{ $field->price }}--}}
{{--                            </p>--}}
{{--                            <p>{{ $field->description }}</p>--}}
{{--                        </div>--}}

{{--                        <!-- عرض رسالة النجاح -->--}}
{{--                        @if (session('success'))--}}
{{--                            <div style="color: green; font-weight: bold; margin-top: 20px;">--}}
{{--                                {{ session('success') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- زر الحجز -->--}}
{{--                        <div class="news_date clearfix">--}}
{{--                            <form action="{{ route('bookTickets') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="field_id" value="{{ $field->id }}">--}}

{{--                                <!-- تحديد التاريخ -->--}}
{{--                                <div style="margin-top: 20px;">--}}
{{--                                    <label for="booking-date" style="font-size: 1rem; font-weight: bold; color: #333;">Select Date:</label>--}}
{{--                                    <input type="date" id="booking-date" name="booking_date" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>--}}
{{--                                </div>--}}

{{--                                <!-- تحديد وقت البداية -->--}}
{{--                                <div style="margin-top: 20px;">--}}
{{--                                    <label for="start-time" style="font-size: 1rem; font-weight: bold; color: #333;">Start Time:</label>--}}
{{--                                    <input type="time" id="start-time" name="start_time" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>--}}
{{--                                </div>--}}

{{--                                <!-- تحديد وقت النهاية -->--}}
{{--                                <div style="margin-top: 20px;">--}}
{{--                                    <label for="end-time" style="font-size: 1rem; font-weight: bold; color: #333;">End Time:</label>--}}
{{--                                    <input type="time" id="end-time" name="end_time" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ddd; border-radius: 5px;" required>--}}
{{--                                </div>--}}

{{--                                <!-- زر الإرسال -->--}}
{{--                                <button type="submit" class="btn btn-primary" style="margin-top: 20px; background-color: #b81e20; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Book Now</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('theme.master')

@section('hero-title')
    <span>Field Details</span>
@endsection

@section('content')

    <style>
        /* Style the modal (hidden by default) */
        /* Modal background */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.7); /* Black with opacity */
        }

        /* Modal content */
        .modal-content {
            background-color: #333; /* Dark background for the modal */
            color: white; /* White text */
            margin: 10% auto; /* Centered */
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }

        /* Close button */
        .close {
            color: #f1f1f1;
            font-size: 30px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 25px;
            cursor: pointer;
        }

        /* Heading */
        h2 {
            color: #FF5C5C; /* Red color for heading */
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Input groups */
        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #222; /* Dark background for inputs */
            color: white;
        }

        .input-group input:focus {
            outline: none;
            border-color: #FF5C5C; /* Red border on focus */
        }

        /* Button group */
        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .confirm-btn {
            background-color: #FF5C5C; /* Red background */
            color: white;
        }

        .cancel-btn {
            background-color: #444; /* Dark grey background */
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }

        /* تنسيق الـ Popup */
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .popup-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close-btn {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            right: 10px;
            top: 5px;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

    <div class="wrapper">
        <section class="innerpage_all_wrap">
            <div class="container">
                <div class="row">
                    <!-- صورة الملعب -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="figure">
                            <div class="figure-01">
                                <img src="{{ asset('storage/' . $field->image) }}" alt="Field Image" style="width: 100%; height: auto; border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- تفاصيل الملعب -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="content-01">
                            <h6 class="field-title">Field Name: <span class="field-name">{{ $field->field_name }}</span></h6>
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <!-- مكان وضع الـ Popup -->
                        <div id="errorPopup" class="popup" style="display: none;">
                            <div class="popup-content">
                                <span class="close-btn" onclick="closePopup()">&times;</span>
                                <p>The amount field is required.</p>
                            </div>
                        </div>
                        @if ($errors->has('amount'))
                            <script>
                                showPopup();  // استدعاء دالة عرض الـ Popup
                            </script>
                        @endif


                                                <span class="capitalize01">
                            @if ($field->latitude && $field->longitude)
                                Latitude: {{ $field->latitude }}, Longitude: {{ $field->longitude }}
                            @else
                                Latitude and Longitude not available.
                            @endif
                        </span>

                        <!-- زر الحجز -->
                        <div class="news_date clearfix">
                            <form action="{{ route('bookAndPay') }}" method="POST" style="background-color: #f9f9f9; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                @csrf
                                <input type="hidden" name="field_id" value="{{ $field->id }}">

                                <!-- Select Date -->
                                <div style="margin-bottom: 20px; position: relative;">
                                    <i class="fa fa-calendar" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    <label for="booking-date" style="font-size: 1.1rem; font-weight: bold; color: #555;">Select Date:</label>
                                    <select id="booking-date" name="booking_date" style="padding-left: 30px; width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;" required onchange="updateAvailableTimes()">
                                        <option value="">Select an available date</option>
                                        @foreach($availableDates as $date)
                                            <option value="{{ $date }}">{{ $date }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select Start Time -->
                                <div style="margin-bottom: 20px; position: relative;">
                                    <i class="fa fa-clock" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    <label for="start-time" style="font-size: 1.1rem; font-weight: bold; color: #555;">Start Time:</label>
                                    <select name="start_date_time" id="start-time" style="padding-left: 30px; width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;" required>
                                        <option value="">Select a start time</option>
                                    </select>
                                </div>

                                <!-- Select End Time -->
                                <div style="margin-bottom: 20px; position: relative;">
                                    <i class="fa fa-clock" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    <label for="end-time" style="font-size: 1.1rem; font-weight: bold; color: #555;">End Time:</label>
                                    <select name="end_date_time" id="end-time" style="padding-left: 30px; width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;" required>
                                        <option value="">Select an end time</option>
                                    </select>
                                </div>

                                <!-- Payment Method -->
                                <div style="margin-bottom: 20px; position: relative;">
                                    <i class="fa fa-credit-card" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    <label for="payment-method" style="font-size: 1.1rem; font-weight: bold; color: #555;">Payment Method:</label>
                                    <select name="payment_method" id="payment-method" style="padding-left: 30px; width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;" required>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>

                                <div style="margin-bottom: 20px;">
                                    <label for="amount" style="font-size: 1.1rem; font-weight: bold; color: #555;">Amount:</label>
                                    <input type="text" name="amount" value="{{ $field->price }}" readonly style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px;">
                                </div>



                                <!-- Booking Summary -->
                                <div id="summary" style="margin-top: 20px; padding: 10px; background-color: #f2f2f2; border-radius: 5px; display: none;">
                                    <strong>Booking Summary:</strong>
                                    <p>Date: <span id="summary-date"></span></p>
                                    <p>Start Time: <span id="summary-start"></span></p>
                                    <p>End Time: <span id="summary-end"></span></p>
                                    <p>Total Amount: <span id="summary-amount">{{ $field->price }}</span></p>
                                </div>

                                <!-- Submit Button -->
                                <div style="margin-top: 10px;">
                                    <button type="button" onclick="openModal()" style="background-color: #4CAF50; color: white; font-size: 1rem; font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">Confirm Booking</button>

                                </div>

                                <!-- Payment Confirmation Modal -->
                                <!-- Payment Confirmation Modal -->
                                <div id="paymentModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal()">&times;</span>
                                        <h2>Confirm Your Booking</h2>
                                        <p><strong>Date:</strong> <span id="modal-booking-date"></span></p>
                                        <p><strong>Start Time:</strong> <span id="modal-start-time"></span></p>
                                        <p><strong>End Time:</strong> <span id="modal-end-time"></span></p>

                                        <p><strong>Field:</strong> <span id="modal-field-name"></span></p>

                                        <!-- Payment Details Section -->
                                        <form id="paymentForm" action="https://yourwebsite.com/payment" method="POST" autocomplete="on">
                                            @csrf

                                            <div class="input-group">
                                                <label for="card-number">Card Number:</label>
                                                <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required autocomplete="cc-number">
                                            </div>
                                            <div class="input-group">
                                                <label for="expiry-date">Expiry Date:</label>
                                                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required autocomplete="cc-exp">
                                            </div>
                                            <div class="input-group">
                                                <label for="cvv">CVV:</label>
                                                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required autocomplete="cc-csc">
                                            </div>
                                            <div class="button-group">
                                                <button type="submit" class="confirm-btn">Confirm Payment</button>
                                                <button type="button" onclick="closeModal()" class="cancel-btn">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>


                                <!-- زر الحجز الذي يفتح النافذة المنبثقة عند الضغط عليه -->




                                <!-- Loading Indicator -->
                                <div id="loading" style="display: none; text-align: center; margin-top: 20px;">
                                    <img src="loading.gif" alt="Loading..." style="width: 50px;">
                                    <p>Please wait while we process your booking...</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

<script>
    // تمرير البيانات من الخادم إلى JavaScript
    const availableTimesByDay = @json($availableTimesByDay); // تمرير الأوقات المتاحة حسب اليوم
    const reservedTimesByDay = @json($reservedTimesByDay); // تمرير الأوقات المحجوزة حسب اليوم

    // دالة لتحديث الأوقات المتاحة
    function updateAvailableTimes() {
        const selectedDate = document.getElementById('booking-date').value;
        const today = new Date().toISOString().split('T')[0];  // الحصول على التاريخ الحالي بتنسيق YYYY-MM-DD
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);  // اليوم التالي
        const tomorrowDate = tomorrow.toISOString().split('T')[0];

        if (!selectedDate) {
            // إذا لم يتم تحديد تاريخ، إعادة تعيين القوائم المنسدلة
            document.getElementById('start-time').innerHTML = '<option value="">Select a start time</option>';
            document.getElementById('end-time').innerHTML = '<option value="">Select an end time</option>';
            return;
        }

        const availableTimes = availableTimesByDay[selectedDate] || [];
        const reservedTimes = reservedTimesByDay[selectedDate] || [];

        const startTimeSelect = document.getElementById('start-time');
        const endTimeSelect = document.getElementById('end-time');

        // إعادة تعيين الخيارات
        startTimeSelect.innerHTML = '<option value="">Select a start time</option>';
        endTimeSelect.innerHTML = '<option value="">Select an end time</option>';

        // إذا لم تكن هناك أوقات متاحة، عرض رسالة مناسبة
        if (availableTimes.length === 0) {
            startTimeSelect.innerHTML = '<option value="">No available times</option>';
            endTimeSelect.innerHTML = '<option value="">No available times</option>';
            return;
        }

        // ترتيب الأوقات (إذا كانت غير مرتبة)
        availableTimes.sort((a, b) => {
            const [hourA, minuteA] = a.split(':').map(Number);
            const [hourB, minuteB] = b.split(':').map(Number);
            return hourA - hourB || minuteA - minuteB;
        });

        // إضافة الخيارات المتاحة فقط
        availableTimes.forEach(time => {
            if (!reservedTimes.includes(time)) {
                const startOption = document.createElement('option');
                startOption.value = time;
                startOption.textContent = time;
                startTimeSelect.appendChild(startOption);

                const endOption = document.createElement('option');
                endOption.value = time;
                endOption.textContent = time;
                endTimeSelect.appendChild(endOption);
            }
        });

        // إذا كان اليوم التالي محجوز بالكامل، يجب أن يظهر ولكن مع أوقات غير متاحة
        if (selectedDate === tomorrowDate) {
            const tomorrowTimes = availableTimesByDay[tomorrowDate] || [];
            if (tomorrowTimes.length === 0) {
                startTimeSelect.innerHTML = '<option value="">No available times</option>';
                endTimeSelect.innerHTML = '<option value="">No available times</option>';
            }
        }
    }

    // إضافة حدث لتحديث الأوقات عند تغيير التاريخ
    document.getElementById('booking-date').addEventListener('change', updateAvailableTimes);

    // إضافة حدث لتحديث أوقات النهاية بناءً على وقت البداية المحدد
    document.getElementById('start-time').addEventListener('change', function() {
        const selectedStartTime = this.value;
        const endTimeSelect = document.getElementById('end-time');

        const availableTimes = availableTimesByDay[document.getElementById('booking-date').value] || [];
        const reservedTimes = reservedTimesByDay[document.getElementById('booking-date').value] || [];

        // إعادة تعيين الخيارات
        endTimeSelect.innerHTML = '<option value="">Select an end time</option>';

        // إضافة الخيارات بعد وقت البداية فقط
        availableTimes.forEach(time => {
            if (time > selectedStartTime && !reservedTimes.includes(time)) {
                const option = document.createElement('option');
                option.value = time;
                option.textContent = time;
                endTimeSelect.appendChild(option);
            }
        });
    });

    // تحديث الأوقات عند تحميل الصفحة
    window.onload = function() {
        updateAvailableTimes();
    };


    // Open the confirmation modal
    // وظيفة لفتح النافذة المنبثقة (Modal)
    function openModal() {
        document.getElementById('paymentModal').style.display = "block";
        // تعيين البيانات داخل النافذة المنبثقة
        document.getElementById('modal-booking-date').textContent = document.getElementById('booking-date').value;
        document.getElementById('modal-start-time').textContent = document.getElementById('start-time').value;
        document.getElementById('modal-end-time').textContent = document.getElementById('end-time').value;
        document.getElementById('modal-field-name').textContent = document.querySelector('.field-name').textContent;
    }

    // وظيفة لإغلاق النافذة المنبثقة
    function closeModal() {
        document.getElementById('paymentModal').style.display = "none";
    }

    // تعديل الزر لفتح النافذة المنبثقة
    document.querySelector('form').onsubmit = function(event) {
        event.preventDefault(); // منع إرسال النموذج بشكل افتراضي
        openModal(); // فتح النافذة المنبثقة
    };

    document.getElementById('end-time').addEventListener('change', function() {
        const pricePerHour = {{ $field->price }}; // سعر الساعة من الخادم
        const selectedStartTime = document.getElementById('start-time').value;
        const selectedEndTime = this.value;
        const totalAmountInput = document.getElementById('total-amount');

        if (selectedStartTime && selectedEndTime) {
            const [startHour, startMinute] = selectedStartTime.split(':').map(Number);
            const [endHour, endMinute] = selectedEndTime.split(':').map(Number);

            // حساب الفرق بالساعات
            const durationInHours = (endHour + endMinute / 60) - (startHour + startMinute / 60);

            if (durationInHours > 0) {
                // تحديث السعر الإجمالي
                const totalAmount = durationInHours * pricePerHour;
                totalAmountInput.value = totalAmount.toFixed(2); // تحديد قيمته برقم عشري واحد
            } else {
                // إعادة تعيين المبلغ في حال كان الإدخال غير صحيح
                totalAmountInput.value = pricePerHour.toFixed(2);
            }
        } else {
            totalAmountInput.value = pricePerHour.toFixed(2); // قيمة افتراضية
        }
    });

    // عرض الـ Popup
    function showPopup() {
        document.getElementById('errorPopup').style.display = 'block';
    }

    // إغلاق الـ Popup عند الضغط على زر الإغلاق
    function closePopup() {
        document.getElementById('errorPopup').style.display = 'none';
    }

    // عند حدوث خطأ في النموذج
    if (validationFails) {
        showPopup();  // عرض الـ Popup عند حدوث خطأ
    }

</script>







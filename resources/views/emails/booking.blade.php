<html>
<body>
<h1>Booking Confirmation</h1>
<p>Thank you for your booking!</p>
<p>Booking Details:</p>
<ul>
    <li>Booking ID: {{ $booking->id }}</li>
    <li>Booking Date: {{ $booking->created_at }}</li>
    <li>Customer Name: {{ $booking->user->name }}</li>
    <!-- أضف المزيد من التفاصيل حسب الحاجة -->
</ul>
</body>
</html>

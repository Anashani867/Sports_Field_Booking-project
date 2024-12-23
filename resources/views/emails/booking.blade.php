<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            padding: 8px 0;
            font-size: 1.1em;
        }
        .details-title {
            font-weight: bold;
            color: #555;
        }
        .details {
            background-color: #f9f9f9;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Booking Confirmation</h1>
    <p>Thank you for your booking! Your reservation is confirmed.</p>
    <div class="details">
        <p class="details-title">Booking Details:</p>
        <ul>
            <li><strong>Booking ID:</strong> {{ $booking->id }}</li>
            <li><strong>Booking Date:</strong> {{ $booking->created_at }}</li>
            <li><strong>Customer Name:</strong> {{ $booking->user->name }}</li>
            <li><strong>Email:</strong> {{ $booking->user->email }}</li>
            <li><strong>Phone Number:</strong> {{ $booking->user->phone }}</li>
            <li><strong>Booking Status:</strong> {{ $booking->status }}</li>
            <li><strong>Total Amount:</strong> {{ $booking->total_amount }}</li>
            <li><strong>Check-in Date:</strong> {{ $booking->check_in }}</li>
            <li><strong>Check-out Date:</strong> {{ $booking->check_out }}</li>
            <!-- Add more details as needed -->
        </ul>
    </div>
</div>
</body>
</html>

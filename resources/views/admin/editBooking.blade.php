<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        width: 250px;
        position: fixed;
        height: 100vh;
        background: #1a1a2e;
        color: white;
        padding: 15px 10px;
        overflow-y: auto;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 22px;
        color: #ff9f43;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 15px 0;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .sidebar ul li a i {
        margin-right: 10px;
    }

    .sidebar ul li a:hover {
        background: #4e4e50;
    }

    .main {
        margin-left: 260px;
        padding: 20px;
    }

    .navbar {
        background-color: #ffffff;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 10px;
        margin-top: 20px;
    }

    .card-header {
        background-color: #007bff;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 20px;
        background-color: #ffffff;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .form-select {
        border-radius: 5px;
        padding: 10px;
        font-size: 14px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>
<body>
@include('admin.partials.nav')

<div class="main">
    <nav class="navbar navbar-light bg-light">
        <h4>Edit Booking</h4>
    </nav>

    <div class="form-container">
        <div class="card">
            <div class="card-header">
                <h5>Edit Booking</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.Booking.update', $booking->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Customer Name (Read-only) -->
                    <div class="mb-3">
                        <label for="customer_name" class="form-label">Customer Name</label>
                        <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $booking->name }}" readonly>
                    </div>

                    <!-- Date and Time -->
                    <div class="mb-3">
                        <label for="date_time" class="form-label">Date and Time</label>
                        <input type="datetime-local" name="date_time" id="date_time" class="form-control" value="{{ \Carbon\Carbon::parse($booking->date_time)->format('Y-m-d\TH:i') }}" required>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>

                    <!-- Amount -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" value="{{ $booking->amount }}" required min="0" step="0.10">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.manageBookings') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
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

        .sidebar ul li.active a {
            background: #ff9f43;
        }
        .main {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #f8f9fa;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h4 {
            margin: 0;
        }
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .stats-card {
            display: flex;
            align-items: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
        .stats-icon {
            border-radius: 50%;
            padding: 15px;
            color: white;
            margin-right: 15px;
        }
        .stats-text h4 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .stats-text p {
            margin: 0;
            font-size: 16px;
            color: #777;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background: #f8f9fa;
        }
        table tr:hover {
            background: #f1f1f1;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: gray;
        }

        .badge {
            font-size: 14px;
        }

        /* Custom filter section style */

        .filter-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .filter-section .form-group {
            margin-bottom: 20px;
        }

        .filter-section input, .filter-section select {
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .filter-section button {
            border-radius: 5px;
            padding: 10px 20px;
            background-color: #ff9f43;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .filter-section button:hover {
            background-color: #e6892f;
        }

        /* Styling for the select element */
        .form-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f1f1f1;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            color: #333;
            width: 100%;
            font-size: 16px;
        }

        .form-select:focus {
            border-color: #ff9f43;
            outline: none;
            box-shadow: 0 0 5px rgba(255, 159, 67, 0.5);
        }

        .form-select option {
            padding: 10px;
        }
        .btn {
            padding: 10px 15px;
            color: white;
            background: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #0056b3;
        }
        .btn-danger {
            background: #dc3545;
        }
        .btn-danger:hover {
            background: #a71d2a;
        }
    </style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<!-- Main Content -->
<div class="main">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Manage Bookings</h4>
        <div class="d-flex align-items-center">
            <div class="profile-icon" style="width: 40px; height: 40px; border-radius: 50%; background: url('path/to/user-avatar.jpg') no-repeat center center; background-size: cover; border: 2px solid #007bff;"></div>
            <div class="user-name ms-3">
                <p class="m-0" style="font-weight: 600;"><?php echo e(Auth::user()->name); ?></p>
            </div>
            <div class="dropdown ms-3">
                <!-- Profile Edit Dropdown -->
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i> <!-- Icon for dropdown menu -->
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">  profile</a></li>
                    <li>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="logout-form">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item"> log out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Stats Section -->
    <div class="stats-section grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
        <!-- Total Bookings -->
        <div class="stats-card">
            <div class="stats-icon" style="background: #007bff;">📅</div>
            <div class="stats-text">
                <h4>{{ $totalBookings }}</h4>
                <p>Total Bookings</p>
            </div>
        </div>

        <!-- Confirmed Bookings -->
        <div class="stats-card">
            <div class="stats-icon" style="background: #28a745;">✔️</div>
            <div class="stats-text">
                <h4>{{ $confirmedBookings }}</h4>
                <p>Confirmed</p>
            </div>
        </div>

        <!-- Pending Bookings -->
        <div class="stats-card">
            <div class="stats-icon" style="background: #ffc107;">⏳</div>
            <div class="stats-text">
                <h4>{{ $pendingBookings }}</h4>
                <p>Pending</p>
            </div>
        </div>

        <!-- Cancelled Bookings -->
        <div class="stats-card">
            <div class="stats-icon" style="background: #dc3545;">❌</div>
            <div class="stats-text">
                <h4>{{ $cancelledBookings }}</h4>
                <p>Cancelled</p>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="table-section">
        <h3>Bookings List</h3>
        <table>
            <thead>
            <tr>
                <th>Booking ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>#{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ date('M d, Y', strtotime($booking->date_time)) }}</td>
                    <td>
                        <span class="status {{ $booking->status }}">{{ ucfirst($booking->status) }}</span>
                    </td>
                    <td>${{ number_format($booking->amount, 2) }}</td>
                    <td>
                        <a href="{{route('Booking.edit' ,$booking->id )}}" class="btn">Edit</a>
                        <form action="{{ route('delete.Booking', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No bookings found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

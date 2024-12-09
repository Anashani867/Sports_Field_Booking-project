
<!DOCTYPE html>
<html lang="en">

    @include('admin.partials.head')


    <style>
        body {
            font-family: 'Arial', sans-serif;
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
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }
        .notification-bell {
            position: relative;
            cursor: pointer;
        }
        .notification-bell .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: gray;
            margin-left: 15px;
            cursor: pointer;
        }
        .filter-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                width: 100%;
                height: auto;
                padding: 10px 15px;
            }
            .main {
                margin-left: 0;
                padding: 10px;
            }
        }

    </style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')


<!-- Main Content -->
<div class="main">
{{--    <nav class="navbar navbar-light bg-light d-flex justify-content-between">--}}
{{--        <h4 class="m-0"> Dashboard</h4>--}}
{{--        <div class="d-flex align-items-center">--}}
{{--            <div class="notification-bell position-relative me-3">--}}
{{--                <i class="bi bi-bell fs-4"></i>--}}
{{--                <span class="badge rounded-pill">3</span>--}}
{{--            </div>--}}
{{--            <div class="profile-icon"></div>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Dashboard</h4>
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
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.profile.update')); ?>">  profile</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf

                        </form>
                        <button type="submit" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> log out</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{--@section('hero-admin','Dashboard')--}}


    <!-- Stats Section -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-calendar-event icon-box fs-1 text-warning"></i>
                    <h5 class="card-title mt-3">Total Bookings</h5>
                    <p class="card-text fs-4">{{$totalBooking}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-currency-dollar icon-box fs-1 text-success"></i>
                    <h5 class="card-title mt-3">Total Revenue</h5>
                    <p class="card-text fs-4">${{$totalPayments}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-geo-alt icon-box fs-1 text-primary"></i>
                    <h5 class="card-title mt-3">Active Fields</h5>
                    <p class="card-text fs-4">{{ $totalFields }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-people icon-box fs-1 text-info"></i>
                    <h5 class="card-title mt-3">Users</h5>
                    <p class="card-text fs-4">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings Section -->
    <h2 class="mb-3">Recent Bookings</h2>
    <div class="filter-container">
        <input type="text" class="form-control me-2" id="bookingFilter" placeholder="Filter by field name">
        <input type="date" class="form-control me-2" id="dateFilter" placeholder="Filter by date">
        <select class="form-control" id="statusFilter">
            <option value="">Filter by status</option>
            <option value="confirmed">Confirmed</option>
            <option value="pending">Pending</option>
            <option value="cancelled">Cancelled</option>
        </select>
    </div>
    @if($Booking->isNotEmpty())
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Field</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Amount</th>
        </tr>
        </thead>

        <tbody id="bookingTable">
        @foreach($Booking as $Book)
            <tr>
                <td>{{ $Book->field_name ?? 'Unknown Field' }}</td>
            <td>{{ date('Y-m-d', strtotime($Book->date_time)) }}</td>
            <td>{{ date('H:i', strtotime($Book->date_time)) }} - {{ date('H:i', strtotime($Book->date_time . ' +2 hours')) }}</td>
            <td>
                            <span class="badge
                                @if($Book->status == 'confirmed') bg-success
                                @elseif($Book->status == 'pending') bg-warning
                                @else bg-danger @endif">
                                {{ ucfirst($Book->status) }}
                            </span>
            </td>
                <td>${{ number_format($Book->amount, 2) }}</td>

                {{--            <td>--}}
{{--                <i class="bi bi-pencil-square text-primary me-3" role="button"></i>--}}
{{--                <i class="bi bi-trash text-danger" role="button"></i>--}}
{{--            </td>--}}
            </tr>
            @endforeach

{{--        <tr>--}}
{{--            <td>Soccer Field B</td>--}}
{{--            <td>2024-11-22</td>--}}
{{--            <td>10:00 - 12:00</td>--}}
{{--            <td><span class="badge bg-warning">Pending</span></td>--}}
{{--            <td>--}}
{{--                <i class="bi bi-pencil-square text-primary me-3" role="button"></i>--}}
{{--                <i class="bi bi-trash text-danger" role="button"></i>--}}
{{--            </td>--}}
{{--        </tr>--}}
        </tbody>
    </table>
    @else
        <p>No contact records available.</p>
    @endif
</div>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>--}}

<!-- JavaScript for Filtering -->
<script>
    function filterTable() {
        const nameFilter = document.getElementById('bookingFilter').value.toLowerCase();
        const dateFilter = document.getElementById('dateFilter').value;
        const statusFilter = document.getElementById('statusFilter').value.toLowerCase();

        const rows = document.querySelectorAll('#bookingTable tr');
        rows.forEach(row => {
            const fieldName = row.children[0].innerText.toLowerCase();
            const bookingDate = row.children[1].innerText;
            const status = row.children[3].innerText.toLowerCase();

            const matchesName = fieldName.includes(nameFilter);
            const matchesDate = !dateFilter || bookingDate === dateFilter;
            const matchesStatus = !statusFilter || status.includes(statusFilter);

            if (matchesName && matchesDate && matchesStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('bookingFilter').addEventListener('input', filterTable);
    document.getElementById('dateFilter').addEventListener('input', filterTable);
    document.getElementById('statusFilter').addEventListener('change', filterTable);


    let table = new DataTable('#example');

    table.on('click', 'tbody tr', function () {
        let data = table.row(this).data();

        alert('You clicked on ' + data[0] + "'s row");
    });
</script>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>--}}

</body>
</html>
</body>
</html>

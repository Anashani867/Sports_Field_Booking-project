
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

    .table td, .table th {
        vertical-align: middle;
    }

    .profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: gray;
    }
</style>

<body>
@include('admin.partials.nav')

<div class="main">
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Payments Dashboard</h4>
        <div class="d-flex align-items-center">
            <div class="profile-icon" style="width: 40px; height: 40px; border-radius: 50%;  background-size: cover; border: 2px solid #007bff;"></div>
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


    <!-- Summary Cards -->
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Payments Dashboard</h1>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h4>Total Payments</h4>
                        <h2>${{ number_format($stats['total_payments'], 2) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h4>Pending Payments</h4>
                        <h2>JD{{ number_format($stats['pending_payments'], 2) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <h4>Failed Payments</h4>
                        <h2>{{ $stats['failed_payments'] }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row">
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Monthly Payment Trends
                    </div>
                    <div class="card-body">
                        <canvas id="monthlyPaymentsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-pie me-1"></i>
                        Payment Methods Distribution
                    </div>
                    <div class="card-body">
                        <canvas id="paymentMethodsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Payments Table -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Recent Payments
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Booking ID</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recentPayments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->user->name ?? 'N/A' }}</td>
                            <td>{{ $payment->booking_id }}</td>
                            <td>JD{{ number_format($payment->amount, 2) }}</td>
                            <td>
                                <span class="badge bg-info">{{ $payment->payment_method }}</span>
                            </td>
                            <td>
                                @switch($payment->payment_status)
                                    @case('paid')
                                        <span class="badge bg-success">Completed</span>
                                        @break
                                    @case('Pending')
                                        <span class="badge bg-warning">Pending</span>
                                        @break
                                    @default
                                        <span class="badge bg-danger">Failed</span>
                                @endswitch
                            </td>
                            <td>{{ Carbon\Carbon::parse($payment->created_at)->format('M d, Y H:i') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Monthly Payments Chart
                const monthlyData = @json($monthlyPayments);
                new Chart(document.getElementById('monthlyPaymentsChart'), {
                    type: 'line',
                    data: {
                        labels: monthlyData.map(item => {
                            const [year, month] = item.month.split('-');
                            return new Date(year, month - 1).toLocaleDateString('default', { month: 'long', year: 'numeric' });
                        }),
                        datasets: [{
                            label: 'Monthly Payments',
                            data: monthlyData.map(item => item.total),
                            fill: false,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return '$' + value.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });

                // Payment Methods Chart
                const methodsData = @json($stats['payment_methods']);
                new Chart(document.getElementById('paymentMethodsChart'), {
                    type: 'doughnut',
                    data: {
                        labels: methodsData.map(item => item.payment_method),
                        datasets: [{
                            data: methodsData.map(item => item.count),
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            });

        </script>


</body>
</html>


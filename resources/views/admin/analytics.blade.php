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

    .chart-container {
        position: relative;
        height: 400px;
        width: 100%;
        margin: 20px 0;
    }
</style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<!-- Main Content -->
<div class="main">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Analytics</h4>
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
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="logout-form">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item"> log out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Summary Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-graph-up-arrow fs-1 text-warning"></i>
                    <h5 class="card-title mt-3">Total Users</h5>
                    <p class="card-text display-4">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-eye fs-1 text-success"></i>
                    <h5 class="card-title mt-3">Total Page Views</h5>
                    <p class="card-text display-4">{{ $totalPageViews }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-graph-down-arrow fs-1 text-danger"></i>
                    <h5 class="card-title mt-3">Bounce Rate</h5>
                    <p class="card-text display-4">{{ $bounceRate }}%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Charts -->
    <div class="chart-container">
        <h5 class="text-center">User Growth Over Time</h5>
        <canvas id="userGrowthChart"></canvas>
    </div>

    <div class="chart-container">
        <h5 class="text-center">Page Views Per Day</h5>
        <canvas id="pageViewChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // User Growth Chart
        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($userGrowthData->pluck('date')) !!},
                datasets: [{
                    label: 'New Users',
                    data: {!! json_encode($userGrowthData->pluck('value')) !!},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.4,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                }
            }
        });

        // Page View Chart
        const pageViewCtx = document.getElementById('pageViewChart').getContext('2d');
        new Chart(pageViewCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($pageViewData->pluck('date')) !!},
                datasets: [{
                    label: 'Page Views',
                    data: {!! json_encode($pageViewData->pluck('value')) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                }
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

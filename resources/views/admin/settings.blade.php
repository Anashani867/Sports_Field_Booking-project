
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
    </style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<!-- Main Content -->
<div class="main">
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Settings</h4>
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

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-speedometer2 fs-1 text-warning"></i>
                    <h5 class="card-title mt-3">Settings Overview</h5>
                    <p class="card-text">Summary information for settings.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
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

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: none;
        transition: transform 0.2s ease;
        margin-bottom: 20px;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .navbar {
        margin-bottom: 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
    }

    .table th {
        background-color: #343a40;
        color: white;
    }

    .table thead th {
        border-top: 1px solid #ddd;
    }

    .table tbody td {
        border-bottom: 1px solid #ddd;
    }

    .btn {
        font-size: 14px;
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

    .table-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .navbar {
        border-bottom: 2px solid #f1f1f1;
    }

    .profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: gray; /* Default color if no avatar */
        background-size: cover;
        background-position: center;
        border: 2px solid #007bff; /* Blue border around the avatar */
    }

    .user-name p {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
        color: #333;
        line-height: 1.5;
    }

    .d-flex {
        display: flex;
        align-items: center;
    }

    .ms-3 {
        margin-left: 15px;
    }

</style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<!-- Main Content -->
<div class="main">
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Manage Fields</h4>
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


    <!-- Summary Section -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-person-lines-fill fs-1 text-warning"></i>
                    <h5 class="card-title mt-3">Total Fields</h5>
                    <p class="card-text">{{ $totalFields }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fields Table -->
    <div class="table-container">
        <a href="{{ route('admin.createField') }}" class="btn btn-primary mb-3">Add New Field</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Field Name</th>
                <th>Location</th>
                <th>Availability</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fields as $field)
                <tr>
                    <td>{{ $field->id }}</td>
                    <td>{{ $field->field_name }}</td>
                    <td>{{ $field->location }}</td>
                    <td>{{ $field->availability }}</td>
                    <td>${{ $field->price }}</td>
                    <td>
                            <span class="badge {{ $field->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                {{ $field->status == 'active' ? 'Active' : 'Inactive' }}
                            </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.editField', $field->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.deleteField', $field->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

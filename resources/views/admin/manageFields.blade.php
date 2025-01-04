<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        display: flex;
    }

    .sidebar {
        width: 250px;
        position: fixed;
        height: 100vh;
        background: #1a1a2e;
        color: white;
        padding: 15px 10px;
        overflow-y: auto;
        z-index: 1050;
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

    .main-container {
        width: calc(100% - 250px);
        margin-left: 250px;
        min-height: 100vh;
    }

    .navbar {
        position: fixed;
        top: 0;
        right: 0;
        width: calc(100% - 250px);
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
        z-index: 1000;
        border-bottom: 2px solid #f1f1f1;
    }

    .content-area {
        margin-top: 80px;
        padding: 20px;
        background-color: #f8f9fa;
    }

    .stats-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-5px);
    }

    .stats-icon {
        font-size: 2.5rem;
        color: #ff9f43;
        margin-bottom: 15px;
    }

    .table-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
    }

    .table th {
        background-color: #343a40;
        color: white;
        border: none;
    }

    .table tbody td {
        border-bottom: 1px solid #ddd;
    }

    .profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: gray;
        background-size: cover;
        background-position: center;
        border: 2px solid #007bff;
    }

    .user-name p {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }

    .btn {
        font-size: 14px;
        padding: 8px 16px;
    }

    .badge {
        padding: 8px 12px;
        border-radius: 50px;
    }

    .alert {
        border-radius: 10px;
        margin-bottom: 20px;
    }
</style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<div class="main-container">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h4 class="m-0">Manage Fields</h4>
            <div class="d-flex align-items-center">
                <div class="profile-icon"></div>
                <div class="user-name ms-3">
                    <p><?php echo e(Auth::user()->name); ?></p>
                </div>
                <div class="dropdown ms-3">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="<?php echo e(route('admin.profile.update')); ?>">Profile</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <button type="submit" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-area">
        <!-- Stats Card -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="stats-card">
                    <i class="bi bi-person-lines-fill stats-icon"></i>
                    <h5>Total Fields</h5>
                    <h3 class="mt-2">{{ $totalFields }}</h3>
                </div>
            </div>
        </div>

        <!-- Fields Table -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Fields List</h5>
                <a href="{{ route('admin.createField') }}" class="btn btn-primary">Add New Field</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Field Name</th>
                    <th>Location</th>
                    <th>Availability</th>
                    <th>Price</th>
                    <th>start_time</th>
                    <th>end_time</th>
                    <th>start_date</th>
                    <th>end_date</th>
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
                        <td>JD{{ $field->price }}</td>
                        <td>{{ $field->start_time }}</td>
                        <td>{{ $field->end_time }}</td>
                        <td>{{ $field->start_date }}</td>
                        <td>{{ $field->end_date }}</td>
                        <td>
                                  <span class="badge
    {{ $field->status == 'active' ? 'bg-success' : ($field->status == 'fully_booked' ? 'bg-warning' : 'bg-danger') }}">
    {{ $field->status == 'active' ? 'Active' : ($field->status == 'fully_booked' ? 'Fully Booked' : 'Inactive') }}
</span>

                        </td>
                        <td>
                            <a href="{{ route('admin.editField', $field->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form id="deleteForm-{{ $field->id }}" action="{{ route('admin.deleteField', $field->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $field->id}})">
                                    <i class="bi bi-trash"></i> Delete
                                </button>                             </form>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                function confirmDelete(id) {
                                    Swal.fire({
                                        title: 'Are you sure?',
                                        text: "This action cannot be undone!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#d33',
                                        cancelButtonColor: '#3085d6',
                                        confirmButtonText: 'Yes, delete it!',
                                        cancelButtonText: 'Cancel'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Submit the form
                                            document.getElementById('deleteForm-' + id).submit();
                                        }
                                    });
                                }

                                @if(session('success'))
                                Swal.fire({
                                    title: 'Success!',
                                    text: '{{ session('success') }}',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                                @endif

                                @if(session('fail'))
                                Swal.fire({
                                    title: 'Error!',
                                    text: '{{ session('fail') }}',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                                @endif
                            </script>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

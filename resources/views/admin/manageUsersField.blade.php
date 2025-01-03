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
</style>

<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<!-- Main Content -->
<div class="main">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light d-flex justify-content-between px-3 py-2">
        <h4 class="m-0">Manage Users Field</h4>
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

    <!-- Summary Section -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-person-lines-fill fs-1 text-warning"></i>
                    <h5 class="card-title mt-3">Total Users</h5>
                    <p class="card-text">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-person-check fs-1 text-success"></i>
                    <h5 class="card-title mt-3">Active Users</h5>
                    <p class="card-text">{{ $activeUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <i class="bi bi-person-x fs-1 text-danger"></i>
                    <h5 class="card-title mt-3">Inactive Users</h5>
                    <p class="card-text">{{ $inactiveUsers }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="filter-section">
        <form method="GET" action="{{ route('admin.manageUsersField') }}" class="row">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Search by Name" value="{{ request()->get('name') }}">
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Search by Email" value="{{ request()->get('email') }}">
            </div>
            <div class="col-md-2">
                <select name="status" class="form-select">
                    <option value="">Select Status</option>
                    <option value="active" {{ request()->get('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request()->get('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
    </div>

    <!-- Users Table -->
    <div class="card">
        <div class="card-header">
            <h3>Contact Records</h3>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('fail'))
            <div class="alert alert-danger">{{ session('fail') }}</div>
        @endif

        <div class="card-body">
            @if($Users->isNotEmpty())
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Users as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>
                                <span id="status-{{ $contact->id }}"
                                      class="badge {{ $contact->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $contact->status == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $contact->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
{{--                                @if(session('success'))--}}
{{--                                    <script>--}}
{{--                                        document.addEventListener('DOMContentLoaded', function() {--}}
{{--                                            Swal.fire({--}}
{{--                                                title: 'Success!',--}}
{{--                                                text: '{{ session('success') }}',--}}
{{--                                                icon: 'success',--}}
{{--                                                confirmButtonText: 'OK'--}}
{{--                                            });--}}
{{--                                        });--}}
{{--                                    </script>--}}
{{--                                @endif--}}

                                <form id="deleteForm-{{ $contact->id }}" action="{{ route('admin.manageUsersField.delete', $contact->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $contact->id }})">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>

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


                                <form action="{{ route('admin.users.updateStatus', $contact->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                                        <option>selected</option>
                                        <option value="active" {{ $contact->status === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $contact->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    function toggleStatus(contactId) {
        const statusElement = $('#status-' + contactId);
        const currentStatus = statusElement.text().trim();
        const newStatus = (currentStatus === 'Active') ? 0 : 1;
        const statusText = (newStatus === 1) ? 'Active' : 'Inactive';
        const statusClass = (newStatus === 1) ? 'bg-success' : 'bg-danger';

        $.ajax({
            url: '/update-status/' + contactId,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                status: newStatus
            },
            success: function(response) {
                statusElement.text(statusText)
                    .removeClass('bg-success bg-danger')
                    .addClass(statusClass);
            },
            error: function(error) {
                alert('Error updating status');
            }
        });
    }
</script>
</body>
</html>

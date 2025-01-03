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

    .table-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        line-height: 1.5;
    }

    .btn {
        font-size: 14px;
    }

    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #f8f9fa;
        border-radius: 10px 10px 0 0;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #ff9f43;
    }
</style>
<body>
<!-- Sidebar -->
@include('admin.partials.nav')

<div class="main-container">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h4 class="m-0">Contact Management</h4>
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
        <div class="row g-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>subject</th>
                                <th>message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone_number }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <form id="deleteForm-{{ $contact->id }}" action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $contact->id }})">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>                                         </form>


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
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

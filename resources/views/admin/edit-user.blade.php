<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    :root {
        --primary-blue: #1a1a2e;
        --secondary-blue: #171c4c;
        --accent-orange: #ff9f43;
        --hover-blue: #090997;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
    }

    /* Sidebar Styles */
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



    /* Main Content Styles */
    .main-content {
        flex: 1;
        margin-left: 250px;
        padding: 20px;
        width: calc(100% - 250px);
    }

    /* Form Card Styles */
    .card {
        background: white;
        border: none;
        border-radius: 10px;
        margin: 20px auto;
        max-width: 800px;
    }

    .card-header {
        background-color: var(--secondary-blue);
        color: white;
        font-size: 20px;
        font-weight: 600;
        padding: 15px 20px;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
    }

    .card-body {
        padding: 30px;
    }

    /* Form Elements Styles */
    .form-label {
        font-weight: 600;
        color: #c85521;
        margin-bottom: 8px;
    }

    .form-control {
        height: 45px;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 8px 12px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--secondary-blue);
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
    }

    .mb-3 {
        margin-bottom: 20px !important;
    }

    /* Button Styles */
    .btn-primary {
        background-color: var(--secondary-blue);
        border: none;
        padding: 12px 30px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-1px);
    }

    /* Alert Styles */
    .alert {
        margin-bottom: 20px;
        border-radius: 5px;
        padding: 12px 20px;
    }

    .text-danger {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
        display: block;
    }
</style>

<body>
@include('admin.partials.nav')

<div class="main-content">
    <div class="container">
        <div class="card">
            <div class="card-header">Edit User</div>
            @if (Session::has('fail'))
                <div class="alert alert-danger m-3">{{Session::get('fail')}}</div>
            @endif
            <div class="card-body">
                <form action="{{ route('admin.users.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">

                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input
                            type="text"
                            name="full_name"
                            value="{{$user->name}}"
                            class="form-control"
                            id="full_name"
                            placeholder="Enter Full Name"
                        >
                        @error('full_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            value="{{$user->email}}"
                            class="form-control"
                            id="email"
                            placeholder="Enter Email"
                        >
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input
                            type="number"
                            name="phone_number"
                            value="{{$user->phone_number}}"
                            class="form-control"
                            id="phone"
                            placeholder="Enter Phone Number"
                        >
                        @error('phone_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

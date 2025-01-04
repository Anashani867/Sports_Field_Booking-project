@extends('admin.layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .dashboard-container {
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #120540;
            color: white;
            padding-top: 20px;
        }

        .logo {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #34495e;
        }

        .logo h2 {
            margin: 0;
            color: #ecf0f1;
            font-size: 24px;
        }

        .nav-menu {
            padding: 20px 0;
        }

        .nav-item {
            padding: 15px 25px;
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
        }

        .nav-item:hover {
            background: #050651;
            padding-left: 30px;
        }

        .nav-item i {
            margin-right: 10px;
            width: 20px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f6f9;
        }

        .header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .profile-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #120540;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52,152,219,0.2);
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background: #2980b9;
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #7f8c8d;
            margin-top: 40px;
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <div class="sidebar">
        <div class="logo">
            <h2>Admin Panel</h2>
        </div>
        <div class="nav-menu">
            <a href="header" class="nav-item active">
                <i class="fas fa-user"></i> Profile
            </a>

        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Profile Settings</h2>
        </div>

        <div class="profile-card">
            <form method="POST" action="{{ route('admin.profile.update') }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Enter your email">
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>

            <a href="{{ route('admin.logout') }}" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>

        <div class="footer">
            © 2025 Admin Panel - All Rights Reserved
        </div>
    </div>
</div>
</body>
</html>
@endsection

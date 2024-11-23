<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
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

    .sidebar ul li a:hover {
        background: #4e4e50;
    }

    .main {
        margin-left: 260px;
        padding: 20px;
    }

    .navbar {
        background-color: #ffffff;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 10px;
        margin-top: 20px;
    }

    .card-header {
        background-color: #28a745;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 20px;
        background-color: #ffffff;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .form-select {
        border-radius: 5px;
        padding: 10px;
        font-size: 14px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #28a745;
        outline: none;
        box-shadow: 0 0 4px rgba(40, 167, 69, 0.5);
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-primary:hover {
        background-color: #218838;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>
<body>
@include('admin.partials.nav')

<div class="main">
    <nav class="navbar d-flex justify-content-between">
        <h4 class="m-0">Create Field</h4>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Create Field
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.storeField') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="field_name" class="form-label">Field Name</label>
                        <input type="text" name="field_name" id="field_name" class="form-control" placeholder="Enter field name" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control" placeholder="Enter field location" required>
                    </div>

                    <div class="mb-3">
                        <label for="availability" class="form-label">Availability</label>
                        <input type="text" name="availability" id="availability" class="form-control" placeholder="Enter availability (e.g., 9:00 AM - 5:00 PM)" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Enter price per hour" required min="0" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.manageFields') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Create Field</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

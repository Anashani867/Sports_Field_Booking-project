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
        background-color: #050651;
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
        border-color: #050651;
        outline: none;
        box-shadow: 0 0 4px rgb(5, 6, 81);
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #050651;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #090997;
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
        <h4 class="m-0">Edit Field</h4>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Edit Field
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.updateField', $field->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="field_name" class="form-label">Field Name</label>
                        <input type="text" name="field_name" id="field_name" class="form-control" value="{{ $field->field_name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $field->location }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="availability" class="form-label">Availability</label>
                        <input type="text" name="availability" id="availability" class="form-control" value="{{ $field->availability }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $field->price }}" required min="0" step="0.01">
                    </div>

                    <!-- Start Date Field -->
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $field->start_date ? \Carbon\Carbon::parse($field->start_date)->format('Y-m-d') : '' }}" required>
                    </div>

                    <!-- End Date Field -->
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $field->end_date ? \Carbon\Carbon::parse($field->end_date)->format('Y-m-d') : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="active" {{ $field->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="fully_booked" {{ $field->status == 'fully_booked' ? 'selected' : '' }}>Fully Booked</option> <!-- خيار جديد -->
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.manageFields') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update Field</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

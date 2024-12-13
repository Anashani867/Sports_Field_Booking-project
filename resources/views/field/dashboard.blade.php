<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        form input, form select, form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        form button {
            background-color: #5cb85c;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #4cae4c;
        }

        .logout {
            margin-top: 20px;
            text-align: center;
        }

        .logout a {
            color: #d9534f;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Welcome to Field Dashboard</h1>
<p>Hello, {{ Auth::guard('user_fields')->user()->name }}</p>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<!-- Form to add a new field -->
<form action="{{ route('user_fields.field.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="field_name">Field Name</label>
    <input type="text" id="field_name" name="field_name" placeholder="Enter Field Name" required>

    <label for="location">Location</label>
    <input type="text" id="location" name="location" placeholder="Enter Location" required>

    <label for="availability">Availability</label>
    <select id="availability" name="availability" required>
        <option value="Available">Available</option>
        <option value="Not Available">Not Available</option>
    </select>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" placeholder="Enter Price" required>

    <label for="image">Field Image</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <button type="submit">Add Field</button>
</form>

<div class="logout">
    <a href="{{ route('user_fields.logout') }}">Logout</a>
</div>

</body>
</html>

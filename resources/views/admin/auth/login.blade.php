<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e8f5e9;
        }
        h1 {
            text-align: center;
            color: #2e7d32;
            margin-bottom: 30px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 25px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #81c784;
        }
        label {
            font-size: 14px;
            color: #2e7d32;
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 2px solid #a5d6a7;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input:focus {
            outline: none;
            border-color: #2e7d32;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #2e7d32;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #1b5e20;
        }
        .error {
            color: #d32f2f;
            font-size: 14px;
            margin-bottom: 20px;
            background-color: #ffebee;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ef9a9a;
        }
        .error ul {
            margin: 0;
            padding-left: 20px;
        }
        .error li {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<h1>Admin Login</h1>

@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required value="{{ old('email') }}">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

</body>
</html>

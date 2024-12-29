<!DOCTYPE html>
<html lang="en" dir="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Registration Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 2.5rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #ff4b2b;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            font-weight: 600;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff4b2b;
        }

        .custom-input, .custom-select {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: white;
        }

        .custom-input:focus, .custom-select:focus {
            border-color: #ff4b2b;
            box-shadow: 0 0 0 3px rgba(255, 75, 43, 0.1);
            outline: none;
        }

        .custom-select {
            padding-left: 15px;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23ff4b2b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
        }

        .custom-button {
            width: 100%;
            padding: 14px;
            background: #ff4b2b;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .custom-button:hover {
            background: #ff3615;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 75, 43, 0.3);
        }

        .custom-button:active {
            transform: translateY(0);
        }

        @media (max-width: 480px) {
            .auth-container {
                padding: 1.5rem;
            }
        }

        ::placeholder {
            color: #999;
        }

        .custom-link {
            color: #ff8c00;
            text-decoration: none;
            font-weight: 600;
        }


        .custom-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<form action="{{ route('user_fields.register') }}" method="POST" class="auth-container">
    @csrf
    <h2>Register to our site</h2>

    <div class="form-group">
        <label for="name">Full Name</label>
        <div class="input-with-icon">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" required placeholder="Enter your full name" class="custom-input">
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <div class="input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" required placeholder="Enter your email" class="custom-input">
        </div>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" required placeholder="Create a password" class="custom-input">
        </div>
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm your password" class="custom-input">
        </div>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <div class="input-with-icon">
            <i class="fas fa-phone"></i>
            <input type="tel" name="phone" id="phone" required placeholder="Enter your phone number" class="custom-input">
        </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" required class="custom-select">
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <button type="submit" class="custom-button">Register</button>

    <div class="text-center">
        <p>Already have an account?
            <a href="{{ route('user_fields.login') }}" class="custom-link">Login here</a>
        </p>
    </div>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 20px;
        }

        .login-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 420px;
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(180deg, #ff3b3b, #ff6b3b);
        }

        h1 {
            color: #1a1a1a;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #ff3b3b, #ff6b3b);
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8f8f8;
        }

        input:focus {
            outline: none;
            border-color: #ff3b3b;
            background: #fff;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #ff3b3b, #ff6b3b);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 15px rgba(255, 59, 59, 0.2);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 59, 59, 0.3);
        }

        button:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(255, 59, 59, 0.2);
        }

        .error-message {
            background: #fff1f1;
            color: #ff3b3b;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 4px solid #ff3b3b;
            font-size: 14px;
            display: none;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px;
            }

            h1 {
                font-size: 24px;
            }

            input, button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Login</h1>
    <form method="POST" action="{{ route('user_fields.login') }}">
        @csrf
        <div class="error-message">
            Invalid credentials. Please try again.
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="text-center">
            <p>Don't have an account?
                <a href="{{ route('user_fields.register') }}" class="custom-link">Register Now</a>
            </p>
        </div>

        <button type="submit">Sign In</button>
    </form>
</div>
</body>
</html>

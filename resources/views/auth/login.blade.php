<!-- Custom Styles -->
<style>
    body {
        background: linear-gradient(135deg, #1a1a1a, #2d2d2d) !important;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .auth-container {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 400px;
    }

    .logo-section {
        text-align: center;
        margin-bottom: 2rem;
    }

    .logo-section h1 {
        color: #ff4b2b;
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .logo-section p {
        color: #666;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #333;
        font-weight: 600;
    }

    .form-group input {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-group input:focus {
        border-color: #ff4b2b;
        outline: none;
    }

    .inline-flex {
        display: flex;
        align-items: center;
        margin: 1rem 0;
    }

    .remember-me input {
        margin-right: 0.5rem;
    }

    .custom-link {
        color: #ff8c00;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .custom-link:hover {
        text-decoration: underline;
    }

    .custom-input {
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .custom-input:focus {
        border-color: #ff4b2b;
        outline: none;
        box-shadow: none;
    }

    .custom-button {
        width: 100%;
        padding: 1rem;
        background: #ff4b2b;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .custom-button:hover {
        background: #ff3615;
    }

    .custom-link {
        color: #ff8c00;
        text-decoration: none;
        font-weight: 600;
    }

    .custom-link:hover {
        text-decoration: underline;
    }

    @media (max-width: 480px) {
        .auth-container {
            width: 95%;
            padding: 1.5rem;
        }
    }
</style>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<div class="auth-container">
    <div class="logo-section">
        <h1>Booking System</h1>
        <p>Welcome back!</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"
                          class="custom-input"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autofocus
                          autocomplete="username"
                          placeholder="Enter your email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password"
                          class="custom-input"
                          type="password"
                          name="password"
                          required
                          autocomplete="current-password"
                          placeholder="Enter your password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="flex items-center justify-between mt-4 mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me"
                       type="checkbox"
                       name="remember"
                       class="rounded border-gray-300">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="custom-link text-sm"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="custom-button">
                {{ __('Log in') }}
            </button>
        </div>

        <div class="text-center">
            <p>Don't have an account?
                <a href="{{ route('register') }}" class="custom-link">Register Now</a>
            </p>
        </div>
    </form>
</div>

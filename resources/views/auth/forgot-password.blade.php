<!-- إضافة رابط CSS الخاص بـ Bootstrap في الـ head -->
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
    .custom-input {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
        background-color: white;
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

</style>

<!-- جسم الصفحة -->
<div class="auth-container">
    <div class="logo-section text-center mb-4">
        <h1>Forgot Your Password?</h1>
        <p class="text-muted">Enter your email and we'll send you a link to reset your password.</p>
    </div>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Message Prompt -->
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Email Address -->
        <div class="form-group mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"
                          class="custom-input"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autofocus
                          placeholder="Enter your email address" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="custom-button">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>

    <div class="form-group text-center mt-4">
        <p class="text-sm text-gray-600">Remembered your password? <a href="{{ route('login') }}" class="custom-link">Log in here</a></p>
    </div>
</div>

<!-- إضافة سكربت جافا سكريبت الخاص بـ Bootstrap قبل الإغلاق مباشرة -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

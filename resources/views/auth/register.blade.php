<!-- Custom Styles -->
<style>
    body {
        background: linear-gradient(135deg, #1a1a1a, #2d2d2d) !important;
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

    .custom-input, .custom-select {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
        background-color: white;
    }

    .custom-input:focus, .custom-select:focus {
        border-color: #ff4b2b;
        outline: none;
        box-shadow: none;
    }

    .custom-select {
        cursor: pointer;
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

    .custom-input-icon {
        position: relative;
    }

    .custom-input-icon input {
        padding-left: 2.5rem;
    }

    .custom-input-icon i {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
        color: #999;
    }

    #other-country-code {
        display: none;
    }
</style>

<div class="auth-container">
    <div class="logo-section">
        <h1>Booking System</h1>
        <p>Create your account</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name"
                          class="custom-input"
                          type="text"
                          name="name"
                          :value="old('name')"
                          required
                          autofocus
                          autocomplete="name"
                          placeholder="Enter your full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Country Code -->
        <div class="form-group">
            <x-input-label for="country_code" :value="__('Country Code')" />
            <select name="country_code" id="country_code" class="custom-select" required>
                <option value="" disabled selected>Select your country code</option>
                <option value="+962" {{ old('country_code') == '+962' ? 'selected' : '' }}>Jordan (+962)</option>
                <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>USA (+1)</option>
                <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>UK (+44)</option>
                <option value="+20" {{ old('country_code') == '+20' ? 'selected' : '' }}>Egypt (+20)</option>
                <option value="+971" {{ old('country_code') == '+971' ? 'selected' : '' }}>UAE (+971)</option>
                <option value="+966" {{ old('country_code') == '+966' ? 'selected' : '' }}>Saudi Arabia (+966)</option>
                <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>India (+91)</option>
                <option value="+49" {{ old('country_code') == '+49' ? 'selected' : '' }}>Germany (+49)</option>
                <option value="other" {{ old('country_code') == 'other' ? 'selected' : '' }}>Other (Please specify)</option>
            </select>
            <x-input-error :messages="$errors->get('country_code')" class="mt-2" />
        </div>

        <!-- Custom Country Code (Visible only if "Other" is selected) -->
        <div id="other-country-code">
            <x-input-label for="custom_country_code" :value="__('Custom Country Code')" />
            <x-text-input id="custom_country_code" class="custom-input" type="text" name="custom_country_code" value="{{ old('custom_country_code') }}" placeholder="Enter country code" />
        </div>

        <!-- Phone Number -->
        <div class="form-group custom-input-icon">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <i class="fa fa-phone"></i>
            <x-text-input id="phone_number"
                          class="custom-input"
                          type="tel"
                          name="phone_number"
                          :value="old('phone_number')"
                          required
                          placeholder="Enter your phone number"
                          pattern="[0-9]{7,10}" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="form-group">
            <x-input-label for="gender" :value="__('Gender')" />
            <select name="gender" id="gender" class="custom-select" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"
                          class="custom-input"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autocomplete="username"
                          placeholder="Enter your email address" />
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
                          autocomplete="new-password"
                          placeholder="Create a password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation"
                          class="custom-input"
                          type="password"
                          name="password_confirmation"
                          required
                          autocomplete="new-password"
                          placeholder="Confirm your password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-group">
            <button type="submit" class="custom-button">
                {{ __('Register') }}
            </button>
        </div>

        <div class="text-center">
            <p>Already have an account?
                <a href="{{ route('login') }}" class="custom-link">Login here</a>
            </p>
        </div>
    </form>
</div>

<!-- JavaScript to toggle custom country code input -->
<script>
    document.getElementById("country_code").addEventListener("change", function() {
        var otherOption = this.value === "other";
        document.getElementById("other-country-code").style.display = otherOption ? "block" : "none";
    });
</script>

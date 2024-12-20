{{--<!DOCTYPE html>--}}
{{--<html lang="ar" dir="rtl">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>{{ __('تأكيد البريد الإلكتروني') }}</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <style>--}}
{{--        :root {--}}
{{--            --primary-red: #dc3545;--}}
{{--            --primary-orange: #fd7e14;--}}
{{--            --dark-black: #212529;--}}
{{--        }--}}

{{--        body {--}}
{{--            background-color: #f8f9fa;--}}
{{--            font-family: 'Cairo', sans-serif;--}}
{{--        }--}}

{{--        .custom-container {--}}
{{--            max-width: 600px;--}}
{{--            margin: 50px auto;--}}
{{--            padding: 2rem;--}}
{{--            background: white;--}}
{{--            border-radius: 15px;--}}
{{--            box-shadow: 0 0 20px rgba(0,0,0,0.1);--}}
{{--            border-top: 5px solid var(--primary-red);--}}
{{--        }--}}

{{--        .page-title {--}}
{{--            color: var(--dark-black);--}}
{{--            font-weight: 700;--}}
{{--            margin-bottom: 1.5rem;--}}
{{--            position: relative;--}}
{{--            padding-bottom: 10px;--}}
{{--        }--}}

{{--        .page-title:after {--}}
{{--            content: '';--}}
{{--            position: absolute;--}}
{{--            bottom: 0;--}}
{{--            right: 50%;--}}
{{--            transform: translateX(50%);--}}
{{--            width: 60px;--}}
{{--            height: 4px;--}}
{{--            background: linear-gradient(to right, var(--primary-red), var(--primary-orange));--}}
{{--        }--}}

{{--        .description {--}}
{{--            color: var(--dark-black);--}}
{{--            margin-bottom: 2rem;--}}
{{--            line-height: 1.6;--}}
{{--        }--}}

{{--        .success-message {--}}
{{--            background-color: #d4edda;--}}
{{--            border-color: #c3e6cb;--}}
{{--            color: #155724;--}}
{{--            padding: 1rem;--}}
{{--            border-radius: 8px;--}}
{{--            margin: 1rem 0;--}}
{{--        }--}}

{{--        .btn-resend {--}}
{{--            background: linear-gradient(45deg, var(--primary-red), var(--primary-orange));--}}
{{--            border: none;--}}
{{--            color: white;--}}
{{--            padding: 12px 30px;--}}
{{--            border-radius: 8px;--}}
{{--            font-weight: 600;--}}
{{--            transition: all 0.3s ease;--}}
{{--            width: 100%;--}}
{{--            margin-bottom: 1rem;--}}
{{--        }--}}

{{--        .btn-resend:hover {--}}
{{--            transform: translateY(-2px);--}}
{{--            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);--}}
{{--        }--}}

{{--        .btn-logout {--}}
{{--            background-color: var(--dark-black);--}}
{{--            border: none;--}}
{{--            color: white;--}}
{{--            padding: 12px 30px;--}}
{{--            border-radius: 8px;--}}
{{--            font-weight: 600;--}}
{{--            transition: all 0.3s ease;--}}
{{--            width: 100%;--}}
{{--        }--}}

{{--        .btn-logout:hover {--}}
{{--            background-color: #343a40;--}}
{{--            transform: translateY(-2px);--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="custom-container">--}}
{{--    <div class="text-center">--}}
{{--        <h2 class="page-title">{{ __('تأكيد البريد الإلكتروني') }}</h2>--}}
{{--        <p class="description">--}}
{{--            {{ __('شكراً لتسجيلك معنا! قبل البدء، هل يمكنك التحقق من عنوان بريدك الإلكتروني من خلال النقر على الرابط الذي أرسلناه إليك؟ إذا لم تستلم البريد الإلكتروني، سنقوم بإرسال رابط آخر بكل سرور.') }}--}}
{{--        </p>--}}

{{--        @if (session('status') == 'verification-link-sent')--}}
{{--            <div class="success-message">--}}
{{--                {{ __('تم إرسال رابط تحقق جديد إلى عنوان البريد الإلكتروني الذي قدمته أثناء التسجيل.') }}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--    <div class="mt-4">--}}
{{--        <form method="POST" action="{{ route('verification.send') }}">--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn-resend">--}}
{{--                {{ __('إعادة إرسال بريد التحقق') }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <div class="mt-3">--}}
{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn-logout">--}}
{{--                {{ __('تسجيل الخروج') }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Email Verification') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-red: #dc3545;
            --primary-orange: #fd7e14;
            --dark-black: #212529;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .custom-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-top: 5px solid var(--primary-red);
        }

        .page-title {
            color: var(--dark-black);
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-red), var(--primary-orange));
        }

        .description {
            color: var(--dark-black);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .success-message {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
        }

        .btn-resend {
            background: linear-gradient(45deg, var(--primary-red), var(--primary-orange));
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 1rem;
        }

        .btn-resend:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
        }

        .btn-logout {
            background-color: var(--dark-black);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-logout:hover {
            background-color: #343a40;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<div class="custom-container">
    <div class="text-center">
        <h2 class="page-title">Email Verification</h2>
        <p class="description">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="success-message">
                A new verification link has been sent to the email address you provided during registration.
            </div>
        @endif
    </div>

    <div class="mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn-resend">
                Resend Verification Email
            </button>
        </form>
    </div>

    <div class="mt-3">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">
                Log Out
            </button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

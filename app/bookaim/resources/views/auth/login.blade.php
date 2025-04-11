<x-guest-layout>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #dc3545, #f8f9fa);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border: 1px solid #dc3545;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .form-header {
            color: #dc3545;
            font-weight: bold;
            font-size: 28px;
            text-align: center;
            margin-bottom: 24px;
        }

        .form-label {
            font-weight: bold;
            color: #6c757d;
            font-size: 14px;
        }

        .form-control {
            border: 1px solid #dc3545;
            border-radius: 6px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.25);
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
            padding: 12px 16px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
            transform: translateY(-2px);
        }

        .text-link {
            color: #dc3545;
            text-decoration: none;
            font-size: 14px;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 16px;
        }
    </style>

    <div class="login-container">
        <div class="form-container">
            <h2 class="form-header">Welcome Back to BookAim</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4" style="margin-bottom: 16px;">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <!-- Password -->
                <div class="mb-4" style="margin-bottom: 16px;">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <!-- Remember Me -->
                <div class="mb-4" style="margin-bottom: 16px;">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <span class="ms-2 text-sm text-gray-600" style="margin-left: 8px; font-size: 14px;">Remember
                            me</span>
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4" style="margin-bottom: 16px;">
                    @if (Route::has('password.request'))
                        <a class="text-link" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-danger">
                    Log in
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

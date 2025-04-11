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

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 16px;
        }
    </style>

    <div class="register-container">
        <div class="form-container">
            <h2 class="form-header">Create Your BookAim Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="margin-top: 8px;" />
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a class="text-link" href="{{ route('login') }}">
                        Already registered?
                    </a>
                </div>

                <button type="submit" class="btn btn-danger">
                    Register
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

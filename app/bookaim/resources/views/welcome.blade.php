<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            text-align: center;
            background:  #dc3545;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #fff;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #fff;
        }
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .buttons a {
            text-decoration: none;
            font-size: 1.25rem;
            padding: 0.75rem 1rem;
            border: 2px solid #fff;
            color: #fff;
            background: transparent;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }
        .buttons a:hover {
            background: #fff;
            color: #2d2d2d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to BookAim</h1>
        <p>Join us in donating books to children in need and make a difference today.</p>
        <div class="buttons">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>
</body>
</html>

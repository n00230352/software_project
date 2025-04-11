<x-app-layout>
    <style>
        .banner-section {
            background-color: #dc3545;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .banner-section h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 16px;
        }

        .banner-section p {
            font-size: 20px;
            margin-bottom: 24px;
        }

        .highlight-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .highlight-section h2 {
            font-size: 32px;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 24px;
        }

        .highlight-section p {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 32px;
        }

        .services-section {
            padding: 60px 0;
        }

        .services-section h2 {
            font-size: 32px;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 40px;
            text-align: center;
        }

        .services-section .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .services-section .card-body {
            padding: 16px;
        }

        .services-section .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 12px;
        }

        .services-section .card-text {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 16px;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #dc3545;
            text-decoration: none;
        }
    </style>

    {{-- Banner Section --}}
    <div class="banner-section">
        <div class="container">
            <h1>Welcome to BookAim</h1>
            <p>Donate books, inspire futures, and make a difference in the lives of children worldwide.</p>
            <a href="{{ route('donations.create') }}" class="btn btn-light btn-lg" style="font-size: 18px;">Get Started</a>
        </div>
    </div>

    {{-- Highlight Section --}}
    <div class="highlight-section text-center">
        <div class="container">
            <h2>Why Choose BookAim?</h2>
            <p>
                At BookAim, we believe in the power of education to transform lives. By donating books, you are not just
                giving knowledge, but also hope and opportunity to children who need it the most. Join our growing
                community of donors and make a lasting impact today.
            </p>
            <a href="{{ route('donations.create') }}" class="btn btn-danger btn-lg" style="font-size: 18px;">Start
                Donating</a>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="services-section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Donate Books</h5>
                            <p class="card-text">Help children access education by donating books to those in need.</p>
                            <a href="{{ route('donations.create') }}" class="btn btn-danger"
                                style="font-size: 16px;">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Support Communities</h5>
                            <p class="card-text">Explore communities in need and see how you can contribute to their
                                growth.</p>
                            <a href="{{ route('communities.index') }}" class="btn btn-danger"
                                style="font-size: 16px;">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Track Donations</h5>
                            <p class="card-text">See the impact of your donations and how they change lives.</p>
                            <a href="{{ route('donations.index') }}" class="btn btn-danger"
                                style="font-size: 16px;">Track Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer>
        <div class="container">
            <p>&copy; 2025 BookAim. All rights reserved.</p>
            <p><a href="{{ route('dashboard') }}">Home</a> | <a href="{{ route('communities.index') }}">Communities</a>
                |
                <a href="{{ route('donations.index') }}">History</a>
            </p>
        </div>
    </footer>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .banner-section {
            background-color: #dc3545;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .banner-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .banner-section p {
            font-size: 1.2rem;
        }

        .highlight {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .highlight h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .services .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .placeholder-box {
            background-color: #e9ecef;
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #6c757d;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        footer a {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>

<body>

    {{-- Navigation Bar  --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">BookAim</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                <a class="nav-link" href="{{ route('communities.index') }}">Communities</a>
                <a class="nav-link" href="{{ route('donations.index') }}">History</a>
                <a class="btn btn-light" href="{{ route('donations.create') }}">Donate</a>
            </div>
        </div>
    </nav>

    {{-- Banner Section --}}
    <div class="banner-section">
        <div class="container">
            <h1>Support Learning with BookAim: Donate Books, Inspire Futures.</h1>
            <p>Every book has a story to tell—help us share them with children and inspire a love for reading. Your donation makes a difference!</p>
            <a href="{{ route('donations.create') }}" class="btn btn-light btn-lg mt-3">Donate now</a>
        </div>
    </div>

    {{-- About Section  --}}
    <div class="container py-5">
        <h2 class="text-center text-danger mb-4">This is How We Can Help</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="placeholder-box">Image Placeholder</div>
            </div>
            <div class="col-md-6">
                <p class="text-muted">
                    BookAim is a platform that connects people who want to donate books with children around the world.
                    Our mission is to inspire learning and open new opportunities by making books accessible to every child.
                    With your help, we can share the power of stories and knowledge with the next generation.
                </p>
                <a href="{{ route('donations.create') }}" class="btn btn-danger">Donate a Book</a>
            </div>
        </div>
    </div>

    {{-- Highlight Section --}}
    <div class="highlight">
        <div class="container text-center">
            <h2 class="text-danger mb-4">Why Choose BookAim?</h2>
            <p class="text-muted mb-4">
                At BookAim, we believe in the power of education to transform lives. By donating books, you are not just
                giving knowledge,
                but also hope and opportunity to children who need it the most. Join our growing community of donors and
                make a lasting impact today.
            </p>
            <a href="{{ route('donations.create') }}" class="btn btn-danger btn-lg">Start Donating</a>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="container py-5">
        <h2 class="text-center text-danger mb-4">These Are Our Services</h2>
        <div class="row text-center services">
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="placeholder-box">Image Placeholder</div>
                    <div class="card-body">
                        <h5 class="card-title">Donate Books</h5>
                        <p class="card-text text-muted">Donate books and make education accessible to all
                        </p>
                        <a href="{{ route('donations.create') }}" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="placeholder-box">Image Placeholder</div>
                    <div class="card-body">
                        <h5 class="card-title">Support Communities</h5>
                        <p class="card-text text-muted">Explore our existing communities and see how you can contribute to education.</p>
                        <a href="{{ route('communities.index') }}" class="btn btn-danger">Exlore the communities</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="placeholder-box">Image Placeholder</div>
                    <div class="card-body">
                        <h5 class="card-title">Track Donations</h5>
                        <p class="card-text text-muted">See the impact of your donations and how they change lives.</p>
                        <a href="{{ route('donations.index') }}" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Footer  --}}
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 BookAim. All rights reserved.</p>
            <p><a href="{{ route('dashboard') }}">Home</a> | <a
                    href="{{ route('communities.index') }}">Communities</a> | <a
                    href="{{ route('donations.index') }}">History</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

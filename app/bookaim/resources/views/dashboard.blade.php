<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

    <!-- Navigation Bar (Header) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">BookAim</a>

            <!-- Navbar links (non-collapsing) -->
            <div class="navbar-nav ms-auto">
                <!-- Dashboard link -->
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>

                <!-- All Communities link -->
                <a class="nav-link" href="{{ route('communities.index') }}">All our Communities</a>

                <!-- Donation History link -->
                <a class="nav-link" href="{{ route('donations.index') }}">Donation history</a>

                <!-- Donate a Book button (styled like a button) -->
                <a class="btn btn-light" href="{{ route('donations.create') }}">Donate a Book</a>

                <!-- Dropdown for profile and logout -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-body">
                        <h2 class="card-title text-danger mb-4">About BookAim</h2>
                        <p class="card-text text-muted mb-4">
                            BookAim is a platform dedicated to helping people donate books to children in need around the world.
                            Our mission is to make a positive impact on children’s education by providing them with the resources
                            they need to succeed. With your help, we can make a real difference in the lives of those who need it the most.
                        </p>
                        <a href="{{ route('donations.create') }}" class="btn btn-danger btn-lg">Donate a Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

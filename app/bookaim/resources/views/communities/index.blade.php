<x-app-layout>
    <style>
        .card-header {
            background-color: #dc3545;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .card-body {
            background-color: #f8f9fa;
        }

        .card-text {
            font-size: 14px;
        }

        .location-text {
            font-size: 13px;
            color: #6c757d;
        }

        .navbar {
            margin-bottom: 32px;
        }
    </style>

    <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="text-center" style="margin-bottom: 32px;">
            <h3 class="text-danger fw-bold" style="font-size: 28px;">Discover Communities to Help</h3>
            <p class="text-muted" style="font-size: 16px;">Find communities in need and make a difference today.</p>
        </div>
        <div class="row">
            @foreach ($communities as $community)
                <div class="col-md-4 mb-4"> <!-- Ensures 3 cards per row on medium screens and above -->
                    <div class="card border-danger shadow-sm h-100">
                        <div class="card-header">
                            {{ $community->name }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $community->info }}
                            </p>
                            <p class="location-text">
                                📍 {{ $community->location }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <style>
        .card-header {
            background-color: #dc3545;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .card-body {
            background-color: white;
            color: black;
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
            <h3 class="text-danger fw-bold" style="font-size: 28px;">All Books</h3>
            <p class="text-muted" style="font-size: 16px;">Browse through your donayion history.</p>
        </div>
        <div class="row" style="gap: 16px;">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card border-danger shadow-sm h-100">
                        <div class="card-header">
                            {{ $book->title }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Condition: {{ $book->condition }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <style>
        .form-header {
            color: #dc3545;
            font-weight: bold;
            font-size: 28px;
        }

        .form-container {
            background-color: #f8f9fa;
            border: 1px solid #dc3545;
            border-radius: 8px;
            padding: 20px;
        }

        .form-subheader {
            color: #6c757d;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 16px;
        }

        .form-label {
            font-weight: bold;
            color: #6c757d;
            font-size: 14px;
        }

        .form-control {
            color: #6c757d;
            font-size: 16px;
            padding: 12px;
            border-radius: 6px;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.25);
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 12px 16px;
            font-size: 16px;
            border-radius: 6px;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>

    <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="text-center" style="margin-bottom: 32px;">
            <h2 class="form-header">Donate a Book</h2>
            <p class="text-muted" style="font-size: 16px;">Fill out the form below to donate a book to a community in
                need.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h3 class="form-subheader">Add a New Donation</h3>

                    <form method="POST" action="{{ route('donations.store') }}">
                        @csrf

                        <!-- Community selection -->
                        <div class="mb-4" style="margin-bottom: 16px;">
                            <label for="community_id" class="form-label">Community</label>
                            <select id="community_id" name="community_id" class="form-control">
                                @foreach ($communities as $community)
                                    <option value="{{ $community->id }}">{{ $community->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Book title input -->
                        <div class="mb-4" style="margin-bottom: 16px;">
                            <label for="title" class="form-label">Book Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <!-- Book condition input -->
                        <div class="mb-4" style="margin-bottom: 16px;">
                            <label for="condition" class="form-label">Condition</label>
                            <select name="condition" id="condition" class="form-control">
                                <option value="New">New</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Bad">Bad</option>
                            </select>
                        </div>

                        <!-- Notes input (optional) -->
                        <div class="mb-4" style="margin-bottom: 16px;">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea name="notes" id="notes" rows="3" class="form-control"></textarea>
                        </div>

                        <!-- Submit button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-danger">
                                Donate Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

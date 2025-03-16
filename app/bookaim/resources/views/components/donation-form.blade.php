@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Book Title -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Book Title</label>
        <input type="text" name="title" id="title" class="form-input" required>
    </div>

    <!-- Book Condition (Dropdown) -->
    <div class="mb-4">
        <label for="condition" class="block text-sm font-medium text-gray-700">Book Condition</label>
        <select name="condition" id="condition" class="form-select" required>
            <option value="new">New</option>
            <option value="Like New">Like New</option>
            <option value="good">Good</option>
            <option value="Damaged">Damaged</option>
            <option value="Worn">Worn</option>
        </select>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Donate Book</button>
</form>
